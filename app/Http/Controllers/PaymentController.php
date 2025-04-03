<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Mail\PymentSuccessMail;
use App\Models\CustomerAddress;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Services\PaymentService;
use App\Http\Requests\CheckoutRequest;


class PaymentController extends Controller
{
    public $service;
    public function __construct(PaymentService $service)
    {
      $this->service =$service;
    }
    
    public function checkout(CheckoutRequest $request)
    {
        $data=$request->all();
        $existingAddress=CustomerAddress::where('email',$request->email)->where('phone',$request->phone)->first();
        if($existingAddress==null){
            CustomerAddress::create($request->all());
        }
        $data['order_id'] = 'ORD-' . random_int(1000000, 9999999);

        $order=Order::create($data);
        $types=json_decode($request->types);
        foreach($types as $type){
            if($request->has($type) && (int) $request->input($type) >= 1){

               $product= Product::where('name',$type)->first(); 
                $order->products()->attach($product->id, [
                    'quantity' => (int) $request->input($type), 
                    'total_price' => (int) $request->input($type) * $product->price 
                ]);
            }
        }
        $session =    $this->service->checkoutPage($request->all(),$order->id);

        return redirect($session->url);
    }


    public function success(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session_id = $request->get('session_id');
   
        $session = Session::retrieve($session_id);
        if ($session && isset($session->payment_status)) {
            $order = Order::with('products')->find($request->order_id);
           
            $order->update(['status'=>'paid']);
            $this->service->sendMail($order);
            $total=$order->amount;
            session()->forget('cart_type');
            return view('payment-success',['total'=>$total,'subtotal'=>$total]);
        } else {
            return view('payment-error');
        }
    }

}

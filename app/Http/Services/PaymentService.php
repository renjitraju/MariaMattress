<?php

namespace App\Http\Services;

use Carbon\Carbon;
use App\Mail\PymentSuccessMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Stripe\Checkout\Session;
use Stripe\Stripe;
class PaymentService
{
    

    public function sendMail($order){

        $order['date']= Carbon::now()->format('M-d-y'); 
        $order['time'] =Carbon::now()->format('H:i');

        $pdf = Pdf::loadView('invoices.invoice', ['order'=>$order]);
        $pdfPath = storage_path('app/public/invoices/invoice_' . $order->id . '.pdf');
   
        if (!file_exists(storage_path('app/public/invoices'))) 
            mkdir(storage_path('app/public/invoices'), 0777, true);
        
        $pdf->save($pdfPath);
   
        Mail::to($order->email)->send(new PymentSuccessMail($pdfPath,$order));

    }


    public function checkoutPage($data,$order_id){
    

        Stripe::setApiKey(env('STRIPE_SECRET'));
        return  Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'gbp',
                    'product_data' => [
                        'name' => 'Product Name',
                    ],
                    'unit_amount' => intval($data['amount'] * 100), 
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['order_id' => $order_id]). '&session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel', ['order_id' => $order_id]). '&session_id={CHECKOUT_SESSION_ID}',
        ]);

    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index()
    {
     
        return view('index');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function products()
    {
        return view('products');
    }
    public function abproductsdetailsutus()
    {
        return view('productsdetails');
    }
    public function contactus()
    {
        return view('contactus');
    }

    public function session(Request $request){

        $type=$request->type;
        $cartTypes = session()->get('cart_type');
        if (!is_array($cartTypes)) {
            $cartTypes = []; 
        }
        if (!in_array($type, $cartTypes)) {
            $cartTypes[] = $type;
        }

        $cartTypes = array_slice($cartTypes, -3);
        session(['cart_type' => $cartTypes]);
        return response()->json([
            'message' => 'Item added to cart with type: ' . $type,
            'type' => $type
        ]);
    }
    
    public function cart(Request $request)
    {

        
        if ($request->has('type')) {


        $type = Crypt::decrypt($request->input('type'));
        $cartTypes = session()->get('cart_type');
        if (!is_array($cartTypes)) {
            $cartTypes = []; 
        }
        if (!in_array($type, $cartTypes)) {
            $cartTypes[] = $type;
        }

        $cartTypes = array_slice($cartTypes, -3);
        session(['cart_type' => $cartTypes]);

        return view('carts');

        }
        else {
            //session()->flush();
            return view('carts');
        }


    }


    public function productsdetails()
    {
        return view('productsdetails');
    }
}

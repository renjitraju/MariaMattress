<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    public function cart(Request $request)
    {
        if ($request->has('type')) {


        $type = Crypt::decrypt($request->input('type'));
        switch ($type) {
            case 'single':
                $price = 54.99;
                $size = '90 x 190 x 25 cm';
                session(['type1' => 'single']);
                break;
            case 'double':
                $price = 64.99;
                $size = '140 x 190 x 25cm';
                session(['type2' => 'double']);
                break;
            case 'king':
                $price = 74.99;
                $size = '150 x 200 x 25cm';
                session(['type3' => 'king']);
                break;
        }
        return view('carts', compact('type', 'price', 'size'));

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

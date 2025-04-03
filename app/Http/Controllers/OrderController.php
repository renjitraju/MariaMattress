<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function completed(){

        $orders=Order::with('products')->where('status', 'completed') ->orderBy('created_at', 'desc')->get();
        return view('order.completed-order',['orders'=>$orders]);
    }


    public function inCompleted(){

        $orders=Order::with('products')->whereIn('status', ['paid','pending'])->orderBy('created_at', 'desc')->get();
        return view('order.incompleted-order',['orders'=>$orders]);

    }
    public function show($id){
        $order=Order::with('products')->where('id', $id)->first();
        return view('order.show',['order'=>$order]);

    }
    public function destroy(Request $request){

        $orders=Order::where('id',$request->id)->delete();
        return redirect()->route('completed.orders')->with('success', 'Order deleted successfully.');

    }
    public function statusChange(Request $request,$id){
     

        Order::where('id',$id)->update(['status'=>'completed']);
        return redirect()->route('completed.orders')->with('success', 'Order Status Updated.');

    }


}

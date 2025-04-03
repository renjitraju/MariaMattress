<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerAddress;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){

        $address=CustomerAddress::get();
        return view('user.index',['addresss'=>$address]);

    }
    public function destroy($id){
        
        $address=CustomerAddress::where('id',$id)->delete();
        return redirect()->route('user.index')->with('success', 'user deleted successfully.');
        
    }
}

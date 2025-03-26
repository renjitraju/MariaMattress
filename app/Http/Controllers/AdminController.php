<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminsignin(){
       return view('mariaadmin.sign-in');

    }
    public function adminDashboard(){
        request()->validate([
            'name'  => 'required',
            'password'  => 'required',

        ]);
        //$credentials = request()->only(['name', 'password']);
        $credentials=['name'=>request('name'),'password'=>request('password')];




        if (auth()->guard('admin')->attempt($credentials)) {
            //return redirect()->route('mariaadmin.dashboard');
            return view('mariaadmin.dashboard');
        } else {

            return redirect()->route('admin.signin')->with('message', 'Login Invalid');
        }
        // public function adminApprovedUsersList(){
        //     //User::where('id', decrypt($id))->update(['status' => 0);
        //     $users = User::where('status', '=', 1)->get();
        //     return view('mariaadmin.approvedusers',compact('users'));
        // }

    }

    public function adminContact(){
        $users = User::where('status', '=', 1)->get();
        return view('mariaadmin.admincontact',compact('users'));

     }



}

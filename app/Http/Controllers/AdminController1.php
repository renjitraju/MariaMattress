<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController1 extends Controller
{
    public function adminsignin(){
        //return view('mariaadmin.sign-in');
        return "hi";
    }

    public function adminDashboard(){
        request()->validate([
            'username'  => 'required',
            'password'  => 'required',

        ]);
        $input = request()->only(['username','password']);

        if(auth()->guard('admin')->attempt($input)){
           // $users = User::where('status', '=', 0)->get();
           // return view('mariaadmin.dashboard',compact('users'));
            return view('mariaadmin.dashboard');
        }else {
            //return request()->all();
            return redirect()->route('admin.signin')->with('message', 'Login Invalid');
        }

    }
    public function adminUserDetails(){
        $users = User::where('status', '=', 0)->get();
        return view('mariaadmin.userdetails',compact('users'));
    }
    public function adminSignOut(){
            auth()->guard('admin')->logout();
            return redirect()->route('admin.signin')->with('message', 'You have Signed out');
    }

    public function adminUserStatus($id){
        User::where('id', decrypt($id))->update(['status' => 1]);
        $users = User::where('status', '=', 0)->get();
        return view('mariaadmin.userdetails',compact('users'));
    }
    public function adminApprovedUsersList(){
        //User::where('id', decrypt($id))->update(['status' => 0);
        $users = User::where('status', '=', 1)->get();
        return view('mariaadmin.approvedusers',compact('users'));
    }

    public function adminUserEditDetails(){

        $user = User::find(decrypt(request('id')));
        //return $user;

        if(request()->hasFile('photo')){
            $extenstion = request()->photo->extension();
            $filename = request('firstname').request('lastname').time().".".$extenstion;
            //return $filename;
            request()->photo->storeAs('userprofiles', $filename);
        }else{
            $filename = decrypt(request('userpic'));;
        }
        $user->update([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'church' => request('church'),
            'place' => request('place'),
            'photo' => $filename

        ]);
       // return redirect()->route('admin.user.details');

    }

}

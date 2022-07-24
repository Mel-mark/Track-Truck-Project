<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSigninController extends Controller
{
    //
    public function index(){
        return view('admin/admin-sign-in');
    }
    public function store(Request $request){

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);    
        if (Auth::attempt($request->only('email','password'))){
            if(auth()->user()->is_Admin==1){
                return redirect()->intended('truck-services')->with('message', 'Successfuly Logged In');
                       
            }else{
                return back()->with('status', 'Invalid login details');
            }
        }
        return back()->with('status', 'Invalid login details');
        
        // if (!Auth::attempt($request->only('email','password',['is_Admin'=>1]))) {
        //     // Authentication passed...
        //     return back()->with('status', 'Invalid login details');
         
        // }
        // return redirect()->intended('truck-services');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/adminsignin');
    }

}


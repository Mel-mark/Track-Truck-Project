<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class signinController extends Controller
{
    public function index(){
        return view('sign-in');
    }

    public function store (Request $request){

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // if (!Auth::attempt($request->only('email', 'password',['is_Admin' => 0]))) 
        if (Auth::attempt($request->only('email','password'))){
            if(auth()->user()->is_Admin!=1){
                return redirect()->route('home')->with('message', 'IT WORKS!' );
                       
            }else{
                return back()->with('status', 'Invalid login details');
            }
        }
        return back()->with('status', 'Invalid login details');

    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}

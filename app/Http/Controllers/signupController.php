<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function index(){
        return view('sign-up');
    }

    public function store(Request $request){
        // dd($request->firstname);

        $this->validate($request, [
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'contact' => ['required', 'max:255'],
            'password' => ['required'],
        ]);

        User::create([
            "firstname"=> $request->firstname,
            "lastname"=> $request->lastname,
            "username"=> $request->username,
            "email"=> $request->email,
            "contact"=> $request->contact,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('login');
    }


}

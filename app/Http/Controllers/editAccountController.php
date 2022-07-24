<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class editAccountController extends Controller
{   
    public function index(){
        // dd(Auth::user());
        return view('edit-user-account',['user' => Auth::user()]);
    }

    public function update(Request $request, $id){ 

        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');

        if ($request->input('password') != null){
            $user->password = Hash::make($request->input('password')) ;
            $user->update();
        }else{
            $user->update();
        }
       
        // dd($user);
        return redirect()->route('home');
        // return redirect()->back()->with('status','Student Updated Successfully');

    }
}



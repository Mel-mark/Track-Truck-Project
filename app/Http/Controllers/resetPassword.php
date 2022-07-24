<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class resetPassword extends Controller
{
    //
    public function index(){
        $user = User::all();
        return view('reset-password', ['users'=>$user,'user' => Auth::user()]);
    }
    public function change(Request $request){
        $user = User::find(DB::table('users')->where('email', $request->input('email'))->value('id'));

        if ($user == true){
            if($user->is_Admin!=1){
                $user->password = Hash::make($request->input('password'));
                $user->update();
                return redirect()->route('login');
            }else{
                return back()->with('status', 'Email did not match our data');
            }
        }
        return back()->with('status', 'Email did not match our data');
       
    }
    
}
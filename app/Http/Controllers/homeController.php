<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\drivers;



class homeController extends Controller
{

    public function __construct(){
        $this->middleware(['auth']);
    }

    
    public function index(){
        // dd(Auth::user());
        $bookings = booking::all();
        $drivers = drivers::all();
        // dd($bookings->pickUpDate);
        return view('home',['user' => Auth::user(),'bookings'=>$bookings,'drivers'=>$drivers,]);

    }


}
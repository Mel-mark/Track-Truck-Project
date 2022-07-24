<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\drivers;

class TruckServicesController extends Controller
{
    //
    public function index(){
        $drivers = drivers::all();
        return view('admin/truck-services',
            ['user' => Auth::user(),'drivers'=>$drivers]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\booking;
use App\Models\drivers;
use App\Models\User;
use Illuminate\Http\Request;

class TripDetailsController extends Controller
{
    //
    public function index(){
        $bookings = DB::table('bookings')
        ->join('drivers','drivers.id', '=', 'bookings.driver_id')
        ->join('users','users.id', '=', 'bookings.user_id')
        ->select('*','drivers.id as driver_id','drivers.contact as driver_contact',
                    'users.id as user_id','users.contact as user_contact', 
                    'bookings.id as booking_id')
        ->whereNull('deleted_at')
        ->get();

        return view('admin/trip-details',['user' => Auth::user(), 'bookings'=>$bookings]);
    }

}

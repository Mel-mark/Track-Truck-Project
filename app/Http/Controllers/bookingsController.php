<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\booking;
use App\Models\drivers;
use App\Models\User;

class bookingsController extends Controller
{
    public function index(Request $request){  
     
        $Carbon = Carbon::now()->format('Y-m-d');
        $bookings = DB::table('bookings')
        ->join('drivers','drivers.id', '=', 'bookings.driver_id')
        ->join('users','users.id', '=', 'bookings.user_id')
        ->where('user_id', Auth::user()->id)
        ->select('*','drivers.id as driver_id','drivers.contact as driver_contact',
                    'users.id as user_id','users.contact as user_contact', 
                    'bookings.id as booking_id')
        ->whereNull('deleted_at')
        ->get();
    
        return view('bookings',['user' => Auth::user(), 'bookings'=>$bookings, 'Carbon'=>$Carbon]);
            // dd($bookings);
        // $bookings = booking::join('drivers','drivers.id', '=', 'booking.driver_id')
        //     ->join('users','users.id', '=', 'booking.user_id')
        //     ->where('user_id', Auth::user()->id)
        //     ->get();
    }

}
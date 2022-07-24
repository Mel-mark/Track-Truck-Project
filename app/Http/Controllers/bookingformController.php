<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\drivers;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class bookingformController extends Controller
{
    public function index(Request $request,$id,$date){
        // 'tracknum' => $request->get('tracknum'),
         // 'truckname' => $request->get('truckname'),
        $drivers = drivers::find($id);
        return view('booking-form',['drivers'=>$drivers,'user' => Auth::user(), 'pickDate'=>$date,
        'user_id' => $request->get('user_id'),
        'date' => $request->get('date'),
        'driver_id' => $request->get('driver_id'),
        'location' => $request->get('location'),
        'reason' => $request->get('reason'),  
        ]);
        
    }
    public function book_form(Request $request,$id){
        // $booking->truckname = $request->truckname;
        // $booking->trucknum = $request->trucknum;
        // $booking->driver_id = $request->driver_id;  
        // $drivers = drivers::find($id);
        $booking = new booking;       
        $booking->user_id = Auth::user()->id;
        $booking->driver_id = $id;
        $booking->pickUpDate = $request->pickUpDate;        
        $booking->pickUpLocation = $request->pickUpLocation;
        $booking->reason = $request->reason;
        $booking->save();

        return redirect('bookings');
    }
}

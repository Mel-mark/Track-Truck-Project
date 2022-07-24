<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\drivers;
use App\Models\User;
use Illuminate\Support\Carbon;


class UserBookingsController extends Controller
{
    //
    public function index(Request $request){
        $bookings = booking::all();
        $user = User::all();
        $drivers = drivers::all();
        $Carbon = Carbon::now()->format('Y-m-d');
        // dd($Carbon);
        // dd($bookings->pickUpDate);
        return view('admin/user-bookings',['user' => Auth::user(), 'bookings'=>$bookings, 'drivers'=>$drivers, 'Carbon'=>$Carbon]);
        // return view('admin/user-bookings');
    }

    public function confirmPayment(Request $request, $id){
        // dd($id);
         // dd($bookings);
        $bookings = booking::find($id);
        $bookings->is_paid = 1;
        $bookings->update();
        return redirect('/user-bookings');
    }
    public function cancelTrip(Request $request, $id){
        $bookings = booking::find($id);
        $bookings->delete();
        return redirect('/user-bookings');
    }

    // public function edit(Request $request, $id){
    //     switch($request->input('action')){
    //         case 'confirm':
    //             $bookings = booking::find($id);
    //             $bookings->is_paid = 1;
    //             $bookings->update();
    //             return redirect('/user-bookings');
    //             break;
    //         case 'cancel':
    //             $bookings = booking::find($id);
    //             $bookings->delete();
    //             return redirect('/user-bookings');
    //             break;
    //         case 'bill':
    //             return redirect('/admin-view-billing');
    //             break;            
    //     }
    // }

  
}
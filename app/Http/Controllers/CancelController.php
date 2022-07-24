<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\booking;

class CancelController extends Controller
{
    //
    public function index(){
        // $bookings = Model::onlyTrashed()->get();
        // $bookings = DB::table('bookings')
        // ->whereNotNull('deleted_at')
        // ->get();
        $bookings = booking::onlyTrashed()->get();
        return view('admin/admin-cancel',['user' => Auth::user(), 'bookings'=>$bookings]);
    } 
}

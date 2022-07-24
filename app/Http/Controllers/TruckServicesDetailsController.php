<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\drivers;

class TruckServicesDetailsController extends Controller
{
    //
    public function index(Request $request, $id){
        $drivers = drivers::find($id);
        $date = drivers::find($id)->created_at->toDateString();
        // $drivers = drivers::all();
        // $request->id;
        // dd($drivers);
        return view('admin/truck-services-details',['user' => Auth::user(),'drivers'=>$drivers, 'date'=>$date]);
    }
    public function update(Request $request, $id){
        $drivers = drivers::find($id);

        switch ($request->input('action')) {
            case 'update':
                // Save model
                $photo = $request->photo;
                    if ($request->hasFile('photo')){
                        $filenameWithExt = $photo->getClientOriginalName();
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        $extension = $photo->getClientOriginalExtension();
                        $image = $filename.'_'.time().'.'.$extension;
                        $path = $photo->storeAs('/public/img', $image);   
                        $drivers->photo = $image;
                    }
                $drivers->driverName = $request->input('driverName');
                $drivers->contact = $request->input('contact');
                $drivers->national_id = $request->input('national_id');
                $drivers->license_no = $request->input('license_no');
                $drivers->license_exp = $request->input('license_exp');
                $drivers->address = $request->input('address');
                $drivers->truck_name = $request->input('truck_name');
                $drivers->chasis_no = $request->input('chasis_no');   
                $drivers->description = $request->input('description'); 
                $drivers->fee = $request->input('fee');  
        
                $drivers->update();
                break;
            case 'getImg':
                break;
            case 'delete':
                $drivers->delete();
                break;
        }

        return redirect('/truck-services');

    }
}

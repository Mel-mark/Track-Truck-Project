<?php

namespace App\Http\Controllers;

use App\Models\drivers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AddTruckController extends Controller
{
    //
    public function index(){
        return view('admin/add-new-truck-service',['user' => Auth::user()]);
    }

    public function addTruck(Request $request){

        $photo = $request->photo;
        if ($request->hasFile('photo')){
            $filenameWithExt = $photo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $photo->getClientOriginalExtension();
            $image = $filename.'_'.time().'.'.$extension;
            $path = $photo->storeAs('/public/img', $image);     
        }
        $drivers = new drivers;
        // $drivers->id = Auth::user()->id;
        $drivers->driverName = $request->driverName;
        $drivers->contact = $request->contact;
        $drivers->national_id = $request->national_id;
        $drivers->license_no = $request->license_no;
        $drivers->license_exp = $request->license_exp;
        $drivers->address = $request->address;
        $drivers->truck_name = $request->truck_name;
        $drivers->chasis_no = $request->chasis_no;
        $drivers->description = $request->description;
        $drivers->fee = $request->fee;
        $drivers->photo = $image;
          
        $drivers->save();
        return redirect('/truck-services');
    }
}


        // $this->validate($request, [
        //     'driverName' => ['required', 'max:255'],
        //     'contact' => ['required', 'max:255'],
        //     'national_id' => ['required', 'max:255'],
        //     'license_no' => ['required', 'max:255'],
        //     'license_exp' => ['required', 'max:255'],
        //     'address' => ['required', 'max:255'],
        //     'truck_name' => ['required', 'max:255'],
        //     'description' => ['required', 'max:255'],
        //     'photo' => ['required', 'max:255'],
        // ]);
        // dd($request);
        // drivers::create([
        //     "driverName"=> $request->driverName,
        //     "contact"=> $request->contact,
        //     "national_id"=> $request->national_id,
        //     "license_no"=> $request->license_no,
        //     "license_exp"=> $request->license_exp,
        //     "address"=> $request->address,
        //     "truck_name"=> $request->truck_name,
        //     "chasis_no"=> $request->chasis_no,
        //     "description"=> $request->description,
        //     "photo"=>$request->photo,
        // ]);


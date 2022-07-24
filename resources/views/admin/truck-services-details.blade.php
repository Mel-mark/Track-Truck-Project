@extends('layouts.admin-navbar')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=Ddevice-width, initial-scale=1.e">
        <title>Truck detials - Admin</title>
        <!-- Link to CSS -->
        <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/admin-panel.css">
        <link rel="stylesheet" href="/css/truck-services-details.css">
    </head>
<body>
     <!-- Header -->
    <header>
        <a href="#" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
       
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
          
            <li><a href="/truck-services">Truck Services</a></li>
            <!-- <li><a href="/admin-billing">Billing</a></li> -->
            <li><a href="/user-bookings">User Bookings</a></li>
            <li><a href="/trip-details">Trip Details</a></li>
            <li><a href="/cancel">Canceled</a></li>
        </ul>
        <div class="header-btn">
            <a class="sign-up" >{{$user->username}}</a>
         
            <a href="/adminsignin" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>
    <!-- Form -->
    <div class="form">
        <!-- <button class="back-btn"  onclick="location.href='/truck-services'"> 
            <label for="back-btn">Go back</label>
            <input id="back-btn" type="button" style="display: none;">
        </button> -->
        <h1 style="text-align: center;">Details</h1>
        <hr>
        <div class="wrapper">
            <form class='inputs' method="post" action="/updateDriver/{{$drivers->id}}" enctype="multipart/form-data">
            @csrf
                <label>Driver/Owner Id </label>
                <input type="number" placeholder="Driver/Owner Id (auto increment)" value='{{$drivers->id}}' disabled>
                <label>Driver/Owner Name</label>
                <input type="text"name='driverName' placeholder="Driver/Owner Name" value="{{$drivers->driverName}}"  required>
                <label>Contact Number</label>
                <input type="number" name='contact' placeholder="Mobile Number" value="{{$drivers->contact}}"  required>
                <br>
                <label>Driver/Owner Join Date</label>
                <input type="date" placeholder="Driver Join Date" value="{{$date}}" disabled>
                <label>National Id No.</label>
                <input type="text" name='national_id' placeholder="National Id No." value='{{$drivers->national_id}}'  required>
                <label>License No.</label>
                <input type="text" name='license_no' placeholder="License No." value='{{$drivers->license_no}}'  required>
                <label>License End Date</label>
                <input type="date" name='license_exp' placeholder="License End Date" value="{{$drivers->license_exp}}"  required>
                <label>Driver/Owner Address</label>
                <textarea type="text" name='address' placeholder="Driver/Owner Address . . ."  required>{{$drivers->address}}</textarea>
                <label>Truck Name</label>
                <input type="text" name='truck_name' placeholder="Truck Name" value="{{$drivers->truck_name}}"  required>
                <label>Chassis Number</label>
                <input type="text" name='chasis_no' placeholder="Chassis No." value="{{$drivers->chasis_no}}"  required>
                <label>Truck Description</label>
                <textarea type="text" name='description' placeholder="Truck Description . . ."  required >{{$drivers->description}}</textarea>
                <label>Service Fee</label>
                <input type="number" placeholder="Service Fee" name='fee' value="{{$drivers->fee}}" required>
                <Label>Truck Photo:</Label>
                <input type="file"  class="change-btn" id="file-upload" name="photo" accept="image/jpeg, image/png"> 
               
                <img src="{{asset('storage/img/'.$drivers->photo)}}" width="50%"> 
               
                <br>
                <br>
                <button type="submit" name="action" value="delete" class="sign-up-btn" style="background-color: red;">Delete</button>
                <br>
                <br>
                <button type="submit" name="action" value="update" class="sign-up-btn">Update</button>
                <!-- <button class="sign-up-btn">Update</button> -->
            </form>
           
        </div>
    </div>

</body>

@endsection

 <!-- <button class="change-btn" >
                    <i class="fa fa-camera-retro" ></i>
                   <label for="file-upload">Change Photo</label> 
                    <input type="file" style="display: none;" id="file-upload">
                     <img src="{{$drivers->photo}}">
                </button> -->
                
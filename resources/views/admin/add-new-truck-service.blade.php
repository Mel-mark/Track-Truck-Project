@extends('layouts.admin-navbar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Truck - Admin</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/add-new-truck-service.css">

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
    <!-- Header -->
   <!-- Form -->
   <div class="form">
        <!-- <button class="back-btn"  onclick="location.href='/truck-services'"> 
                <label for="back-btn">Go back</label>
                <input id="back-btn" type="button" style="display: none;">
        </button> -->
    <h1 style="text-align: center;">Add New Truck Service</h1>
    <hr>
    <div class="wrapper">
    <form class="inputs" method="post" action="addTruck" enctype="multipart/form-data">
        @csrf      
        <label>Driver Name</label>
        <!-- <input type="number" placeholder="Driver/Owner Id (auto increment)"> -->
        <input type="text" placeholder="Driver/Owner Name" name='driverName'>
        <input type="number" placeholder="Mobile Number" name='contact'>
           
        <label>Driver Identifications</label>
        <!-- <input type="date" placeholder="Driver Join Date" value="" disabled> -->
        <input type="text" placeholder="National Id No." name="national_id">
        <input type="text" placeholder="License No." name="license_no">
        <label>License End Date</label>
        <input type="date" placeholder="License End Date" name="license_exp">
        <textarea type="text" placeholder="Driver/Owner Address . . ." name="address"></textarea>

        <input type="text" placeholder="Truck Name" name="truck_name">
        <input type="text" placeholder="Chassis No." name="chasis_no">
        <textarea type="text" placeholder="Truck Description . . ." name="description"></textarea>  
        <label>Service Fee</label>
        <input type="number" placeholder="Service Fee" name='fee'>
        <Label>Truck Photo:</Label>
        <input type="file"  class="add-btn" id="file-upload" name="photo"  accept="image/jpeg, image/png">      
        <br>
        <br>
        <button class="sign-up-btn">Submit</button>
    </form>
       
    </div>
</div>
    <!-- ScrolLReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link to JS -->
    <script src="main.js"></script>

</body>
</html>

@endsection

 <!-- <button class="add-btn" name="photo">
                <i class="fa fa-camera-retro" ></i>
               <label for="file-upload">Choose Photo</label> 
                <input type="file" style="display: none;" id="file-upload">
            </button> -->
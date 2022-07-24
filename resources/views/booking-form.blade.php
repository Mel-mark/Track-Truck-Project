@extends('layouts.user-navbar')
@section('content')

<head>
    <title>Booking Form</title>
    <link rel="stylesheet" href="css/user-bookings.css">
    <link rel="icon" href="../assets/img/Truck-Location-Logo.png" type = "image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bookings.css">
    <link rel="stylesheet" href="/css/booking-form.css">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script>
            $(document).ready(function() {
                $('input.deletable').wrap('<span class="deleteicon"></span>').after($('<span>x</span>').click(function() {
                    $(this).prev('input').val('').trigger('change').focus();
                }));
            });
        </script>
</head>

<body>
<header>
        <a href="#" class="logo"><img src="img/Truck-Location-Logo-3.png" alt=""></a>
       
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
          
            <li><a href="/home">Home</a></li>
            <!-- <li><a href="home.html">Rent</a></li>
            <li><a href="home.html">Services</a></li>
            <li><a href="home.html">About</a></li>
            <li><a href="home.html">Review</a></li> -->
            <li><a href="/bookings">Bookings</a></li>
        </ul>
        <div class="header-btn">
            <a  class="sign-up" href="/editaccount">{{$user->firstname}}</a>
         
            <a href="/" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>
    <!-- Form -->
    <div class="form">
        <h1 style="text-align: center;">Booking</h1>
        <hr>
        <div class="wrapper">
            <form class="inputs" method="post" action="/booking/{{$drivers->id}}">
            @csrf
                <!-- <input type="number" placeholder="Booking Id (auto increment)" name="BookingId"> -->
                <input type="text" placeholder="Name" name='firstname' value="{{$user->firstname}}" style="pointer-events:none;">
                <input type="number" placeholder="Mobile Number" name='contact' value="{{$user->contact}}" style="pointer-events:none;">
                <input type="email" placeholder="Email Address" name='email' value="{{$user->email}}" style="pointer-events:none;">
                <br>
                <label >Pick-up Date</label>
                <input type="date" placeholder="Pick-up Date" name='pickUpDate' onfocus="this.value=''" value='{{$pickDate}}' readonly>
                <span for="trucks">Truck Info:</span>
                <br>
                <!-- <input type="text" placeholder="Truck Name" name='truckname' value='{{$drivers->truck_name}}' style="pointer-events:none;"> -->
                    
                <input type="text" placeholder="Truck Driver/Owner" name='truckowner' value='{{$drivers->driverName}}' onfocus="this.value=''" style="pointer-events:none;" >
                <input type="number" placeholder="Truck Contact" name='trucknum'  value='{{$drivers->contact}}' onfocus="this.value=''" style="pointer-events:none;">
                <input type="text" placeholder="Destination . . ." value='{{$location}}' name='pickUpLocation' required>
                <textarea type="text" placeholder="Booking Reason . . ." name='reason' class="deletable"></textarea>

                <label >Service Fee</label>
                <input type="number" placeholder="Service Fee" name='fee' value="{{$drivers->fee}}" disabled>
                <button class="sign-up-btn">Submit</button>
            </form>
        </div>
    </div>

@endsection
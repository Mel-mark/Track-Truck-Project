@extends('layouts.user-navbar')
@section('content')
<head>
    <title>Bookings</title>
</head>
    <!-- <link href="/css/app.css" rel="stylesheet"> -->

<body>
    <!-- <script src="/js/app.js"></script> -->

<header>
        <a href="/home" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
       
        <!-- <div class="bx bx-menu" id="menu-icon"></div> -->

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

    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align: center;">My Bookings</h1>
            </div>
        </div>
        <hr>

        <div align="center">
            <table  class="content-table"">
            <thead>
            <tr>
                        <th scope="col" >Booking Id</th>
                        <th>Email</th>
                        <th>Pick Up Date</th>
                        <th>Truck Owner</th>
                        <th>TruckName</th>
                        <th>Driver Contact No.</th>
                        <th>Chasis No.</th>
                        <th>Location</th>
                        <th>Reason</th>
                        <th>Payment</th>
                        <th>Status</th>
                    </tr>  
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    
                    <tr>
                        <td>{{$booking->booking_id}}</td>
                        <!-- <th>{{$booking->firstname}} {{$booking->lastname}}</th> -->
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->pickUpDate}}</td>
                        <td>{{$booking->driverName}}</td>
                        <td>{{$booking->truck_name}}</td>
                        <td>{{$booking->driver_contact}}</td>
                        <td>{{$booking->chasis_no}}</td>
                        <td>{{$booking->pickUpLocation}}</td>
                        <td>{{$booking->reason}}</td>
                        @if($booking->is_paid == 1)
                            <th>PAID</th>
                        @else
                            <th>Not Paid</th>
                        @endif 
                        <td>
                        @if($Carbon === $booking->pickUpDate)
                            ONGOING
                        @elseif($Carbon < $booking->pickUpDate)
                            UPCOMING
                        @else
                            LAPSED
                        @endif    
                        </td>
                    </tr>  
                   
                @endforeach
            </tbody>
                </table>
                </div>
@endsection

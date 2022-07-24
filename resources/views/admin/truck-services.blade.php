@extends('layouts.admin-navbar')
@section('content')

<head>
    <title>Admin - Truck Services</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/truck-services.css">

</head>
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
            <a  class="sign-up" >{{$user->username}}</a>
         
            <a href="/adminsignin" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>

    <section class="services" id="services">
        <div class="heading">
          <br>
            <h1>Add New <br> Truck Service</h1>
          
           <section class="ride" id="ride">
            <div class="ride-container2">
                <div class="box2">
                    <a href="/add-new-truck-service"> <i class='bx bxs-message-square-add'></i></a>
                </div>
            </div>
           </section>
        </div>
        <div class="services-container">
       
        @foreach ($drivers as $drivers)
        
            <div class="box">
                <div class="box-img">                 
                    <img src="{{asset('storage/img/'.$drivers->photo)}}">      
                </div>
                <p>{{$drivers->truck_name}}</p>
                <h3>
                    {{$drivers->driverName}}
                   
                </h3>

                <h2>{{$drivers->contact}} | ₱{{$drivers->fee}} <span><strong style="color:red;">/BASE RATE</strong></span></span></h2>
                <a href="/truck-services-details/{{$drivers->id}}" class="btn">View</a>
            </div>
       
        @endforeach
            
        </div>
    </section>

    <!-- ScrolLReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link to JS -->
    <script src="main.js"></script>

@endsection


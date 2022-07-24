@extends('layouts.admin-navbar')
@section('content')

    <head>
        <title>Trip Details</title>
        <!-- Link to CSS -->
        <link rel="stylesheet" href="css/user-bookings.css">
                    
    </head>
<body>
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
            <a  class="sign-up">{{$user->username}}</a>
         
            <a href="/adminsignin" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>

   <br> <br> <br> 
        
        <h1 style="text-align: center;">Trip Details</h1>
        <hr>
               <!-- search bar right align -->
              <!-- <div class="search">
                <form action="#">
                    <input type="text"
                        placeholder=" Search. . ."
                        name="search">
                    <button>
                        <i class="fa fa-search"
                            style="font-size: 18px;">
                        </i>
                    </button>
                </form>
              </div> -->
    <!-- Tables -->
    <table class="content-table">
        <thead>
          <tr>
            <th>Booking ID</th>
            <th>Driver Name</th>
            <th>Driver Contact</th>
            <th>Truck Name</th>
            <th>User</th>
            <th>User Contact</th>
            <th>Pick Up Date</th>
            <th>Reason</th>
            <th>Total Cost</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($bookings as $booking)
            <tr>
              <td>{{$booking->booking_id}}</td>
              <td>{{$booking->driverName}}</td>
              <td>{{$booking->driver_contact}}</td>
              <td>{{$booking->truck_name}}</td>
              <td>{{$booking->firstname}} {{$booking->lastname}}</td>
              <td>{{$booking->user_contact}}</td>
              <td>{{$booking->pickUpDate}}</td>
              <td>{{$booking->reason}}</td>
              <td>₱{{$booking->fee}}</td>
              
            </tr>
          @endforeach
          
        </tbody>
      </table>

</body>
</html>

@endsection

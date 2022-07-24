@extends('layouts.admin-navbar')
@section('content')

    <head>
        <title>Admin Billing List</title>
        <!-- Link to CSS -->
        <link rel="stylesheet" href="css/admin-billing-list.css"> 
       
    </head>
<body>
    <header>
        <a href="#" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
       
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="/truck-services">Truck Services</a></li>
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
        <h1 style="text-align: center;">Canceled List</h1>
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
            <th>Name</th>
            <th>Driver ID</th>
            <!-- <th>Cancel</th> -->
            <th>Destination</th>
            <!-- <th>Confirm Trip</th> -->
            <!-- <th>Checked</th> -->
            <!-- <th>Status</th> -->
            <!-- <th>Bill</th> -->
            <!-- <th>Confirm Payment</th> -->
            <th>Pick Up Date</th>
            <!-- <th>Paid</th> -->
          </tr>
        </thead>
        <tbody>
          @foreach ($bookings as $booking)
            <tr>
              <td>{{$booking->id}}</td>
              <td>{{$booking->user->firstname}} {{$booking->user->lastname}}</td>
              <td>{{$booking->driver_id}}</td>
              <td>{{$booking->pickUpLocation}}</td>
              <td>{{$booking->pickUpDate}}</td>
              <!-- <td>dcode</td> -->
            </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Delete Modal -->
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Delete Billing?</h1>
      <p>Are you sure you want to delete the billing?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="deletebtn">Delete</button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');
var modal = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>



@endsection
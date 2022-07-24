@extends('layouts.admin-navbar')
@section('content')
    <head>
        <title>User Bookings - Admin</title>
        <link rel="stylesheet" href="css/user-bookings.css">
       
    </head>
<body>
 <!-- Header -->
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
        
        <h1 style="text-align: center;">User Booking List</h1>
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
            <th>Cancel</th>
            <th>Destination</th>
            <!-- <th>Confirm Trip</th> -->
            <th>Checked</th>
            <th>Status</th>
            <!-- <th>Bill</th> -->
            <th>Confirm Payment</th>
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
            <td>

              <form method="post" action="/cancelTrip/{{$booking->id}}">
                @csrf
                  @if($Carbon === $booking->pickUpDate || $Carbon < $booking->pickUpDate)
                  <button id="dltBTN" onclick="document.getElementById('id03').style.display='block'">
                      Cancel
                  </button>
                  @else
                  <button id="dltBTN" onclick="document.getElementById('id03').style.display='block'">
                      Detele
                  </button>
                  @endif
              </form>

            </td>
            <td> {{$booking->pickUpLocation}}</td>
            <!-- <td>
                <button  onclick="document.getElementById('id02').style.display='block'">
                    Confirm
                </button> 
            </td> -->
            <td>Yes</td>
            <td>
              @if($Carbon === $booking->pickUpDate)
                  ONGOING
              @elseif($Carbon < $booking->pickUpDate)
                  UPCOMING
              @else
                  LAPSED
              @endif    
            </td>
            <!-- <td>
                <a href="/admin-view-billing">
                    <button>Bill</button> 
                </a>
            </td> -->
            <td>
              @if($booking->is_paid ==1)
                PAID
              @else
              <form method="post" action="/confirmPayment/{{$booking->id}}">
                @csrf
                    <button type="submit" id="payBTN" onclick="document.getElementById('id01').style.display='block'">
                        Confirm
                    </button>    
              </form>
              @endif  
            </td>
            <td>
            {{$booking->pickUpDate}}
            </td>
            <!-- <td>Yes</td> -->
          </tr>
     @endforeach

        </tbody>
        
      </table>



<!-- Payment Modal -->
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

    <form class="modal-content" action="/action_page.php">
      @csrf
      <div class="container">
        <h1>Confirm Payment</h1>
        <p>Are you sure you want to confirm the payment?</p>
      
        <div class="clearfix">
          <button type="submit" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Yes</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Cancel</button>
        </div>
      </div>
    </form>
  </div>
  
  <!-- Trip Modal; -->
  <div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container">
        <h1>Confirm Trip</h1>
        <p>Are you sure you want to confirm the trip?</p>
      
        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Yes</button>
          <button type="button" onclick="document.getElementById('id02').style.display='none'" class="deletebtn">Cancel</button>
        </div>
      </div>
    </form>
  </div>
<!-- Delete Modal -->
<div id="id03" class="modal">
    <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container">
        <h1>Delete Booking</h1>
        <p>Are you sure you want to delete the booking?</p>
      
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
@extends('layouts.user-navbar')
@section('content')
<head>
    <title>Edit Account</title>
</head>

<body>
<header>
        <a href="/home" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
        <!-- <a href="#" class="logo"><img src="../assests/img/Truck-Location-Logo-3.png" alt=""></a> -->
       
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
            <a  class="sign-up" href="/editaccount">{{$user->username}}</a>
            <a href="/" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>

   <!-- Form -->
   <div class="form">
    <!-- <button class="back-btn" > 
        <label for="back-btn">Go back</label>
        <input id="back-btn" type="button" onclick="history.back()" style="display: none;">
    </button> -->
    <h1 style="text-align: center;">Your Account</h1>
    <p style="text-align: center;">You can edit your account here</p>
    <hr>
    <div class="wrapper">
        <form class="inputs" method='post' action='/update/{{$user->id}}'>
        @csrf
            <label>First Name</label>
            <input type="text" placeholder="First Name" value="{{$user->firstname}}" name='firstname' required>
                <label>Last Name</label>
                <input type="text" placeholder="Last Name" value="{{$user->lastname}}" name='lastname' required>
                <label>Username</label>
                <input type="text" placeholder="Username" value="{{$user->username}}" name='username' required>
                <label>Email</label>
                <input type="email" placeholder="Email Address" value="{{$user->email}}" name='email' required>
                <label>Mobile Number</label>
                <input type="number" placeholder="Mobile Number" value="{{$user->contact}}" name='contact' required>
                <!-- <label>Password</label>
                <input type="password" placeholder="Password" value="{{$user->password}}" name='password'> -->
                <label>New Password</label>
                <input type="password" placeholder="New Password" value="" name='password'>
            <button text-align="center" class="sign-up-btn" type='submit'>Save Changes</button>
        </form>
        
    </div>
</div>
    <!-- ScrolLReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link to JS -->
    <script src="js/main.js"></script>

@endsection
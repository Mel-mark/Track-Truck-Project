<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.e">
    <link rel="icon" href="../assets/img/Truck-Location-Logo.png" type = "image/x-icon">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bookings.css">
    <link rel="stylesheet" href="css/booking-form.css">
    <link rel="stylesheet" href="css/edit-user-account.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="../assets/img/Truck-Location-Logo.png" type = "image/x-icon">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
    crossorigin="anonymous">
    <!-- Script -->
    

</head>

<body>
    <!-- Header -->
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
            <a  class="sign-up" href="/edit-account">Yuri Garcia</a>
         
            <a href="/" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>
    @yield('content')
</body>
</html>
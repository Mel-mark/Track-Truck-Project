<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/Truck-Location-Logo.png" type = "image/x-icon">
    <!-- <title>Trucking Truck</title> -->
    <link href="{{ asset('css/sign-in-sign-up.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/admin-sign-in.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"> </script> 
</head>
<body>
<!-- <script src="/js/app.js"></script> -->
    <div>
        @yield('content')
    </div>
</body>
</html>
@extends('layouts.app')
@section('content')
<head>
<title>Change Password - Track Truck </title>
 <link href="/css/app.css" rel="stylesheet">
 <link href="{{ asset('css/reset-password.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<script src="/js/app.js"></script>

        @if(session()->has('status') || session() === null)
            <div class="alert ">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>NOTICE!</strong> <br> {{ session()->get('status') }}
              
            </div>
        @endif

    <form class="inputs" method='post' action="/change">
        @csrf
        <div class="card" >
            <div class="banner_container">
                
                <div class="banner">
                    <h1>Change Password</h1>
                </div>
                <img class="card-img-top" style="height:20rem;" src="https://www.heersmanagement.com/wp-content/uploads/2018/11/moving-out-of-state.jpg" alt="Image">
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
         
                <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="New Password"  required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Change Password</button>
                <br>
                <label>
                    <span class="text-checkbox"><a href="/login">Back to Login</a></span>
                </label> 
                
            </div>
        </div>
    </form>

</body>
@endsection
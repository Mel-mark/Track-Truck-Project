@extends('layouts.app')
@section('content')

<head>
<title>Log in - Track Truck </title>
</head>
<style>
.alert {
  padding: 20px;
  border-radius: 5px;
  background-color: #f44336;
  color: white;
  top: 1%;
  left: 40%;
  right: 40%;
  position:fixed;
  z-index: 1;
}.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}.closebtn:hover {
  color: black;
}
</style>

        @if(session()->has('status') || session() === null)
            <div class="alert ">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>WARNING!</strong> {{ session()->get('status') }}
              
            </div>
        @endif

    <div class="box-form">
        <div class="left">
            <div class="overlay">
               
            <h1>Login Now</h1>
            <p>TrackTruck, Olongapo's Number 1 Truck Service, we connect people with a certain need of our
                simple yet reliable service.</p>
            <!-- <span>
                <p>login with social media</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
            </span> -->
            </div>
        </div>
        
            <div class="right">
                <a href="/" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
            <h5>Login</h5>
            <p>Don't have an account? <a href="/signup">Create Your Account</a> it takes less than a minute</p>
            <form class="inputs" method='post' action="/loginauth">
                @csrf
                <input type="text" placeholder="Email" name ="email"  class=" @error('email') is-invalid @enderror" required>

                <br>
                <input type="password" placeholder="Password" name = "password" class=" @error('password') is-invalid @enderror" required>
                
                <br><br>
                
                 <!-- Angular -->

                 <label>
                    <span class="text-checkbox"><a href="/reset_Password">Forgot Password</a></span>
                </label>    
            <div class="remember-me--forget-password">
                   <br>
                <label>
                    <!-- <input type="checkbox" name="item" checked/> -->
                    <span class="text-checkbox"><a href="/adminsignin">Admin Login</a></span>
                </label>
                        <!-- <p>forget password?</p> -->
                    </div>
                        <br>
                        <a href="home">
                            <button >Login</button>
                        </a>
                </form>
              
        </div>
        
    </div>
    <!-- partial -->

@endsection
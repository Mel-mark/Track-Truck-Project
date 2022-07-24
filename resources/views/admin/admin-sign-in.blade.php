@extends('layouts.app')
@section('content')
<title>Admin Log in - Track Truck </title>
<style>
.alert {
  padding: 20px;
  border-radius: 5px;
  background-color: #f44336;
  color: white;
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

    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
            <h1>Admin Login</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Curabitur et est sed felis aliquet sollicitudin. Lore.</p>
            <!-- <span>
                <p>login with social media</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
            </span> -->
            </div>
        </div>
        
            <div class="right">
                <a href="#" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
            <h5>Login</h5>
            <p>Admin Panel. You can control/manage your web app here.</p>
            <form class="inputs" method="post" action="/adminAuth">
            @csrf
            <div class="inputs">
                <input type="text" placeholder="Email" name="email" required>
                <br>
                <input type="password" placeholder="Password" name="password" required>
            </div>
                
                <br><br>
                
                 <!-- Angular -->
            <div class="remember-me--forget-password">
                   
            <label>
                <!-- <input type="checkbox" name="item" checked/> -->
                <span class="text-checkbox"><a href="/login">User Login</a></span>
            </label>
                <!-- <p>forget password?</p> -->
            </div>
                
                <br>
                <a href="admin-panel">
                    <button >Login</button>
                </a>
              
            </div>
            </form>
        
    </div>
    <!-- partial -->
    @endsection
 
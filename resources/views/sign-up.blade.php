@extends('layouts.app')
@section('content')
<title>Sign Up - Track Truck </title>

    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
            <h1>Create Account</h1>
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
                <a href="#" class="logo"><img src="img/Truck-Location-Logo-3.png" alt=""></a>
            <h5>Signup</h5>
            <p>Already a user? <a href="/login">Login here</a> to enjoy our services with easy steps.</p>
            <form class="inputs" method='post' action='/register'>
                @csrf
                <input type="text" placeholder="First Name" name='firstname' required>
                <br>
                <input type="text" placeholder="Last Name" name='lastname' required>
                <br>
                <input type="text" placeholder="Username" name='username' required>
                <br>
                <input type="email" placeholder="Email Address" name='email' required>
                <br>
                <input type="number" placeholder="Mobile Number" name='contact' required>
                <br>
                <input type="password" placeholder="Password" name='password' id="password" required>
                <p >Password is: <span id="indicates">Empty</span></p>   
                <br><br>    
                <br>
                <div id='button'>
                    <button type="button" disabled>Sign up</button>

                </div>
            </form>
                
                
                 <!-- Angular -->
            <!-- <div class="remember-me--forget-password">
                   
        <label>
            <input type="checkbox" name="item" checked/>
            <span class="text-checkbox">Remember me</span>
        </label>
                <p>forget password?</p>
            </div> -->

        </div>
        
    </div>
    <!-- partial -->
    <script>
        let numbers = /\d/; //  numbers container
        let letters = /[A-Z]/;// upper case letters container
        var points = 0 ; // pointer if the password is strong
        var verify = '';
        var button = '<button type="submit">Sig nup</button>';

        $(function() {

            $('#password').on('input', () => {
                
                const strong = $('#password').val(); //get input data
              
                // check if contains upper input case
                let isMatch = letters.test(strong);
                let upper = isMatch ? "Yes" : "No";

                // check if contains input number
                let hasNumbers = numbers.test(strong);
                let number = hasNumbers ? "Yes" : "No";

                // points for every correct type of password
                if(upper == 'Yes')
                {
                    points += 1;
                }

                if(number == 'Yes')
                {
                    points += 1;
                }
                console.log(points);

                // password must contain letters and number
                if(strong != ''){
                    if(points >= 10 && upper == 'Yes' && number == 'Yes' && strong.length >= 8 )
                    {
                        verify = '<span style="color:green;">Strong</soan>';
                    }else if(points >= 6 && upper == 'Yes' && number == 'Yes' && strong.length >= 8)
                    {
                        
                        verify = '<span style="color:orange;">Good</soan>';
                    }
                    else{
                        verify = '<span style="color:red;">Too weak</span>';
                    }
                }else{
                    verify = 'Empty';
                    points = 0;
                }

                // remove disable if password is good
                if(points >= 6 && upper == 'Yes' && number == 'Yes' && strong.length >= 8)
                {
                    $('#button').html(button);

                }
                
                $('#indicates').html(verify);
            });
        });
    </script>

    @endsection

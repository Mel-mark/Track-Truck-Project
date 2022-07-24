@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.4">
    <title>Home</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home-star-rating.css">
    <!-- Box Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
    <!-- Header -->
    <header>
        <a href="#" class="logo"><img src="../assets/img/Truck-Location-Logo-3.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
          
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Rent</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#reviews">Review</a></li>
            <li><a href="/bookings">Bookings</a></li>
        </ul>
        <div class="header-btn">
            <a  class="sign-up" href="/editaccount">{{$user->username}} {{$user->user_id}}</a>
            <a href="/logout" class="sign-in"><i class='fas fa-sign-out-alt'></i>Logout</a>
        </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> for <br>rental transport</h1>
            <p>Schedule and organize your transport.<br> Book for details.</p>
            <div class="app-stores">
                <img src="../assets/img/ios.png">
                <img src="../assets/img/play.png">
            </div>
        </div>
        <div class="form-container">
            <form action="/booking-form">
                <!-- <div class="input-box">
                    <span>Location</span>
                    <input type="search" placeholder="Select Destination . . ." name='location' >
                </div> -->
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name='date' id="date" required >               
                </div>           
                <a href="#services" type="submit" class="btn">Pick Truck</a>
            </form>
        </div>
    </section>
    <!-- Ride -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Avail With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>Set your desired location where we can pick up and drop your belongings.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-check'></i>
                <h2>Pick-Up Date</h2>
                <p>Choose a desired date that matches your shedule for your convinience.</p>
            </div>

            <div class="box">
                <i class='bx bxs-calendar-star'></i>
                <h2>Book A Truck</h2>
                <p>Fill in the small details for a reliable transaction. Easy!</p>
            </div>
        </div>
    </section>
    <!------------------------- Services ------------------------->
    <section class="services" id="services">
        <div class="heading" >
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
        </div>
        <div class="services-container" id="driver__container">

        </div>
    </section>
    <!-- About -->
    <section class="about" id="about">
        <div class="heading">
            <span?>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>
        <div class="about-container">
            <div class="about-img">
                <img src="../assets/img/about.png">
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>TrackTruck is Olongapo's first web and app-based online Transport Booking platform, 
                connecting users to Hire a Truck with a network of various Truck drivers 
                for Simple and Fast Goods Delivery Option, Our Transport Expertise includes Full TruckLoad,
                Part TruckLoad, Door to Door Parcel.</p>

                <a href="#" class="btn">Learn More</a> 
            </div>
        </div>
    </section>
    <!-- Review -->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Write us A Review</span>
            <h1>Your Review</h1>
        </div>
        <div class="container">
            <div class="post">
              <div class="tnx">Thanks for rating us!</div>
              <div class="edit">EDIT</div>
            </div>
            <div class="star-widget">
              <input type="radio" name="rate" id="rate-5">
              <label for="rate-5" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-4">
              <label for="rate-4" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-3">
              <label for="rate-3" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-2">
              <label for="rate-2" class="fas fa-star"></label>
              <input type="radio" name="rate" id="rate-1">
              <label for="rate-1" class="fas fa-star"></label>
              <form action="#">
                <p></p>
                <div class="textarea">
                  <textarea cols="30" placeholder="Describe your experience.."></textarea>
                </div>
                <div class="btn">
                  <button type="submit">Post</button>
                </div>
              </form>
            </div>
          </div>
          
      
    </section>
    <!-- NewsLetter -->
    <!-- <section class="newsletter">
        <h2>Subscribe to Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter Your Email...">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section> -->
     <!-- @foreach ($drivers as $driver)
                <form action="/booking-form/{{$driver->id}}">
                    <div class="box">
                        <div class="box-img">
                            <img src="{{asset('storage/img/'.$driver->photo)}}">
                        </div>
                        <p>{{$driver->truck_name}}</p>
                        <h3>{{$driver->driverName}}</h3>
                        <h2>{{$driver->contact}} | ₱358 <span>/trip</span></h2>
                        <input type="submit" class="btn" value="Choose Truck">
                        <a href="#" class="btn">Rent Now</a>
                    </div>
                </form>
            @endforeach -->
    <div class="copyright">
        <p>&#169; Mind Optimizers Yuri Garcia | John Bryan Bolarde | Neo Morales</p>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>

    <!-- ScrolLReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link to JS -->
    <script src="js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script type="text/javascript">
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
          widget.style.display = "none";
          post.style.display = "block";
          editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none";
          }
          return false;
        }
        
        $("#date").on("change",function(){
            $('#driver__container').text('');
            var date= $(this).val();
            // alert(date); localStorage
            var data = @json($bookings);
            var drivers = @json($drivers);
            let available = [];
            let exceptions = [];
            for(var i=0;i<data.length;i++){
                console.log(date !== data[i].pickUpDate)
                if(date !== data[i].pickUpDate && !exceptions.includes(data[i].driver_id)){
                    available.push(data[i].driver_id);
                }else if(date === data[i].pickUpDate || available.includes(data[i].driver_id)){
                    exceptions.push(data[i].driver_id)
                    available = available.filter(function(a){return a !== data[i].driver_id})
                }
                console.log(available, "ava")
            }
            for(var j=0;j<drivers.length;j++){
                if(!exceptions.includes(drivers[j].id)){
                    available.push(drivers[j].id);
                }
            }
            const uniqueId = available.filter((x, i, a) => a.indexOf(x) == i)
            for(var j=0;j<uniqueId.length;j++){
                for(var k=0;k<drivers.length;k++){
                    console.log(drivers)
                    if(uniqueId[j] === drivers[k].id){
                        console.log(uniqueId[j], drivers[k].id)
                        $('#driver__container').append(`
                            <form action="/booking-form/${drivers[k].id}/${date}">
                                <div class="box">
                                    <div class="box-img">
                                        <img src="storage/img/${drivers[k].photo}">
                                    </div>
                                    <p>${drivers[k].truck_name}</p>
                                    <h3>${drivers[k].driverName}</h3>
                                    <h2>${drivers[k].contact} | ₱ ${drivers[k].fee} <span><strong style="color:red;">/BASE RATE</strong></span></h2>
                                    <input type="submit" class="btn" value="Choose Truck">
                                    <!-- <a href="#" class="btn">Rent Now</a> -->
                                </div>
                            </form>
                        `);    
                    }
                }
            }
        });
    </script>
</body>
</html>
    
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.e">
    <link rel="icon" href="../assets/img/Truck-Location-Logo.png" type = "image/x-icon">
    <title>Track Truck</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css">
   
    <!-- Box Icons -->
    <link rel="icon" href="http://example.com/favicon.png">
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
            <li><a href="#reviews">Reviews</a></li>
        </ul>
        <div class="header-btn">
            <a href="/signup" class="sign-up">Sign up</a>
            <a href="login" class="sign-in">Sign In</a>
        </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> for <br>rental transport</h1>
            <p>Schedule and organize your transport.<br> Sign up and book for details.</p>
            <div class="app-stores">
                <img src="../assets/img/ios.png">
                <img src="../assets/img/play.png">
            </div>
        </div>

        <div class="form-container">
            <form action="">
                <!-- <div class="input-box">
                    <span>Location</span>
                    <input type="search" placeholder="Select Destination . . .">
                </div> -->
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date">
                </div>
                <!-- <div class="input-box">
                    <span for="trucks">Choose a Truck</span>

                    <select name="trucks" id="trucks">
                   <option value="truck1">Truck 1</option>
                   <option value="truck2">Truck 2</option>
                   <option value="truck3">Truck 3</option>
                   <option value="truck4">Truck 4</option>
                   <option value="truck5">Truck 5</option>
                    </select>
                </div> -->
              
                <!-- <div class="input-box">
                    <span>Number</span>
                    <input type="number">
                </div> -->
                <input type="submit" class="btn">
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
    <!-- Services -->
    <section class="services" id="services">
        <div class="heading">
            <span>Best Services</span>
            <h1>Explore Out Top Deals <br> From Top Rated Dealers</h1>
        </div>
        <div class="services-container">
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck1.jpg">
                </div>
                <p>Truck 1</p>
                <h3>Mr. Mel Mark Dela Cruz</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck2.jpg">
                </div>
                <p>Truck 2</p>
                <h3>Ms. Fatriza</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck3.jpg">
                </div>
                <p>Truck 3</p>
                <h3>Mr. John Bryan Bolarde</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck4.jpg">
                </div>
                <p>Truck 4</p>
                <h3>Mr. Gardiola</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck5.jpg">
                </div>
                <p>Truck 5</p>
                <h3>Mr. Yuri Garcia</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="../assets/img/movingTruck6.jpg">
                </div>
                <p>Truck 6</p>
                <h3>Ms. Melmark</h3>
                <h2>09125409122 | ₱358 <span>/trip</span></h2>
                <a href="#" class="btn">Rent Now</a>
            </div>
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
                <p>TrackTruck is Olongapo's first web and app-based online Transport Booking platform, connecting users to Hire a Truck with a network of various Truck drivers for Simple and Fast Goods Delivery Option, Our Transport Expertise includes Full TruckLoad, Part TruckLoad, Door to Door Parcel.</p>
                <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti commodi sunt quia excepturi nemo iusto aspernatur natus nulla expedita mollitia iure consequuntur minima reiciendis ipsam eveniet ipsum, id, aliquid veniam.</p> -->
                <a href="#" class="btn">Learn More</a> 
            </div>
        </div>
    </section>
    <!-- Reviews -->
    <section class="reviews" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>What Our Customer Say</h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <div class="rev-img">
                    <img src="../assets/img/rev1.jpg">
                </div>
                <h2>Yuri Garcia</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat corrupti, nemo recusandae distinctio veniam dignissimos ullam, quasi cupiditate cumque itaque esse at quam. Impedit ducimus facilis commodi fugiat repudiandae totam.</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="../assets/img/rev2.jpg">
                </div>
                <h2>John Bryan Bolarde</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat corrupti, nemo recusandae distinctio veniam dignissimos ullam, quasi cupiditate cumque itaque esse at quam. Impedit ducimus facilis commodi fugiat repudiandae totam.</p>
            </div>

            <div class="box">
                <div class="rev-img">
                    <img src="../assets/img/rev3.jpg">
                </div>
                <h2>Melark Dela Cruz</h2>
                <div class="stars">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat corrupti, nemo recusandae distinctio veniam dignissimos ullam, quasi cupiditate cumque itaque esse at quam. Impedit ducimus facilis commodi fugiat repudiandae totam.</p>
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
    <div class="copyright">
        <p>&#169; Mind Optimizers | Yuri Garcia | John Bryan Bolarde | Melmark Dela Cruz</p>
        <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>

    <!-- ScrolLReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link to JS -->
    <!-- <script src="js/main.js"></script> -->
     <script src="js/main.js"></script>
</body>
</html>
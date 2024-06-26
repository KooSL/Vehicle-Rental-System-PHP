<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Rental System </title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <script src="js\main.js"></script>
</head>
<body>
    <!--Header-->
    <?php
        include 'container/header.php';
    ?>

    <!--Home-->
    <section class="home" id="home">

        <div class="browse">
            <ul class="browse-list">
                <li><a href="vehicles.php?v_type=car" data-filter="car"><i class="fa-solid fa-car"></i> Cars</a></li>
                <li><a href="vehicles.php?v_type=bike" data-filter="bike"><i class="fa-solid fa-motorcycle"></i> Bikes</a></li>
                <li><a href="vehicles.php?v_type=cycle" data-filter="cycle"><i class="fa-solid fa-bicycle"></i> Cycles</a></li>
                <li><a href="vehicles.php?v_type=truck" data-filter="truck"><i class="fa-solid fa-truck"></i> Trucks</a></li>
                <li><a href="vehicles.php?v_type=all" data-filter="helicopter"><i class="fa-solid fa-list"></i> More</a></li>
            </ul>
        </div>

        <div class="text"> 
            <h1>Adventure with just a<span> click</span>, <br>Rent Your ride online <span>today! </span></h1><br><br>
    
            <!-- </div> -->
            <div class="browse-list-2">
            <?php if(isset($_SESSION['username'])){
                echo '<li><a href="vehicles.php"><i class="fa-solid fa-user-plus"></i> Book Now</a></li>';
                echo '<li><a href="vehicles.php"><i class="fa-solid fa-search"></i> Explore</a></li>';
            }
            else{
                echo '<li><a href="login.php"><i class="fa-solid fa-user-plus"></i> Book Now</a></li>';
                echo '<li><a href="vehicles.php"><i class="fa-solid fa-search"></i> Explore</a></li>';
            }
            ?>
            </div>
        </div>

    </section>
    <!--Ride-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How Its work</span>
            <h1>Rent with 3 Easy steps</h1>
        </div>
        <div class="ride-container">
           <div class="box" >
            <i class='bx bxs-map'></i>
            <h2>Choose A Location</h2>
            <p> Search your current location from where you want to rent. IF there are vehicles available then you can move ahead of your renting process.</p>
           </div>

           <div class="box" >
            <i class='bx bxs-calendar-check'></i>
            <h2>Pick-Up Date</h2>
            <p>Select a date when you want to rent and use a vehicle.</p>
           </div>

           <div class="box" >
            <i class='bx bxs-calendar-star'></i>
           <h2>Book A Car</h2>
            <p> After those 2 steps you can pay whatever it cost and you can easily book your own vehicle for a rent.</p>
           </div>
        </div>
    </section>
    <!--Why us-->
    <section class="ride" id="ride">
        <div class="heading">
            <span>Isn't there any other options?</span>
            <h1>Here's why us</h1>
        </div>
        <div class="ride-container">
           <div class="box" >
            <i class='bx bxs-time'></i>
            <h2>We're with you anytime</h2>
            <p> Providing 24x7 avaibility of vehicle renting</p>
           </div>

           <div class="box" >
            <i class='bx bxs-calendar-check'></i>
            <h2>Simplified Search and Bookings</h2>
            <p>Less time consuming for booking</p>
           </div>

           <div class="box" >
            <i class="fa-solid fa-money-bill"></i>
           <h2>Value for money and ride</h2>
            <p> Booking at lowest cost for your budget</p>
           </div>
        </div>
    </section>
    
    <?php
        include 'container/footer.php';
    ?>
    
</body>
</html>


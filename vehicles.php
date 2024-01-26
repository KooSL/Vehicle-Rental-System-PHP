<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Vehicles</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
    <!-- services-->
    <section class="vehicles" id="vehicles">
        <div class="heading">
            <span>Vehicles</span>
            <h3>Choose A Category</h3>
        </div> 

        <div class="vehicle-browse">
            <ul class="browse-list">
                <li><a href="#cars"><i class="fa-solid fa-car"></i> Cars</a></li>
                <li><a href="#bikes"><i class="fa-solid fa-motorcycle"></i> Bikes</a></li>
                <li><a href="#buses"><i class="fa-solid fa-bus"></i> Buses</a></li>
                <li><a href="#cycles"><i class="fa-solid fa-bicycle"></i> Cycles</a></li>
                <li><a href="#trucks"><i class="fa-solid fa-truck"></i> Trucks</a></li>
                <li><a href="#tractors"><i class="fa-solid fa-tractor"></i> Tractors</a></li>
                <li><a href="#helicopters"><i class="fa-solid fa-helicopter"></i> Helicopters</a></li>
            </ul>
        </div>

        <div class="form-container">
            <form>
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
        </div>  

        <div class="heading">
            <h1>Explore Out Top Deals</h1>
        </div> 

        <div class="vehicles-container">

<?php
    $qry = "SELECT * FROM vehicles ORDER BY v_id DESC";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="box">
                    <div class="box-img">
                        <img src="images/<?php echo $row['v_image1'];?>">  
                    </div>
                    <h3><?php echo $row['v_name'];?></h3>
                    <p><?php echo $row['v_type'];?></p>
                    <div class="cost">
                        <p>Rs.<?php echo $row['v_cost'];?> <span>/month</span><p>
                    </div>
                    <a href="details.php" class="btn">Details</a>
                    <a href="rent-now.php" class="btn">Rent Now</a>
                </div>
            <?php } ?>

        </div>
    </section>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>
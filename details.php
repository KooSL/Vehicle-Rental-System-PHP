<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <script src="js\details.js"></script>
    <title>Details</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

<?php
    $qry = "SELECT * FROM vehicles ORDER BY v_id DESC";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
?>  

    <!--Details-->
    <section class="detail" id="detail">
        <div class="heading">
            <div class="heading-2">
                <a href="vehicles.php"><i class="fa-solid fa-angle-left"></i> Back</a>
                <span>Details</span>
            </div>
            <h1><?php echo $row['v_name'];?></h1>
        </div>  
        <div class="detail-container">
            <div class="detail-imgs">
                <div class="slideshow-container">

                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 3</div> -->
                        <img src="images/<?php echo $row['v_image1'];?>" style="width:100%">
                        <!-- <div class="text">London, Ebgland</div> -->
                    </div>
                    <?php } ?>
    
                    <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-caret-left"></i></a>
                    <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-caret-right"></i></a>
                </div>
                    <!-- <br> -->
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>`
            </div>

            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }
                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if(n > slides.length) {
                    slideIndex = 1
                    }
                    if(n < 1) {
                    slideIndex = slides.length
                    }
                    for(i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    }
                    for(i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }   
            </script>

            <div class="detail-text">
                <p><b>Name:</b>&nbsp;<?php echo $row['v_name'];?></p>
                <div class="description">
                    <p><b>Description:</b><br /><?php echo $row['v_description'];?></p>
                </div>
                <p><b>Brand:</b>&nbsp;<?php echo $row['v_name'];?></p>
                <p><b>Fuel:</b>&nbsp;<?php echo $row['v_fuel'];?></p>
                <p><b>Seats:</b>&nbsp;2017 Honda Civic</p>
                <p><b>Number:</b>&nbsp;<?php echo $row['v_number'];?></p>
                <p><b>Cost:</b>&nbsp;Rs.<?php echo $row['v_cost'];?></p>
                <!-- <div class="rent-now-btn">
                    <a href="#">Rent Now</a>
                </div> -->
                <div class="rent-now-btn">
                    <button onclick="location.href = 'rent-now.php';" id="rentnowbtn">Rent Now</button>
                </div>
            </div>
        </div> 

        <div class="more-vehicles">
            <hr>
            <p>More Vehicles:</p>
            <div class="more-vehicle-container">
                <div class="vehicles-container">

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
                        <!-- <a href="#" class="btn">Rent Now</a> -->
                    </div>
                <?php } ?>  

                </div>
            </div>
        </div>
    </section>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>
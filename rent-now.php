<?php

    if(isset($_SESSION['username'])){
        $u_username = $_SESSION['username'];
        $qry = "SELECT * FROM user_signup WHERE u_email = '$u_username'";
        $result = mysqli_query($con, $qry);
        $row3 = mysqli_fetch_assoc($result);
        $u_name = $row3['u_name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <script src="js\details.js"></script>
    <title>Rent Now</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
<?php
    $id = $_GET['v_id'];
    $qry = "SELECT * FROM vehicles WHERE v_id = '$id'";
    $qry3 = "SELECT * FROM user_signup";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $result2 = mysqli_query($con, $qry3);
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
?>  

    <!--Book-->
    <section class="Rent" id="rent">
        <div class="heading">
            <div class="heading-2">
                <a href="vehicles.php"><i class="fa-solid fa-angle-left"></i> Back</a>
                <span>Rent Now</span>
            </div>
            <h1><?php echo $row['v_name'];?></h1>
        </div>  
        <div class="rent-container">
            <div class="detail-imgs">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">1 / 3</div> -->
                        <img src="uploads\<?php echo $row['v_image1'];?>" style="width:100%">
                        <!-- <div class="text">London, Ebgland</div> -->
                    </div>
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">2 / 3</div> -->
                        <img src="uploads\<?php echo $row['v_image2'];?>" style="width:100%">
                        <!-- <div class="text">Sunset in Romania</div> -->
                    </div>
                    <div class="mySlides fade">
                        <!-- <div class="numbertext">3 / 3</div> -->
                        <img src="uploads\<?php echo $row['v_image3'];?>" style="width:100%">
                        <!-- <div class="text">New York, USA</div> -->
                    </div>
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

            <div class="renting-container">
                <form action="" class="renting-detail" method="POST">
                    <p>Booking Details</p>
                    <label for="fromdate">From Date:</label>
                        <input type="date" name="fromdate" id="fromdate" required><br>
                    <label for="todate">To Date:</label>
                        <input type="date" name="todate" id="todate" required><br>
                    <label for="address">Address:</label>
                        <input type="text" name="address" id="address" placeholder="Address" required><br>
                    <label for="message">Message:</label><br>
                        <textarea name="message" id="message" placeholder="Message" required></textarea><br>


                    <!-- <p>payment Details</p>
                    <label for="name">Name on Card:</label>
                        <input type="text" name="crd_name" id="name" placeholder="Name" required><br>
                    <label for="number">Card Number:</label>
                        <input type="number" name="crd_number" id="number" placeholder="Number" required><br>
                    <label for="expdate">Exp. Date:</label>
                        <input type="date" name="crd_expdate" id="expdate" required><br>
                    <label for="cvv">CVV Number:</label>
                        <input type="number" name="crd_cvv" id="cvv" placeholder="CVV" required><br> -->


                    <div class="payorcancel">
                        <div class="pay-now-btn">
                            <button type="submit" name="submit" id="paynowbtn">Book</button>
                        </div>
                        <div class="cancel-btn">
                            <a onclick="location.href = 'details.php?v_id=<?php echo $row['v_id'];?>';" id="cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="v-details">
                <p><b>Type:</b>&nbsp;<?php echo $row['v_type'];?></p>
                <p><b>Cost:</b>&nbsp;NPR.<?php echo $row['v_cost'];?></p>
            </div>
        </div>  
    </section>

<?php
if(isset($_POST['submit']))
{
    $b_name = $u_name;
    $b_email = $u_username;
    $v_id = $row['v_id'];
    $b_vehicle = $row['v_name'];
    $bv_image = $row['v_image1'];
    $b_address = $_POST['address'];
    $b_fromdate = $_POST['fromdate'];
    $b_todate = $_POST['todate'];
    $b_message = $_POST['message'];
    $current_date = date("Y-m-d");

    if($b_fromdate >= $current_date && $b_todate >= $current_date && $b_fromdate <= $b_todate){
        $qry2 = "INSERT INTO bookings (v_id, b_name, bv_image, b_email, b_vehicle, b_address, b_fromdate, b_todate, b_message) VALUES ('$v_id', '$b_name', '$bv_image', '$b_email', '$b_vehicle', '$b_address', '$b_fromdate', '$b_todate', '$b_message')";
        if(mysqli_query($con, $qry2))
        {
            
            echo '<script type="text/javascript"> alert("Booked Successfully!"); window.location.assign("my-bookings.php"); </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
    }
    else{
        echo '<script type="text/javascript"> alert("Please select correct date!") </script>';
    }
}
?>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>


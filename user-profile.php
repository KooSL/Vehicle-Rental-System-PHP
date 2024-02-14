<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>About Us</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

<?php
    $u_id = $_GET['u_id'];
    $qry = "SELECT * FROM user_signup WHERE u_id = '$u_id'";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
?> 
    
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>Profile</span>
            <!-- <h1><?php echo $row['u_name'];?></h1> -->
        </div>  
        <div class="about-container">
            <div class="about-img">
                <img src="images\profile-icon-png-898.png" alt="">
                <!-- <img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/pngwing.com.png" alt=""> -->
            </div>
            <div class="about-text">
                <!-- <span>About Us</span> -->
                <p><b>Name:</b>&nbsp;<?php echo $row['u_name'];?></p>
                <p><b>Address:</b>&nbsp;<?php echo $row['u_address'];?></p>
                <p><b>Email:</b>&nbsp;<?php echo $row['u_email'];?></p>
                <p><b>Phone:</b>&nbsp;<?php echo $row['u_phone'];?></p>
                <p><b>Gender:</b>&nbsp;<?php echo $row['u_gender'];?></p>
                <a href="#" class="btn"><i class="fa-solid fa-pen"></i> Edit</a>
            </div>
        </div> 
    </section>

        <!-- <div class="heading">
            <h1>FAQs</h1>
        </div>  
        <div class="faq-container">
            <div class="faq-text">
                <h3>1. Question 1</h3>
                <p>- Answer 1</p>
                <h3>2. Question 2</h3>
                <p>- Answer 2</p>
                <h3>3. Question 3</h3>
                <p>- Answer 3</p>
            </div>
        </div>  -->


    <?php
        include 'container\footer.php';
    ?>
</body>
</html>


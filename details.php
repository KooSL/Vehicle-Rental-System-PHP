<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Details</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>Details</span>
            <h1>2017 Honda Civic</h1>
        </div>  
        <div class="about-container">
            <div class="about-img">
                <img src="images/about.png" alt="">
                <!-- <img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/pngwing.com.png" alt=""> -->
            </div>
            <div class="about-text">
                <!-- <span>2017 Honda Civic</span> -->
                <p>2017 Honda Civic</p>
                <p>$60765 | $400 </p>
                <a href="#" class="btn">Rent Now</a>
            </div>
        </div> 
    </section>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>
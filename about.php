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
    
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>About Us</span>
            <h1>Best Customer Experience</h1>
        </div>  
        <div class="about-container">
            <div class="about-img">
                <img src="images\about.png" alt="">
                <!-- <img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/pngwing.com.png" alt=""> -->
            </div>
            <div class="about-text">
                <span>About Us</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div> 
    </section>

        <div class="heading">
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
        </div> 


    <?php
        include 'container\footer.php';
    ?>
</body>
</html>


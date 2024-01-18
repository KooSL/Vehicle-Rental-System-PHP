<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Contact</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

    <div class="details">
        <!-- <p><i class="fa-solid fa-car"></i><p> -->
        <h2><i class="fa-solid fa-car"></i> Sadhan <i class="fa-solid fa-motorcycle"></i></h2>
        <p><i class="fa-solid fa-envelope"></i> info.sadhan@sadhan.com.np<p>
        <p><i class="fa-solid fa-phone"></i> 056-1234<br><i class="fa-solid fa-mobile"></i> +9779812345678<p>
    </div>

    <form action="" class="contact" method="POST">
        <div class="contact-form">
            <p class="contact-txt"><i class="fa-solid fa-envelope"></i> Contact Us<p>
            <div class="c-inputs">
                <input type="text" name="c-name" placeholder="Full Name" required>
                <input type="text" name="c-email" placeholder="Email" required>
                <input type="text" name="c-number" placeholder="Phone Number" required>
                <!-- <input type="text" name="c-password" placeholder="Message"> -->
                <textarea class="c-message" name="c-message" rows="4" required placeholder="Message"></textarea>
            </div>
            <input type="submit" name="c-submit" value="Submit">
        </div>
</form>

    <section class="newsletter">
        <h2>Subscribe for Updates</h2>
        <div class="box">
            <input type="email" placeholder="Enter Your Email..." required>
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>
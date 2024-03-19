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
                <input type="text" name="cnt_name" placeholder="Full Name" required>
                <input type="text" name="cnt_email" placeholder="Email" required>
                <input type="text" name="cnt_phone" placeholder="Phone Number" required>
                <textarea class="c-message" name="cnt_message" rows="4" required placeholder="Message"></textarea>
            </div>
            <input type="submit" name="cnt_submit" value="Submit">
        </div>
</form>


    <section class="newsletter">
        <h2>Subscribe for Updates</h2>
        <form action="" method="POST" class="subscriber">
            <div class="box">
                <input type="email" name="subs_email"  placeholder="Enter Your Email" required><br>
                <button type="submit" name="subs_submit" value="subscribe">Subscribe</button>
            </div>
        </form>
    </section>


<?php
if(isset($_POST['cnt_submit']))
{
    $cnt_name = $_POST['cnt_name'];
    $cnt_email = $_POST['cnt_email'];
    $cnt_phone = $_POST['cnt_phone'];
    $cnt_message = $_POST['cnt_message'];

    $cnt_qry = "INSERT INTO contact (cnt_name, cnt_email, cnt_phone, cnt_message) VALUES ('$cnt_name', '$cnt_email', '$cnt_phone', '$cnt_message')";
    include 'container/db_connection.php';
    if(mysqli_query($con, $cnt_qry))
        {
            echo '<script type="text/javascript"> alert("Submited Successfully!");</script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!");</script>';
        }
}

if(isset($_POST['subs_submit']))
        {
            $subs_email = $_POST['subs_email'];

            $subs_qry = "INSERT INTO subscribers (sub_email) VALUES ('$subs_email')";
            if(mysqli_query($con, $subs_qry))
                {
                    echo '<script type="text/javascript"> alert("Subscribed Successfully!");</script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Something Went Wrong!");</script>';
                }
                
        }


?>


    <?php
        include 'container\footer.php';
    ?>
</body>
</html>


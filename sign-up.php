<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Sign Up</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
    


<form action="" class="sign-up" method="POST">
    <div class="sign-up-form">
        <p class="signup-txt"><i class="fa-solid fa-user-plus"></i> Sign Up<p>
        <div class="s-inputs">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="number" placeholder="Phone Number" required>
        <!-- <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select> -->
        <input type="password" name="password" placeholder="New Password" required>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>
        </div>
        <h5></h5>
        <input type="submit" name="submit" value="Sign Up">
        <p><a href="login.php" class="aha">Already have an account</a></p>
    </div>
    <div class="sign-up-term-condition-text">
        <p>By creating an account, You agree to our <a href="">terms</a> and have read <a href="">conditions</a>.</p>
    </div>
</form>
<!-- <div class="sign-up-carpng">
        <img src="/home/linuxkali/Downloads/pngwing.com.png" alt="">
    </div> -->

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>
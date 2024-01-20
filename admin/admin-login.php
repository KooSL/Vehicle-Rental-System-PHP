<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="..\js\main.js"></script>
    <title>Admin Login</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'admin-container\admin-login-header.php';
    ?>

        <form action="" class="login-form" method="POST">
            <p class="login-txt"><i class="fa-solid fa-right-to-bracket"></i> Admin Log In</p>
            <div class="l-inputs">
            <input type="text" name="email" placeholder="Username">
            </div>
            <div class="admin-login-password-box">
                <input type="password" name="password" placeholder="Password" id="adminloginpassword" required>
                <i class="fa-solid fa-eye-slash" id="adminlogineyeicon" aria-hidden="true" onclicK="adminlogintoggle()"></i>
            </div>
            
            <p><a href="..\update-password.php" class="e-option">Forget Password?</a></p>
            <input type="submit" value="Login">
            <!-- <p><a href="sign-up.php" class="e-option">Create new account</a></p> -->
        </form>

        <?php
            include 'admin-container\admin-login-footer.php';
        ?>

</body>
</html>

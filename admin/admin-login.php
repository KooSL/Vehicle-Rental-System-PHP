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

        <form action="admin-login.php" class="login-form" method="POST">
            <p class="login-txt"><i class="fa-solid fa-right-to-bracket"></i> Admin Log In</p>
            <div class="l-inputs">
            <input type="text" name="a_email" placeholder="Username">
            </div>
            <div class="admin-login-password-box">
                <input type="password" name="a_password" placeholder="Password" id="adminloginpassword" required>
                <i class="fa-solid fa-eye-slash" id="adminlogineyeicon" aria-hidden="true" onclicK="adminlogintoggle()"></i>
            </div>
            
            <!-- <p><a href="..\update-password.php" class="e-option">Forget Password?</a></p> -->
            <div class="admin-login-btn">
                <input type="submit" value="Login">
            </div>
            <!-- <p><a href="sign-up.php" class="e-option">Create new account</a></p> -->
        </form>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a_username = $_POST['a_email'];
    $a_password = $_POST['a_password'];
    $qry = "SELECT * FROM admin_login WHERE a_username = '$a_username' AND a_password = '$a_password' ";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
    if(mysqli_num_rows($result) == 1)
    {
        // $_SESSION['loggedin'] = "Yes";
        // header('location: home.php');
        echo '<script type="text/javascript"> alert("Logged in Successfully!"); window.location.assign("dashboard.php"); </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials!");</script>';
    }
}
?>

        <?php
            include 'admin-container\admin-login-footer.php';
        ?>

</body>
</html>

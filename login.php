
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="js\main.js"></script>
    <title>Login</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

    <div class="login-body">
        <form action="login.php" class="login-form" method="POST">
            <p class="login-txt"><i class="fa-solid fa-right-to-bracket"></i> Log In</p>
            <div class="l-inputs">
            <input type="text" name="u_email" placeholder="Username" required>
            </div>
            <div class="login-password-box">
                <input type="password" name="u_password" placeholder="Password" id="loginpassword" required>
                <i class="fa-solid fa-eye-slash" id="logineyeicon" aria-hidden="true" onclicK="logintoggle()"></i>
            </div>
            <p><a href="get-email-update-password.php" class="e-option">Forget Password?</a></p>
            <input type="submit" name="submit" value="Login">
            <p><a href="sign-up.php" class="e-option">Create new account</a></p>
        </form>
    </div>
    
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $u_username = $_POST['u_email'];
    $u_password = $_POST['u_password'];
    // $hashed_password = md5($u_password);
    

    $qry = "SELECT * FROM user_signup WHERE u_email = '$u_username' AND u_password = '$u_password' ";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $u_username;
        echo '<script type="text/javascript"> alert("Logged in Successfully!"); window.location.assign("home.php");</script>';
        exit();
    }
    else
    {
        echo '<script type="text/javascript"> alert("Invalid Credentials!");</script>';
    }
}
?>

    <?php
        include 'container\footer.php';
    ?>

</body>
</html>


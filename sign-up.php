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
    <title>Sign Up</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
    

<div class="signup-body">
    <form action="" class="sign-up" method="POST" name="sign-up" onsubmit="return validateForm()">
        <div class="sign-up-form">
            <p class="signup-txt"><i class="fa-solid fa-user-plus"></i> Sign Up<p>
            <div class="s-inputs">
            <!-- <input type="text" name="u_name" placeholder="Full Name" required> -->
            <input type="text" name="u_name" placeholder="Full Name" required pattern="[a-zA-Z\s]+" title="Please enter a valid name (letters and spaces only)">
            <input type="text" name="u_address" placeholder="Address" required>
            <!-- <input type="text" name="u_email" placeholder="Email" required> -->
            <input type="email" name="u_email" placeholder="Email" required>
            <input type="text" name="u_phone" placeholder="Phone Number" required maxlength="15">
            <select name="u_gender" id="gender" required>
                <option value="Gender">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            </div>
            <div class="sign-up-password-box">
                <input type="password" name="u_password" placeholder="New Password" id="signuppassword" required>
                <i class="fa-solid fa-eye-slash" id="eyeicon" aria-hidden="true" onclicK="toggle()"></i>
            </div>
            <div class="sign-up-c-password-box">
                <input type="password" name="u_cpassword" placeholder="Confirm Password" id="csignuppassword" required>
                <i class="fa-solid fa-eye-slash" id="ceyeicon" aria-hidden="true" onclicK="ctoggle()"></i>
            </div>
            

            <input type="submit" name="submit" value="Sign Up">
            <p><a href="login.php" class="aha">Already have an account</a></p>
        </div>
        <div class="sign-up-term-condition-text">
            <p>By creating an account, You agree to our <a href="">terms</a> and have read <a href="">conditions</a>.</p>
        </div>
    </form>
</div>


<?php
if(isset($_POST['submit']))
{
    $u_name = $_POST['u_name'];
    $u_address = $_POST['u_address'];
    $u_email = $_POST['u_email'];
    $u_phone = $_POST['u_phone'];
    $u_gender = $_POST['u_gender'];
    $u_password = $_POST['u_password'];
    $u_cpassword = $_POST['u_cpassword'];

    if($u_password == $u_cpassword)
    {
        $u_password = md5($u_password);
        $qry = "INSERT INTO user_signup (u_name, u_address, u_email, u_phone, u_gender, u_password) VALUES ('$u_name', '$u_address', '$u_email', '$u_phone', '$u_gender', '$u_password')";
        include 'container/db_connection.php';
        if(mysqli_query($con, $qry))
        {
            
            echo '<script type="text/javascript"> alert("Sign Up Successfully!\nNow Log in With Your Email and Password"); window.location.assign("login.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!\nMay Be Email or Phone Already Used") </script>';
        }
    }
    else
    {
        echo '<script type="text/javascript"> alert("Password Doesnt Match!"); window.location.assign("sign-up.php"); </script>';
    }
}

?>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>



<script>
    function validateForm() {
        var name = document.forms["sign-up"]["u_name"].value;
        var email = document.forms["sign-up"]["u_email"].value;
        var password = document.forms["sign-up"]["u_password"].value;

        // Name validation
        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            alert("Please enter a valid name (letters and spaces only)");
            return false;
        }

        // Email validation
        var emailRegex = /^[^\d\s][\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        // Password validation
        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
        if (!passwordRegex.test(password)) {
            alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
            return false;
        }


        return true;
    }
</script>


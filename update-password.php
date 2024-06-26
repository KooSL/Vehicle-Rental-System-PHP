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
    <title>Update Password</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container/header.php';
    ?>

<?php
    $u_email = $_GET['u_email'];
    // $qry2 = "SELECT * FROM user_signup WHERE u_email = '$u_email'";
    // $result = mysqli_query($con, $qry2);
    // $row = mysqli_fetch_assoc($result);
?> 

        <form action="" class="update-password-form" method="POST" name="updatepw" onsubmit="return validateForm()">
            <p class="change-password-txt"><i class="fa-solid fa-lock"></i> Change Password</p>
                <div class="update-password-box">
                    <input type="password" name="new_password" placeholder="New Password" id="updatepassword" required>
                    <i class="fa-solid fa-eye-slash" id="updateeyeicon" aria-hidden="true" onclicK="updatetoggle()"></i>
                </div>
                <div class="update-c-password-box">
                    <input type="password" name="c_password" placeholder="Confirm Password" id="cupdatepassword" required>
                    <i class="fa-solid fa-eye-slash" id="cupdateeyeicon" aria-hidden="true" onclicK="cupdatetoggle()"></i>
                </div>
            
            <input type="submit" name="submit" value="Update">
            <a href="login.php"><button type="button" class="change-pw-cancel">Cancel</button></a>
        </form>

<?php
if(isset($_POST['submit']))
{
    $u_npassword = $_POST['new_password'];
    $u_cpassword = $_POST['c_password'];

    if($u_npassword == $u_cpassword)
    {
        $qry2 = "UPDATE user_signup SET u_password = '$u_npassword' WHERE u_email = '$u_email'";
        if(mysqli_query($con, $qry2))
        {
            
            echo '<script type="text/javascript"> alert("Password Updated Successfully!"); window.location.assign("login.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!\nMay Be Email or Phone Already Used") </script>';
        }
    }
    else
    {
        echo '<script type="text/javascript"> alert("Password Doesnt Match!"); window.location.assign("update-password.php"); </script>';
    }
}

?>

        <?php
            include 'container/footer.php';
        ?>

</body>
</html>

<script>
    function validateForm() {
        var npassword = document.forms["updatepw"]["new_password"].value;
        var cpassword = document.forms["updatepw"]["c_password"].value;

        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
        if (!passwordRegex.test(npassword)) {
            alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
            return false;
        }

        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/;
        if (!passwordRegex.test(cpassword)) {
            alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
            return false;
        }


        return true;
    }
</script>
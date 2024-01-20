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
        include 'container\header.php';
    ?>

        <form action="" class="update-password-form" method="POST">
            <p class="change-password-txt"><i class="fa-solid fa-lock"></i> Change Password</p>
                <div class="update-password-box">
                    <input type="password" name="password" placeholder="New Password" id="updatepassword" required>
                    <i class="fa-solid fa-eye-slash" id="updateeyeicon" aria-hidden="true" onclicK="updatetoggle()"></i>
                </div>
                <div class="update-c-password-box">
                    <input type="password" name="password" placeholder="Confirm Password" id="cupdatepassword" required>
                    <i class="fa-solid fa-eye-slash" id="cupdateeyeicon" aria-hidden="true" onclicK="cupdatetoggle()"></i>
                </div>
            
            <input type="submit" value="Update">
            <a href="login.php"><button type="button" class="change-pw-cancel">Cancel</button></a>
        </form>

        <?php
            include 'container\footer.php';
        ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Update Password</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

        <form action="" class="update-password-form" method="POST">
            <p class="change-password-txt"><i class="fa-solid fa-lock"></i> Change Password</p>
            <div class="p-inputs">
            <input type="password" name="n-password" placeholder="New Password" required>
            <input type="password" name="c-password" placeholder="Confirm Password" required>
            </div>
            <input type="submit" value="Update">
            <a href="login.php"><button type="button" class="change-pw-cancel">Cancel</button></a>
        </form>

        <?php
            include 'container\footer.php';
        ?>

</body>
</html>

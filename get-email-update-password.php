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
            <p class="change-password-txt"><i class="fa-solid fa-envelope"></i> Enter Email</p>
                <div class="update-password-box">
                    <input type="email" name="u_email" placeholder="Email" id="updatepasswordemail" required>
                </div>
            <a href="update-password.php"><button type="button" class="change-pw-cancel">Next</button></a>
        </form>

        <?php
            include 'container\footer.php';
        ?>

</body>
</html>

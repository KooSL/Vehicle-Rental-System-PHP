<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>About Us</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>

<?php
    $u_id = $_GET['u_id'];
    $qry = "SELECT * FROM user_signup WHERE u_id = '$u_id'";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
?> 
    
    <!--About-->
    <section class="about" id="about">
        <div class="heading">
            <span>Edit Profile</span>
            <!-- <h1><?php echo $row['u_name'];?></h1> -->
        </div>  
        <div class="about-container">
            <div class="about-img">
                <img src="images\profile-icon-png-898.png" alt="">
                <!-- <img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/pngwing.com.png" alt=""> -->
            </div>
            <div class="profile-edit-container">
                <form action="edit-user-profile.php" class="profile-detail" method="POST">
                    <p>Edit</p>
                    <label for="name">Name:</label>
                        <input type="text" name="u_name" id="name" placeholder="Full Name" value="<?php echo $row['u_name'];?>"><br>
                    <label for="address">Address:</label>
                        <input type="text" name="u_address" id="address" placeholder="Address" value="<?php echo $row['u_address'];?>"><br>
                    <label for="email">Email:</label>
                        <input type="email" name="u_email" id="email" placeholder="Email" value="<?php echo $row['u_email'];?>"><br>
                    <label for="phone">Phone:</label>
                        <input name="u_phone" id="phone" placeholder="Phone" value="<?php echo $row['u_phone'];?>"></input><br>
                    <label for="gender">Gender:</label>
                        <select name="u_gender" id="gender">
                            <?php 
                                $gender = $row['u_gender'];
                                if($gender == "male"){
                                    echo '<option value="Male">Male</option>';
                                    echo '<option value="Female">Female</option>';
                                    echo '<option value="Other">Other</option>';
                                }
                                elseif($gender == "female"){
                                    echo '<option value="Male">Male</option>';
                                    echo '<option value="Female">Female</option>';
                                    echo '<option value="Other">Other</option>';
                                }
                                else{
                                    echo '<option value="Male">Male</option>';
                                    echo '<option value="Female">Female</option>';
                                    echo '<option value="Other">Other</option>';
                                }
                            ?>
                        </select>
                    <div class="saveorcancel">
                        <div class="save-btn">
                            <button type="submit" name="submit" id="savebtn"><i class="fa-solid fa-check"></i> Save</button>
                        </div>
                        <div class="cancel-btn">
                            <?php  ?>
                            <button onclick="location.href = 'user-profile.php?u_id=<?php echo $row['u_id'];?>';" id="cancel"><i class="fa-solid fa-xmark"></i> Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </section>

        <!-- <div class="heading">
            <h1>FAQs</h1>
        </div>  
        <div class="faq-container">
            <div class="faq-text">
                <h3>1. Question 1</h3>
                <p>- Answer 1</p>
                <h3>2. Question 2</h3>
                <p>- Answer 2</p>
                <h3>3. Question 3</h3>
                <p>- Answer 3</p>
            </div>
        </div>  -->

<?php
if(isset($_POST['submit'])) {
    $u_name = $_POST['u_name'];
    $u_address = $_POST['u_address'];
    $u_email = $_POST['u_email'];
    $u_phone = $_POST['u_phone'];
    $u_gender = $_POST['u_gender'];

    $qry2 = "UPDATE user_signup SET
              u_name = '$u_name', 
              u_address = '$u_address', 
              u_email = '$u_email', 
              u_phone = '$u_phone',
              u_gender = '$u_gender' 
              WHERE u_id = '$u_id'";

    if(mysqli_query($con, $qry2)) {
        echo '<script type="text/javascript"> alert("Profile Updated Successfully"); window.location.assign(\'user-profile.php?u_id=' . $u_id . '\'); </script>';
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
    }
}
?>

    <?php
        include 'container\footer.php';
    ?>
</body>
</html>


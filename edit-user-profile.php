<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Edit Profile</title>
    <script src="js\main.js"></script>

</head>
<body>
    <!--Header-->
    <?php
        include 'container/header.php';
    ?>

<?php
    $u_id = $_GET['u_id'];
    $qry = "SELECT * FROM user_signup WHERE u_id = '$u_id'";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
    
?> 
    
    <!--About-->
    <section class="edit-profile" id="edit-profile">
        <div class="heading">
            <span>Edit Profile</span>
        </div>  
        <div class="edit-profile-container">
            <form action="" class="profile-detail" method="POST" enctype="multipart/form-data">
                <div class="edit-profile-img">
                    <input type="hidden" name="u_id" value="<?php echo $row['u_id']; ?>">
                    <div class="upload">
                        <img src="uploads/<?php echo $row['u_image']; ?>" id="image">
                        <div class="rightRound" id="upload">
                            <input type="file" name="u_image" id="fileImg" accept=".jpg, .jpeg, .png">
                            <i class="fa fa-camera"></i>
                        </div>
                        <div class="cancel-rightRound" id="cancel" style="display: none;">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <p class="upload-profile-pic">Upload Profile Picture</p>
                </div>
                <div class="profile-edit-container">
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
                            </select><br>
                        <label for="password">Password:</label>
                            <input style="width: 60%;" type="password" name="u_password" id="updatepassword" placeholder="New Password" value="<?php echo $row['u_password'];?>"></input>
                            <i style="cursor: pointer;" class="fa-solid fa-eye-slash" id="updateeyeicon" aria-hidden="true" onclicK="updatetoggle()"></i>

                        <div class="saveorcancel">
                            <div class="save-btn">
                                <button type="submit" name="submit" id="savebtn"><i class="fa-solid fa-check"></i> Save</button>
                            </div>
                            <div class="cancel-btn">
                                <a href="user-profile.php?u_id=<?php echo $row['u_id'];?>"><i class="fa-solid fa-xmark"></i> Cancel</a>
                            </div>
                        </div>
                </div>
            </form>
        </div> 
    </section>

<?php
if(isset($_POST['submit'])) {
    $u_image_name = $row['u_image'];
    $u_name = $_POST['u_name'];

    //$u_image = $_POST['u_image'];
    $u_image = $_FILES['u_image']['name'];
    $tmp_name = $_FILES['u_image']['tmp_name'];
    $u_image = $u_image;
    $filepath = "uploads/".$u_image;
    move_uploaded_file($tmp_name, $filepath);

    $u_address = $_POST['u_address'];
    $u_email = $_POST['u_email'];
    $u_phone = $_POST['u_phone'];
    $u_gender = $_POST['u_gender'];
    $u_password = $_POST['u_password'];

    $qry2 = "UPDATE user_signup SET
              u_name = '$u_name', 
              u_image = COALESCE('$u_image', '$u_image_name'),
              u_address = '$u_address', 
              u_email = '$u_email', 
              u_phone = '$u_phone',
              u_gender = '$u_gender',
              u_password = '$u_password' 
              WHERE u_id = '$u_id'";

    if(mysqli_query($con, $qry2)) {
        echo '<script type="text/javascript"> alert("Profile Updated Successfully"); window.location.assign("user-profile.php?u_id=' . $u_id . '");</script>';
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
    }
}
?>

<!-- <?php
// if (isset($_POST['imagesubmit'])) {
//     $u_id = $_POST['u_id']; // Retrieve user ID
//     $u_image = $_FILES['u_image']['name']; // Retrieve image file name

//     // Logic to handle file upload and update database goes here

//     $query3 = "UPDATE user_signup SET u_image = '$u_image' WHERE u_id = '$u_id'"; // Update query

//     // Execute update query
//     if (mysqli_query($conn, $query3)) {
//         echo '<script type="text/javascript"> alert("Profile Updated Successfully"); window.location.assign("user-profile.php?u_id=' . $u_id . '");</script>';
//     } else {
//         echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
//     }
// }
?> -->

    <?php
        include 'container/footer.php';
    ?>


<script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        // document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        // document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }

   
    </script>

</body>
</html>


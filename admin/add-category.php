<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
  <link rel="stylesheet" href="admin-css\admin-style.css"/>
  <script src="https://kit.fontawesome.com/ae61999827.js"></script>
</head>
<body>
  <?php
    include "admin-container\admin-header.php";
  ?>
  <?php
    include "admin-container\admin-leftbar.php";
  ?>
  
  <main class="main">
    <section class="title">
      <p>Add Category</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
        <form action="" method="POST" name="category" onsubmit="return validateForm()">
            <label for="cars">Vehicle Category: </label>
                <input type="text" name="c_name" placeholder="Category" required pattern="[a-zA-Z\s]+" title="Please enter a valid name (letters and spaces only)"><br>
            <label for="cars">Vehicle Type: </label>
                <input type="text" name="c_type" placeholder="Type" required pattern="[a-zA-Z\s]+" title="Please enter a valid name (letters and spaces only)"><br>
            <button type="submit" name="submit"><i class="fa-solid fa-check"></i> Upload</button>
            <a href="categories.php" class="exit-btn"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>

<?php
if(isset($_POST['submit']))
{
    $c_name = $_POST['c_name'];
    $c_type = $_POST['c_type'];

    $qry = "INSERT INTO categories (c_name, c_type) VALUES ('$c_name', '$c_type')";
    include 'admin-container/db_connection.php';
    if(mysqli_query($con, $qry))
    {
                
        echo '<script type="text/javascript"> alert("Category Added Successfully!"); window.location.assign("categories.php"); </script>';
        exit();
    }
    else
    {
        echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
    }
}
?>

  </main>
</body>
</html>

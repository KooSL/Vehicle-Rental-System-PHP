<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Category</title>
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

<?php
    $id = $_GET['c_id'];
    $qry = "SELECT * FROM categories WHERE c_id = $id";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_assoc($result);
?>
  
  <main class="main">
    <section class="title">
      <p>Edit Category</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
        <form action="" method="POST">
          <label for="cars">Vehicle Category: </label>
                  <input type="text" name="c_name" placeholder="Category" required value="<?php echo $row['c_name'];?>"><br>
          <label for="cars">Vehicle Type: </label>
                  <input type="text" name="c_type" placeholder="Type" required value="<?php echo $row['c_type'];?>"><br>
          <button type="submit" name="submit"><i class="fa-solid fa-check"></i> Save</button>
          <a href="categories.php" class="exit-btn"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>
    
<?php
if(isset($_POST['submit'])) {
  $c_name = $_POST['c_name'];
  $c_type = $_POST['c_type'];

    // Update query
    $qry2 = "UPDATE categories SET
              c_name = '$c_name',
              c_type = '$c_type'
              WHERE c_id = '$id'";

    if(mysqli_query($con, $qry2)) {
        echo '<script type="text/javascript"> alert("Category Updated Successfully!"); window.location.assign("categories.php"); </script>';
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
    }
}
?>


  </main>
</body>
</html>

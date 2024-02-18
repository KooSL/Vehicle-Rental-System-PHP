<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Vehicle</title>
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
    $id = $_GET['v_id'];
    $qry = "SELECT * FROM vehicles WHERE v_id = '$id'";
    $qry3 = "SELECT * FROM categories";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
    $result2 = mysqli_query($con, $qry3);
    $row = mysqli_fetch_assoc($result);
  ?>        

  
  <main class="main">
    <section class="title">
      <p>Edit Vehicle</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
    <form action="edit-vehicle.php?v_id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <label for="cars">Vehicle Name: </label>
                <input type="text" name="v_name" placeholder="Name" required value="<?php echo $row['v_name'];?>"><br>
            <label for="type">Choose the category:</label>
                <select name="v_type" id="type" required ">
                <?php while($row2 = mysqli_fetch_assoc($result2)){  ?>
                    <option><?php echo $row2['c_name'];?></option>
                <?php } ?>
                </select><br>
            <label for="fuel">Choose the fuel:</label>
                <select name="v_fuel" id="fuel" required>
                    <option><?php echo $row['v_fuel'];?></option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="ev">EV</option>
                </select><br>
            <label for="cars">Vehicle Seat:</label>
                <input type="number" name="v_seat" placeholder="Seat Number" value="<?php echo $row['v_seat'];?>"><br>
            <label for="v_number">Vehicle Number:</label>
                <input type="text" name="v_number" placeholder="Number" value="<?php echo $row['v_number'];?>" required><br>
            <label for="cars">Vehicle Cost:</label>
                <input type="text" name="v_cost" placeholder="Cost (Rs.)" value="<?php echo $row['v_cost'];?>" required><br>
            <label for="cunit">Vehicle Cost Unit:</label>
                <select name="v_cunit" id="cunit" required>
                        <option><?php echo $row['v_cunit'];?></option>
                        <option value="hr">hr</option>
                        <option value="day">day</option>
                        <option value="week">week</option>
                        <option value="month">month</option>
                        <option value="year">year</option>
                    </select><br>
            <label for="cars">Vehicle Image:</label><br>
                <input type="file" name="photopath1" class="v_image1" value="<?php echo $row['v_image1'];?>"><br>
                <input type="file" name="photopath2" class="v_image2" ><br>
                <input type="file" name="photopath3" class="v_image3" ><br>
            <label for="cars">Vehicle Description:</label><br>
            <textarea name="v_description" placeholder="Description" required><?php echo $row['v_description']; ?></textarea><br>
            <label for="status">Vehicle Status:</label>
                <select name="v_status" id="status" required>
                        <option><?php echo $row['v_status'];?></option>
                        <option>Available</option>
                        <option>Unavailable</option>
                </select><br>
            <button type="submit" name="submit"><i class="fa-solid fa-check"></i> Save</button>
            <a href="vehicles.php" class="exit-btn"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>

<?php
if(isset($_POST['submit'])) {
    $v_name = $_POST['v_name'];
    $v_type = $_POST['v_type'];
    $v_fuel = $_POST['v_fuel'];
    $v_seat = $_POST['v_seat'];
    $v_number = $_POST['v_number'];
    $v_cost = $_POST['v_cost'];
    $v_cunit = $_POST['v_cunit'];
    $v_image1 = $_FILES['photopath1']['name'];
    $v_image2 = $_FILES['photopath2']['name'];
    $v_image3 = $_FILES['photopath2']['name'];
    $v_description = $_POST['v_description'];
    $v_status = $_POST['v_status'];

    $qry2 = "UPDATE vehicles SET
              v_name = '$v_name', 
              v_type = '$v_type', 
              v_fuel = '$v_fuel', 
              v_seat = '$v_seat',
              v_number = '$v_number', 
              v_cost = '$v_cost', 
              v_cunit = '$v_cunit', 
              v_image1 = '$v_image1', 
              v_image2 = '$v_image2', 
              v_image3 = '$v_image3', 
              v_description = '$v_description', 
              v_status = '$v_status' 
              WHERE v_id = '$id'";

    if(mysqli_query($con, $qry2)) {
        echo '<script type="text/javascript"> alert("Vehicle Updated Successfully!"); window.location.assign("vehicles.php"); </script>';
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
    }
}
?>


  </main>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Vehicles</title>
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
      <p>Add Vehicle</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
        <form action="add-vehicles.php" method="POST">
            <label for="cars">Vehicle Name: </label>
                <input type="text" name="v_name" placeholder="Name" required><br>
            <label for="type">Choose the category:</label>
                <select name="v_type" id="type" required>
                    <option value="Select">Select</option>
                    <option value="Car">Car</option>
                    <option value="Bike">Bike</option>
                    <option value="Cycle">Cycle</option>
                </select><br>
            <label for="fuel">Choose the fuel:</label>
                <select name="v_fuel" id="fuel">
                    <option value="Select">Select</option>
                    <option value="None">None</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="ev">EV</option>
                    <option value="cng">CNG</option>
                    <option value="hybrid">Hybrid</option>
                </select><br>
            <label for="cars">Vehicle Number:</label>
                <input type="text" name="v_number" placeholder="Number"><br>
            <label for="cars">Vehicle Cost:</label>
                <input type="text" name="v_cost" placeholder="Cost (Rs.)" required><br>
            <label for="cars">Vehicle Image:</label><br>
                <input type="file" name="v_image1" class="image-1" required><br>
                <input type="file" name="v_image2" class="image-2" ><br>
                <input type="file" name="v_image3" class="image-3" ><br>
            <label for="cars">Vehicle Description:</label><br>
                <textarea name="v_description" placeholder="Description" required></textarea><br>
            <button type="submit" name="submit"><i class="fa-solid fa-check"></i> Save</button>
            <a href="vehicles.php" class="exit-btn" onclick="return confirm('Are you sure to cancel?')"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>  


<?php
if(isset($_POST['submit']))
{
    $v_name = $_POST['v_name'];
    $v_type = $_POST['v_type'];
    $v_fuel = $_POST['v_fuel'];
    $v_number = $_POST['v_number'];
    $v_cost = $_POST['v_cost'];
    $v_image1 = $_POST['v_image1'];
    $v_image2 = $_POST['v_image2'];
    $v_image3 = $_POST['v_image3'];
    $v_description = $_POST['v_description'];

    $qry = "INSERT INTO vehicles (v_name, v_type, v_fuel, v_number, v_cost, v_image1, v_image2, v_image3, v_description) VALUES ('$v_name', '$v_type', '$v_fuel', '$v_number', '$v_cost', '$v_image1', '$v_image2', '$v_image3', '$v_description')";
    include 'admin-container/db_connection.php';
    if(mysqli_query($con, $qry))
    {
                
        echo '<script type="text/javascript"> alert("Vehicle Added Successfully!"); window.location.assign("vehicles.php"); </script>';
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

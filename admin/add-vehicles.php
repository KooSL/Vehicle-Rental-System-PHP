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

<?php
    $qry = "SELECT * FROM categories";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
  ?>   

  <main class="main">
    <section class="title">
      <p>Add Vehicle</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
        <form action="" method="POST" enctype="multipart/form-data" >
            <label for="cars">Vehicle Name: </label>
                <input type="text" name="v_name" placeholder="Name" required><br>
            <label for="type">Choose the category:</label>
                <select name="v_type" id="type" required>
                <?php while($row = mysqli_fetch_assoc($result)){  ?>
                    <option><?php echo $row['c_name'];?> - <?php echo $row['c_type'];?></option>
                <?php } ?>
                </select><br>
            <label for="fuel">Choose the fuel:</label>
                <select name="v_fuel" id="fuel">
                    <option value="Select">Select</option>
                    <option value="None">None</option>
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                    <option value="EV">EV</option>
                    <option value="CNG">CNG</option>
                    <option value="Hybrid">Hybrid</option>
                </select><br>
            <label for="cars">Vehicle Seat:</label>
                <input type="number" name="v_seat" placeholder="Seat Number"><br>
            <label for="cars">Vehicle Number:</label>
                <input type="text" name="v_number" placeholder="Number"><br>
            <label for="cars">Vehicle Cost:</label>
                <input type="text" name="v_cost" placeholder="Cost (Rs.)" required><br> 
            <label for="cunit">Vehicle Cost Unit:</label>
                <select name="v_cunit" id="cunit" required>
                        <option>Select</option>
                        <option value="hr">hr</option>
                        <option value="day">day</option>
                        <option value="week">week</option>
                        <option value="month">month</option>
                        <option value="year">year</option>
                    </select><br>
            <label for="cars">Vehicle Image:</label><br>
                <input type="file" name="v_image1" class="image-1" required accept="image/png, image/jpeg, image/jpg"><br>
                <input type="file" name="v_image2" class="image-2" accept="image/png, image/jpeg, image/jpg"><br>
                <input type="file" name="v_image3" class="image-3" accept="image/png, image/jpeg, image/jpg"><br>
            <label for="cars">Vehicle Description:</label><br>
                <textarea name="v_description" placeholder="Description" required></textarea><br>
            <label for="status">Vehicle Status:</label>
                <select name="v_status" id="status" required>
                        <option value="Select">Select</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select><br>
            <button type="submit" name="submit"><i class="fa-solid fa-check"></i> Upload</button>
            <a href="vehicles.php" class="exit-btn" onclick="return confirm('Are you sure to cancel?')"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>  


<?php
if(isset($_POST['submit']))
{
    $v_name = $_POST['v_name'];
    $v_type = $_POST['v_type'];
    $v_fuel = $_POST['v_fuel'];
    $v_seat = $_POST['v_seat'];
    $v_number = $_POST['v_number'];
    $v_cost = $_POST['v_cost'];
    $v_cunit = $_POST['v_cunit'];
    //$v_image1 = $_POST['v_image1'];
    //$v_image2 = $_POST['v_image2'];
    //$v_image3 = $_POST['v_image3'];
    $v_description = $_POST['v_description'];
    $v_status = $_POST['v_status'];

    $v_image1 = $_FILES['v_image1']['name'];
    $tmp_name = $_FILES['v_image1']['tmp_name'];
    $v_image1 = time().$v_image1;
    $filepath = "../uploads/".$v_image1;
    move_uploaded_file($tmp_name, $filepath);

    $v_image2 = $_FILES['v_image2']['name'];
    $tmp_name = $_FILES['v_image2']['tmp_name'];
    $v_image2 = time().$v_image2;
    $filepath = "../uploads/".$v_image2;
    move_uploaded_file($tmp_name, $filepath);

    $v_image3 = $_FILES['v_image3']['name'];
    $tmp_name = $_FILES['v_image3']['tmp_name'];
    $v_image3 = time().$v_image3;
    $filepath = "../uploads/".$v_image3;
    move_uploaded_file($tmp_name, $filepath);


    $qry = "INSERT INTO vehicles (v_name, v_type, v_fuel, v_seat, v_number, v_cost, v_cunit, v_image1, v_image2, v_image3, v_description, v_status) VALUES ('$v_name', '$v_type', '$v_fuel', '$v_seat', '$v_number', '$v_cost', '$v_cunit', '$v_image1', '$v_image2', '$v_image3', '$v_description', '$v_status')";
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


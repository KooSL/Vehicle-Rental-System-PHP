<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vehicles</title>
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
      <p>Vehicles</p>
      <!-- <div class="category-btn">
        <a href="categories.php"><i class="fa-solid fa-list"></i> Categories</a>
      </div> -->
      <div class="add-btn">
        <a href="add-vehicles.php"><i class="fa-solid fa-plus"></i> Add</a>
      </div>
    </section>
    <div class="vehicle-table">
      <table>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Category</th>
          <th>Fuel</th>
          <th>Seat</th>
          <th>Number</th>
          <th>Cost</th>
          <th>Unit</th>
          <th>Description</th>
          <th>Images</th>
          <th>Status</th>
          <th>Action</th>
        </tr>

<?php
    $qry = "SELECT * FROM vehicles ORDER BY v_id DESC";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>        

        <?php while($row = mysqli_fetch_assoc($result)){  ?>
          <tr>
            <td><?php echo $row['v_id'];?></td>
            <td><?php echo $row['v_name'];?></td>
            <td><?php echo $row['v_type'];?></td>
            <td><?php echo $row['v_fuel'];?></td>
            <td><?php echo $row['v_seat'];?></td>
            <td><?php echo $row['v_number'];?></td>
            <td><?php echo $row['v_cost'];?></td>
            <td><?php echo $row['v_cunit'];?></td>
            <td style="width:170px; font-size: 13px"><?php echo $row['v_description'];?></td>
            <td><img src="../uploads/<?php echo $row['v_image1'];?>" alt="" style="width:100px; height:100px"></td>
            <td><?php echo $row['v_status'];?></td>
            <td>
              <a href="edit-vehicle.php?v_id=<?php echo $row['v_id'];?>" class="confirm"><i class="fa-solid fa-pen"></i></a>
              <a href="vehicles.php?v_id=<?php echo $row['v_id'];?>" name="delete" class="delete" onclick="return confirm('Are you sure to delete?')"><i class="fa-solid fa-trash"></i></a>
            </td>
            
          </tr>
        <?php } ?>
        <?php
            if (isset($_GET['v_id'])) {
              $id = $_GET['v_id'];
              $qry2 = "DELETE FROM vehicles WHERE v_id = '$id'";
              $result = mysqli_query($con, $qry2);
          }
            
        ?>

      </table>
    </div>
  </main>
</body>
</html>


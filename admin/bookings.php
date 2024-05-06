<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      <p>Bookings</p>
    </section>
    <div class="booking-table">
      <table>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Image</th>
          <th>Email</th>
          <th>Vehicle</th>
          <th>Address</th>
          <th>from Date</th>
          <th>To Date</th>
          <th>Message</th>
          <th>Status</th>
          <th>Action</th>
        </tr>

<?php
    $qry = "SELECT * FROM bookings ORDER BY b_id DESC";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>  
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td style="width:170px; font-size: 13px"><?php echo $row['b_id'];?></td>
            <td style="width:170px; font-size: 13px"><?php echo $row['b_name'];?></td>
            <td><img src="../uploads/<?php echo $row['bv_image'];?>" alt="" style="width:100px; height:100px"></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_email'];?></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_vehicle'];?></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_address'];?></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_fromdate'];?></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_todate'];?></td>
            <td  style="width:170px; font-size: 13px"><?php echo $row['b_message'];?></td>
            <td><?php echo $row['b_status'];?></td>
            <td>
              <a href="bookings.php?confirm_id=<?php echo $row['b_id'];?>" class="confirm" onclick="return confirm('Are you sure to confirm this booking?')"><i class="fa-solid fa-check"></i></a>

              <a href="bookings.php?cancel_id=<?php echo $row['b_id'];?>" class="cancel" onclick="return confirm('Are you sure to cancel this booking?')"><i class="fa-solid fa-xmark"></i></a>

              <a href="bookings.php?delete_id=<?php echo $row['b_id'];?>" name="delete" class="delete" onclick="return confirm('Are you sure to delete?')"><i class="fa-solid fa-trash"></i></a>
              <!-- <button class="cancelbooking" onclick="return confirm('Are you sure to cancel this booking?')"><i class="fa-solid fa-xmark"></i></button> -->

            </td>
          </tr>
        <?php } ?>
   
      </table>
    </div>

      <?php
          if (isset($_GET['delete_id'])) {
            $del_id = $_GET['delete_id'];
            $qry3 = "DELETE FROM bookings WHERE b_id = '$del_id'";
            $result = mysqli_query($con, $qry3);
          }
          elseif (isset($_GET['confirm_id'])) {
            $confrim_id = $_GET['confirm_id'];
            $b_status = "Confirmed";
            $qry4 = "UPDATE bookings SET b_status = '$b_status' WHERE b_id = '$confrim_id'";
            $result2 = mysqli_query($con, $qry4);
          }
          elseif (isset($_GET['cancel_id'])) {
            $cancel_id = $_GET['cancel_id'];
            $b_status = "Canceled";
            $qry5 = "UPDATE bookings SET b_status = '$b_status' WHERE b_id = '$cancel_id'";
            $result3 = mysqli_query($con, $qry5);
          }
      ?>

    
  </main>
</body>
</html>


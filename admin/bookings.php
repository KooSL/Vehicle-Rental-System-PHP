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
          <th>Vehicle</th>
          <th>Address</th>
          <th>from Date</th>
          <th>To Date</th>
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
            <td><?php echo $row['b_id'];?></td>
            <td><?php echo $row['b_name'];?></td>
            <td><?php echo $row['b_vehicle'];?></td>
            <td><?php echo $row['b_address'];?></td>
            <td><?php echo $row['b_fromdate'];?></td>
            <td><?php echo $row['b_todate'];?></td>
            <td id="bookingstatus">Confirmed</td>
            <td>
              <a href="bookings.php?b_id=<?php echo $row['b_id'];?>" class="confirm" onclick="return confirm('Are you sure to confirm this booking?')"><i class="fa-solid fa-check"></i></a>

              <a href="?b_id=<?php echo $row['b_id'];?>" class="cancel" onclick="return confirm('Are you sure to cancel this booking?')" id="cancelbooking" name="cancelbookingbutton" value="Cancled"><i class="fa-solid fa-xmark"></i></a>
              <a href="bookings.php?b_id=<?php echo $row['b_id'];?>" name="delete" class="delete" onclick="return confirm('Are you sure to delete?')"><i class="fa-solid fa-trash"></i></a>
              <!-- <button class="cancelbooking" onclick="return confirm('Are you sure to cancel this booking?')"><i class="fa-solid fa-xmark"></i></button> -->

            </td>
          </tr>
        <?php } ?>

        <?php
        //   if(isset($_POST['cancelbookingbutton'])){
        //     $b_status = $_POST["cancelbookingbutton"];

        //     $qry2 = "INSERT INTO bookings (b_status) VALUES ('$b_status')";
        //     if(mysqli_query($con, $qry2)) {
        //       echo "Value inserted successfully!";
        //     } else {
        //         echo "Error: " . $qry2 . "<br>" . mysqli_error($con);
        //   }
        //   } 
        //   else {
        //     echo "Error: Value not received.";
        // }
        ?>
   
      </table>
    </div>

    <!-- <script>
      document.addEventListener("DOMContentLoaded", function() {
        const cancelBookingLinks = document.querySelectorAll(".cancel");
        const bookingStatusText = document.getElementById("bookingstatus-text");

        const storedStatus = localStorage.getItem("bookingStatus");
        if (storedStatus) {
          bookingStatusText.textContent = storedStatus;
        }

        cancelBookingLinks.forEach(link => {
          link.addEventListener("click", function(event) {
            event.preventDefault();
            
            bookingStatusText.textContent = "Canceled";

            localStorage.setItem("bookingStatus", "Canceled");
          });
        });
      });
    </script> -->

      <?php
            if (isset($_GET['b_id'])) {
              $id = $_GET['b_id'];
              $qry3 = "DELETE FROM bookings WHERE b_id = '$id'";
              $result = mysqli_query($con, $qry3);
          }
            
      ?>

    
  </main>
</body>
</html>




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
      <p>Customers</p>
    </section>
    <div class="customer-table">
      <table>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Gender</th>
          <th>Reg. Date</th>
        </tr>
<?php
    $qry = "SELECT * FROM user_signup ORDER BY u_id DESC";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['u_id'];?></td>
            <td><?php echo $row['u_name'];?></td>
            <td><?php echo $row['u_address'];?></td>
            <td><?php echo $row['u_email'];?></td>
            <td><?php echo $row['u_phone'];?></td>
            <td><?php echo $row['u_gender'];?></td>
            <td><?php echo $row['u_reg_date'];?></td>
          </tr>
        <?php } ?>



      </table>
    </div>
    
  </main>
</body>
</html>


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
      <p>Queries</p>
    </section>
    <div class="query-table">
      <table>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Message</th>
          <th>Date</th>
          <th>Action</th>
        </tr>
<?php
    $qry = "SELECT * FROM contact ORDER BY cnt_id DESC";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['cnt_id'];?></td>
            <td><?php echo $row['cnt_name'];?></td>
            <td><?php echo $row['cnt_email'];?></td>
            <td><?php echo $row['cnt_phone'];?></td>
            <td><?php echo $row['cnt_message'];?></td>
            <td><?php echo $row['cnt_date'];?></td>
            <td>
              <?php $cnt_email = md5($row['cnt_email']); ?>
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" class="confirm"><i class="fa-solid fa-envelope"></i></a>
              <!-- <a href="vehicles.php?v_id=<?php echo $row['v_id'];?>" name="delete" class="delete" onclick="return confirm('Are you sure to delete?')"><i class="fa-solid fa-trash"></i></a> -->
            </td>
        <?php } ?>

      </table>
    </div>
    
  </main>
</body>
</html>

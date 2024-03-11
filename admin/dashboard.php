
<?php
    include 'admin-container/db_connection.php';

    $qry1= "SELECT * FROM user_signup";
    $qry2= "SELECT * FROM vehicles";
    $qry3= "SELECT * FROM bookings";
    $qry4= "SELECT * FROM categories";
    $qry5= "SELECT * FROM contact";
 
    $customers = mysqli_query($con, $qry1);
    $vehicles = mysqli_query($con, $qry2);
    $bookings = mysqli_query($con, $qry3);
    $categories = mysqli_query($con, $qry4);
    $queries = mysqli_query($con, $qry5);

    $rows_count_customers = mysqli_num_rows($customers);
    $rows_count_vehicles = mysqli_num_rows($vehicles);
    $rows_count_bookings = mysqli_num_rows($bookings);
    $rows_count_categories = mysqli_num_rows($categories);
    $rows_count_queries = mysqli_num_rows($queries);

?>

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
      <p>Dashboard</p>
    </section>
    <div class="grids">
      <div class="card">
        <P><?php echo $rows_count_bookings;?></P>
        <P>Bookings</P>
        <a href="bookings.php" class="btn">View Details</a>
      </div>
      <div class="card">
        <P><?php echo $rows_count_vehicles;?></P>
        <P>Vehicles</P>
        <a href="vehicles.php" class="btn">View Details</a>
      </div>
      <div class="card">
        <P><?php echo $rows_count_categories;?></P>
        <P>Categories</P>
        <a href="categories.php" class="btn">View Details</a>
      </div>
      <div class="card">
        <P><?php echo $rows_count_customers;?></P>
        <P>Customers</P>
        <a href="customers.php" class="btn">View Details</a>
      </div>
      <div class="card">
        <P><?php echo $rows_count_queries;?></P>
        <P>Queries</P>
        <a href="queries.php" class="btn">View Details</a>
      </div>
      <!-- <div class="card">
        <P></P>
        <a href="#" class="btn">View Details</a>
      </div>
      <div class="card">
        <P></P>
        <a href="#" class="btn">View Details</a>
      </div> -->
    </div>
    
  </main>
</body>
</html>

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
      <p>Categories</p>
      <div class="add-btn">
        <a href="add-category.php"><i class="fa-solid fa-plus"></i> Add</a>
      </div>
    </section>
    <div class="category-table">
      <table>

        <tr>
          <th>S.N</th>
          <th>Category</th>
          <th>Type</th>
          <th>Action</th>
        </tr>

<?php
    $qry = "SELECT * FROM categories ORDER BY c_id DESC";
    include 'admin-container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>

        <?php while($row = mysqli_fetch_assoc($result)){  ?>
          <tr>
            <td><?php echo $row['c_id'];?></td>
            <td><?php echo $row['c_name'];?></td>
            <td><?php echo $row['c_type'];?></td>
            <td>
              <a href="edit-category.php?c_id=<?php echo $row['c_id'];?>" class="edit"><i class="fa-solid fa-pen"></i></a>
              <a href="categories.php?c_id=<?php echo $row['c_id'];?>" class="delete" onclick="return confirm('Are you sure to delete?')"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
        <?php
            if (isset($_GET['c_id'])) {
              $id = $_GET['c_id'];
              $qry2 = "DELETE FROM categories WHERE c_id = '$id'";
              $result = mysqli_query($con, $qry2);
          }
            
        ?>

      </table>
    </div>
    
  </main>
</body>
</html>

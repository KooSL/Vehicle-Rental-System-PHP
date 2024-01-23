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
          <th>Name</th>
          <th>Type</th>
          <th>Fuel</th>
          <th>Seats</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>1</td>
          <td>TATA</td>
          <td>Car</td>
          <td>Diesel</td>
          <td>5</td>
          <!-- <td>
            <a href="">Confirm</a>
            <a href="">Cancel</a>
          </td> -->
          <td>
            <a href="edit-category.php" class="edit"><i class="fa-solid fa-pen"></i></a>
            <a href="#" class="delete"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
        </tr>
        <tr>
          <td>1</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
          <td>dfgdg</td>
        </tr>
      </table>
    </div>
    
  </main>
</body>
</html>

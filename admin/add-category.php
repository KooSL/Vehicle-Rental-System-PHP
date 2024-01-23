<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Category</title>
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
      <p>Add Category</p>
      <!-- <a href="#"><i class="fa-solid fa-check"></i> Save</a> -->
    </section>
    <div class="add-vehicle">
        <form action="" method="POST">
            <label for="cars">Vehicle Name: </label>
                <input type="text" name="v-name" placeholder="Name" required><br>
            <label for="brands">Choose the brand:</label>
                <select name="brands" id="brands" required>
                    <option value="Select">Select</option>
                    <option value="tata">TATA</option>
                    <option value="toyota">Toyota</option>
                    <option value="suzuki">Suzuki</option>
                </select><br>
            <label for="fuel">Choose the fuel:</label>
                <select name="fuel" id="fuel" required>
                    <option value="Select">Select</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="ev">EV</option>
                </select><br>
            <label for="cars">Vehicle Number:</label>
                <input type="text" name="number" placeholder="Number" required><br>
            <label for="cars">Vehicle Cost:</label>
                <input type="text" name="cost" placeholder="Cost (Rs.)" required><br>
            <label for="cars">Vehicle Image:</label><br>
                <input type="file" name="photopath1" class="image-1" required><br>
                <input type="file" name="photopath2" class="image-2" required><br>
                <input type="file" name="photopath3" class="image-3" required><br>
            <label for="cars">Vehicle Description:</label><br>
                <textarea name="description" placeholder="Description" required></textarea><br>
            <button type="submit"><i class="fa-solid fa-check"></i> Save</button>
            <a href="categories.php" class="exit-btn"><i class="fa-solid fa-xmark"></i> Cancel</a>
        </form>
    </div>
  </main>
</body>
</html>

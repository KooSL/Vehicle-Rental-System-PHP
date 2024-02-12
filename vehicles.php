<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Vehicles</title>
</head>
<body>
    <!--Header-->
    <?php
        include 'container\header.php';
    ?>
    
    <!-- services-->
    <section class="vehicles" id="vehicles">
        <div class="heading">
            <span>Vehicles</span>
            <h3>Choose A Category</h3>
        </div> 

        <div class="vehicle-browse">
            <ul class="browse-list" id="filter-links"">
                <li><a href="#" onclick="filterVehicle('cars')"><i class="fa-solid fa-car"></i> Cars</a></li>
                <li><a href="#bikes"><i class="fa-solid fa-motorcycle"></i> Bikes</a></li>
                <li><a href="#buses"><i class="fa-solid fa-bus"></i> Buses</a></li>
                <li><a href="#cycles"><i class="fa-solid fa-bicycle"></i> Cycles</a></li>
                <li><a href="#trucks"><i class="fa-solid fa-truck"></i> Trucks</a></li>
                <li><a href="#tractors"><i class="fa-solid fa-tractor"></i> Tractors</a></li>
                <li><a href="#helicopters"><i class="fa-solid fa-helicopter"></i> Helicopters</a></li>
            </ul>
        </div>

        <div class="form-container">
            <form>
                <div class="input-box">
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form>
        </div>  

        <div class="heading">
            <h1>Explore Out Top Deals</h1>
        </div> 

        <div class="vehicles-container" id="vehicles-container">

<?php
    $qry = "SELECT * FROM vehicles ORDER BY v_id DESC";
    include 'container/db_connection.php';
    $result = mysqli_query($con, $qry);
?>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="box">
                    <div class="box-img">
                        <img src="images/<?php echo $row['v_image1'];?>">  
                    </div>
<!-- <i class="fa-solid fa-circle-check"></i>  -->

                    <h3><?php echo $row['v_name'];?></h3>
                    <p><?php echo $row['v_fuel'];?></p>
                    <div class="cost">
                        <p>Rs.<?php echo $row['v_cost'];?> <span>/month</span><p>
                        <p class="avaibility" name="status" id="status"><i class="fa-solid fa-circle-check"></i> <?php echo $row['v_status'];?><p>
                    </div>
                    <a href="details.php?v_id=<?php echo $row['v_id'];?>" class="btn">Details</a>
                    <a href="rent-now.php?v_id=<?php echo $row['v_id'];?>" class="btn">Rent Now</a>
                </div>
            <?php } ?>
        </div>
        
    <!-- <script type="text/javascript">
        const newstatus = document.getElementsById('#status');
        if (newstatus == "available"){
            document.write(status)
            window.alert(status);
            status.style.color = "blue";
            status.innerHTML = "New Heading";
        }
        else{
            status.style.color = "red";
        }
    </script> -->

    <!-- <script>
        const status = document.querySelector("#avaibility");
        status.addEventListener("click", function() {
        changeText.textContent = "Text has been changed!";
      });
    </script> -->


    </section>

    <?php
        include 'container\footer.php';
    ?>

<script>
    // Sample product data (replace with your actual product data)
    const products = [
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            { name: '<?php echo $row['v_name'];?>', category: '<?php echo $row['v_type'];?>' },
        <?php } ?>
    ];

    function filterVehicle(category) {
    const filteredVehicle = category === 'cars' ? vehicles : vehicles.filter(vehicles => vehicles.category === category);
    displayVehicles(filteredVehicle);
    }

    function displayVehicles(vehicles) {
    const container = document.getElementById('vehicles-container');
    container.innerHTML = '';

    vehicles.forEach(vehicles => {
        const productElement = document.createElement('div');
        productElement.textContent = product.name;
        container.appendChild(productElement);
    });
    }

    // Initially display all products
    // filterProducts('all');


</script>


</body>
</html>


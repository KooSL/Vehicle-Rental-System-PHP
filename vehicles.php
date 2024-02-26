





<?php
    $vehicleType = isset($_GET['v_type']) ? $_GET['v_type'] : 'all';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/ae61999827.js"></script>
    <title>Vehicles</title>
</head>
<body>
    <?php
        include 'container/header.php';
    ?>
    
    <section class="vehicles" id="vehicles">
        <div class="heading">
            <span>Vehicles</span>
            <h3>Choose A Category</h3>
        </div> 

        <div class="vehicle-browse">
            <ul class="browse-list" id="filter-links">
                <li><a href="vehicles.php" data-filter="all"><i class="fa-solid fa-list"></i> All</a></li>
                <li><a href="vehicles.php?v_type=car" data-filter="car"><i class="fa-solid fa-car"></i> Cars</a></li>
                <li><a href="#" data-filter="bike"><i class="fa-solid fa-motorcycle"></i> Bikes</a></li>
                <li><a href="#" data-filter="buse"><i class="fa-solid fa-bus"></i> Buses</a></li>
                <li><a href="#" data-filter="cycle"><i class="fa-solid fa-bicycle"></i> Cycles</a></li>
                <li><a href="#" data-filter="truck"><i class="fa-solid fa-truck"></i> Trucks</a></li>
                <li><a href="#" data-filter="tractor"><i class="fa-solid fa-tractor"></i> Tractors</a></li>
                <li><a href="#" data-filter="helicopter"><i class="fa-solid fa-helicopter"></i> Helicopters</a></li>
            </ul>
        </div>


        <div class="heading">
            <h1>Explore Our Top Deals</h1>
        </div> 

        <div class="vehicles-container" id="vehicles-container">
            <?php
                $vehicleType = isset($_GET['v_type']) ? $_GET['v_type'] : 'all';
                $qry = "SELECT * FROM vehicles ORDER BY v_id DESC";
                include 'container/db_connection.php';
                $result = mysqli_query($con, $qry);
                $hasVehicles = false;
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                        if ($vehicleType === 'all' || strtolower($row['v_type']) === $vehicleType) {
                            $hasVehicles = true;
                    ?>
                    <div class="box <?php echo strtolower($row['v_type']); ?>">
                        <div class="box-img">
                            <a href="details.php?v_id=<?php echo $row['v_id'];?>"><img src="images/<?php echo $row['v_image1'];?>"></a>  
                        </div>
                        <h3><?php echo $row['v_name'];?></h3>
                        <p><?php echo $row['v_fuel'];?></p>
                        <div class="cost">
                            <p>Rs.<?php echo $row['v_cost'];?><span>/<?php echo $row['v_cunit'];?></span></p>
                            <?php
                                $v_status = $row['v_status'];
                                if($v_status == "Available"){
                                    echo '<p class="available" name="status" id="status"><i class="fa-solid fa-circle-check"></i> Available</p>';
                                }
                                elseif($v_status == "Unavailable"){
                                    echo '<p class="unavailable" name="status" id="status"><i class="fa-solid fa-circle-xmark"></i> Unavailable</p>';
                                }
                            ?>
                        </div>
                        <a href="details.php?v_id=<?php echo $row['v_id'];?>" class="btn">Details</a>
                        <?php if(isset($_SESSION['username'])){
                            echo '<a href="rent-now.php?v_id=' . $row['v_id'] . '" class="btn">Rent Now</a>';
                        }
                        else{
                            echo '<a href="sign-up.php" class="btn">Rent Now</a>';
                        }
                        ?>
                    </div>
                    <?php 
                        }
                    } 
                }
                else{
                    echo '<p class="no-bookings">No Vehicles found!</p>';
                }
            ?>
        </div>
    </section>

    <?php
        include 'container/footer.php';
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterLinks = document.querySelectorAll("#filter-links a");

            filterLinks.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const filter = this.getAttribute("data-filter").toLowerCase();
                    filterVehicles(filter);
                });
            });

            function filterVehicles(filter) {
                const vehicles = document.querySelectorAll(".box");
                vehicles.forEach(vehicle => {
                    if (filter === "all" || vehicle.classList.contains(filter)) {
                        vehicle.style.display = "block";
                    } else {
                        vehicle.style.display = "none";
                    }
                });
            }
        });

        function filterVehicles(filter) {
        const vehicles = document.querySelectorAll(".box");
        let foundVehicles = false; 

        vehicles.forEach(vehicle => {
            if (filter === "all" || vehicle.classList.contains(filter)) {
                vehicle.style.display = "block";
                foundVehicles = true; 
            } else {
                vehicle.style.display = "none";
            }
        });

        const noVehiclesMessage = document.getElementById("no-vehicles-message");
        if (foundVehicles) {
            noVehiclesMessage.style.display = "none";
        } else {
            noVehiclesMessage.style.display = "block";
        }
    }

    </script>

</body>
</html>

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
            <span>My Bookings</span>
        </div> 

        <div class="vehicles-container" id="vehicles-container">

<?php
    $qry2 = "SELECT * FROM bookings WHERE b_email = '$u_username'";
    include 'container/db_connection.php';
    $result2 = mysqli_query($con, $qry2);
?>
            <?php 
            if(mysqli_num_rows($result2) > 0){
                while($row2 = mysqli_fetch_assoc($result2)) { ?>
                <?php 
                    $vid = $row2['v_id']; 
                    $qry = "SELECT * FROM vehicles WHERE v_id = '$vid'";
                    $result = mysqli_query($con, $qry);
                    $row = mysqli_fetch_assoc($result);
                    $status = $row2['b_status'];
                ?>
                <div class="box">
                    <div class="box-img">
                        <img src="uploads/<?php echo $row['v_image1'];?>">  
                    </div>

                    <h3><?php echo $row2['b_vehicle'];?></h3>
                    <p><b>Type:</b>&nbsp;<?php echo $row['v_type'];?></p>
                    <p><b>Fuel:</b>&nbsp;<?php echo $row['v_fuel'];?></p>
                    <p><b>Seats:</b>&nbsp;<?php echo $row['v_seat'];?></p>
                    <p><b>Number:</b>&nbsp;<?php echo $row['v_number'];?></p>
                    <p><b>Cost:</b>&nbsp;Rs.<?php echo $row['v_cost'];?><span>/<?php echo $row['v_cunit'];?></span></p>
                    <div class="cost">
                        <!-- <p>Rs.<?php echo $row['v_cost'];?> <span>/month</span><p> -->
                        <!-- <p class="avaibility" name="status" id="status"><i class="fa-solid fa-circle-check"></i> <?php echo $row['v_status'];?><p> -->
                    </div>
                    <div class="booking-infos">
                        <p><b>Address:</b>&nbsp;<?php echo $row2['b_address'];?></p>
                        <p><b>From:</b>&nbsp;<?php echo $row2['b_fromdate'];?></p>
                        <p><b>To:</b>&nbsp;<?php echo $row2['b_todate'];?></p>
                        <?php
                            $status = $row2['b_status'];
                            if($status == ""){
                                echo '<p><b>Status:</b>&nbsp;Pending</p>';
                            }
                            elseif($status == "Confirmed"){
                                echo '<p><b>Status:</b>&nbsp;Confirmed</p>';
                            }
                            elseif($status == "Canceled"){
                                echo '<p><b>Status:</b>&nbsp;Canceled</p>';
                            }
                        ?>
                        <!-- <p><b>Status:</b>&nbsp;<?php echo $row2['b_status'];?></p> -->
                    </div>
                    <!-- <a href="details.php?v_id=<?php echo $row['v_id'];?>" class="btn">Details</a> -->
                    <?php
                        $status = $row2['b_status'];
                        if($status == "Confirmed"){
                            echo '<a href="#" class="btn">Cancel Booking</a>';
                        }
                        elseif($status == "Canceled"){
                            echo '<a href="#" class="btn">Confirm Booking</a>';
                        }
                    ?>
                </div>
                <?php } 

            }else{
                echo '<p class="no-bookings">No bookings found!</p>';
            }?>
        </div>

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

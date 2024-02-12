# Vehicle-Rental-System







<link rel="stylesheet" href="css\style.css">


    

    <?php
        include 'C:\xampp\htdocs\Vehicle-Rental-System\container\header.php';
    ?>

    <?php
        include 'C:\xampp\htdocs\Vehicle-Rental-System\container\footer.php';
    ?>

<?php while($row) { ?>
                    <div class="box">
                        <div class="box-img">
                            <img src="images/<?php echo $row['v_image1'];?>">  
                        </div>
                        <!-- <h3><?php echo $row['v_name'];?></h3> -->
                        <!-- <p><?php echo $row['v_type'];?></p> -->
                        <div class="cost">
                            <p>Rs.<?php echo $row['v_cost'];?> <span>/month</span><p>
                        </div>
                        <a href="details.php" class="btn">Details</a>
                    </div>
                <?php } ?>



<?php echo $row['v_status'];?>





<?php echo $row['b_id'];?>

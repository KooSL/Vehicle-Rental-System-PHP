<?php
    session_start();
    include 'container/db_connection.php';
    if(isset($_SESSION['username'])){
        $u_username = $_SESSION['username'];
        $qry = "SELECT * FROM user_signup WHERE u_email = '$u_username'";
        $result = mysqli_query($con, $qry);
        $row = mysqli_fetch_assoc($result);
        $u_name = $row['u_name'];
        $u_id = $row['u_id'];
        $parts = explode(' ', $u_name);
        $firstName = $parts[0];
    }
?>


    
    <header>
        <!-- <a href="#" class="logo"><img src="/home/linuxkali/Documents/My-VSCode/Vehicle-Rental-System-2/images/jeep.png" alt=""></a> -->
        <a href="home.php" class="logo"><i class="fa-solid fa-car"></i> Sadhan <i class="fa-solid fa-motorcycle"></i></a>

       <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar" id="myDIV">
            <li><a href="home.php" class="btn">Home</a></li>
            <li><a href="vehicles.php" class="btn">Vehicles</a></li>
            <li><a href="reviews.php" class="btn">Reviews</a></li>
            <li><a href="contact.php" class="btn">Contact</a></li>
            <li><a href="about.php" class="btn">About</a></li>
            <!-- <li><a href="admin\dashboard.php">Dashboard</a></li> -->
        </ul>

        <div class="header-btn">
        <?php if (isset($_SESSION['username'])) { ?>
            <div class="profile-menu">
                <a href="user-profile.php?u_id=<?php echo $row['u_id'];?>" class="profile-name"><i class="fa-solid fa-user" ></i> <?php echo $firstName; ?></a>
                <div class="dropdown-menu">
                    <a href="my-bookings.php"><i class="fa-solid fa-calendar"></i> My Bookings</a>
                    <a href="log-out.php" onclick="return confirm('Are you sure to log out?')"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                </div>
            </div>
        <?php } else { ?>
            <!-- <a href="sign-up.php" class="sign-in"><i class="fa-solid fa-user"></i> Sign Up</a> -->
            <div class="profile-menu">
                <a href="sign-up.php" class="profile-name"><i class="fa-solid fa-user" ></i> Sign Up</a>
                <div class="dropdown-menu">
                    <a href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Log In</a>
                </div>
            </div>
        <?php } ?>
    </div>

    </header>

    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) { 
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
        });
        }
    </script>
</body>
</html>

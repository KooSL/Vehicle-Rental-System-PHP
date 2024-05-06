


<?php


if(isset($_POST['subs_submit']))
        {
            $subs_email = $_POST['subs_email'];

            $subs_qry = "INSERT INTO subscribers (sub_email) VALUES ('$subs_email')";
            include 'container/db_connection.php';
            if(mysqli_query($con, $subs_qry))
                {
                    echo '<script type="text/javascript"> alert("Subscribed Successfully!"); window.location.assign("contact.php"); </script>';
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Something Went Wrong on subscription!"); window.location.assign("contact.php"); </script>';
                }
        }

        ?>


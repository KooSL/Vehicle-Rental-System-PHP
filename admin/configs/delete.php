



<?php
    include '../admin-container/db_connection.php';
    $v_id = $_GET['id'];
    $qry = "DELETE FROM vehicles WHERE v_id = '$v_id'";
    $result = mysqli_query($con, $qry);
    if($result){
        echo "deleted";
    }
    else{
        echo "failed";
    }
?>


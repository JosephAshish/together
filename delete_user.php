<?php

include("db.php");
?>
<?php
$user_id=$_GET['x'];


$sql    = "DELETE FROM `registeration` WHERE `user_id`='$user_id'";
        $result = mysqli_query($conn, $sql);

$sql1    = "DELETE FROM `offer_ride` WHERE `user_id`='$user_id'";
        $result1 = mysqli_query($conn, $sql);

$sql2   = "DELETE FROM `request_ride` WHERE `user_id`='$user_id'";
        $result2 = mysqli_query($conn, $sql);


        if ($result)
           {

               
                        header("location:users.php?success=delete ok");
            
            

     
}
?>
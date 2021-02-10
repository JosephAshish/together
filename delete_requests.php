<?php

include("db.php");
?>
<?php
$request_id=$_GET['x'];

$sql1   = "SELECT * FROM `request_ride` WHERE `confirmation_status` LIKE 'confirmed' and `request_id`='$request_id'";
$result1 = mysqli_query($conn, $sql1);
$row1=mysqli_fetch_array($result1);
if($result1)
{
echo"<h3 style='color:red;font-size:17px;text-align:center;'>cant delete request ..... Request has been already confirmed</h3>";
}
else
{
$sql2    = "DELETE FROM `request_ride` WHERE `request_id`='$request_id'";
        $result2 = mysqli_query($conn, $sql2);


        if ($result2)
           {

               
                        header("location:offers.php?success=delete ok");
            
            

     
}
}
?>
<?php

include("db.php");
?>
<?php
$offer_id=$_GET['x'];

$sql1   = "SELECT * FROM `request_ride` WHERE `confirmation_status` LIKE 'confirmed' and `requested_too`='$offer_id'";
$result1 = mysqli_query($conn, $sql1);
$row1=mysqli_fetch_array($result1);
if($result1)
{
echo"<h3 style='color:red;font-size:17px;text-align:center;'>cant delete the offered ...Offer has already used</h3>";
}
else
{
$sql2    = "DELETE FROM `offer_ride` WHERE `offer_id`='$offer_id'";
        $result2 = mysqli_query($conn, $sql2);


        if ($result2)
           {

               
                        header("location:offers.php?success=delete ok");
            
            

     
}
}
?>
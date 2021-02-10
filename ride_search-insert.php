<?php

include("db.php");
?>
<?php
$start_from = $_SESSION["start_from"];
$destination  = $_SESSION["destination"];
$date        = $_SESSION["date"];
$no_seat_need      = $_SESSION['no_seat_need'];
$user_id    = $_SESSION["user_id"];
$distance = $_SESSION["distance"];
$pickup_time = $_SESSION["pickup_time"];
$arrival_time = $_SESSION["arrival_time"];
$requested_too=$_GET['x'];
$dm=($distance * 5);
$_SESSION["distamt"]=$dm;
$amount=$dm*$no_seat_need;
$_SESSION["$amt"]=$amount;

       $sql    = "INSERT INTO `request_ride` (`request_id`, `user_id`, `requested_too` , `start_from`, `destination`, `distance`, `pickup_time`, `arrival_time`, `date`, `no_seat_need`,`amount`, `confirmation_status`) VALUES (NULL, '$user_id','$requested_too','$start_from', '$destination', '$distance', '$pickup_time', '$arrival_time', '$date', '$no_seat_need ','$amount', 'requested')";
$result = mysqli_query($conn, $sql);
/*
$sql0 = "SELECT * FROM `offer_ride` WHERE `user_id` = '$requested_too'";
    $result0 = mysqli_query($conn, $sql0);
while($row0=mysqli_fetch_array($result0))
{
   $total_seat = $row0['no_seat_avail'];

}
$remaining_seat = $total_seat - $no_seat_need;
echo "$remaining_seat";
$sql1 = "UPDATE `offer_ride` SET `no_seat_avail` = '$remaining_seat' WHERE `user_id` = '$requested_too'";
     
$result1 = mysqli_query($conn, $sql1);
*/
        
     if ($result)
           {

              
                        header("location:bill.php?success=bill");

     
}
?>
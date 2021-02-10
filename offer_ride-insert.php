<?php

include("db.php");
$start_from = $_GET['start_from'];
$destination  = $_GET['destination'];
$route  = $_GET['route'];
$date        = $_GET['date'];
$departure_time     = $_GET['departure_time'];
$no_seat_avail      = $_GET['no_seat_avail'];
$sql1= "SELECT `distance` , `duration` FROM `distance` WHERE `start_from` LIKE '$start_from' AND `destination` LIKE '$destination' ";
            $result1 = mysqli_query($conn, $sql1);
            $row1  = mysqli_fetch_array($result1);

    $distance=$row1['distance'];
    $duration=$row1['duration'];


$car_id   = $_GET['car_id'];
$car_model   = $_GET['car_model'];
$user_id    = $_SESSION["user_id"];

        $sql= "INSERT INTO `offer_ride` (`offer_id`, `user_id`, `start_from`, `destination`, `route`, `date`, `departure_time`, `no_seat_avail`, `car_id`, `car_model`, `dista`, `duration`) VALUES (NULL, '$user_id', '$start_from', '$destination', '$route', '$date', '$departure_time', '$no_seat_avail', '$car_id', '$car_model', '$distance', '$duration')";
        $result = mysqli_query($conn, $sql);
       

        if ($result)
           {

                       header("location: profile.php");
                        header("location:profile.php?success=login ok");

     
}
?>
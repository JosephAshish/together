    <?php
     include("db.php");
    include("user_menu.php");


    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' type='text/css' href='ride_search.css'>
                    <style>
                        button.book-btn {
            color: #fff;
            position: relative;
            background: orange;
            border: none;
            left: 55%;
            outline: none;
            width: 35%;
            font-size: 15px;
            border-radius: 0;
            padding: 14px 0px;
            cursor: pointer;
            letter-spacing: 2px;
            -webkit-transition: 0.5s all;
            -o-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -ms-transition: 0.5s all;
            transition: 0.5s all;
                            
        }
                        </style>
        </head>
    <body>

<div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Rides <b>Available</b></h2>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Number of Seats Avail.</th>
                       <th>Approx. Arrival Time</th>
                        <th>Request</th>
                    </tr>
                </thead>
                <?php

$start_from = $_GET['start_from'];
$destination  = $_GET['destination'];
$date        = $_GET['date'];
$no_seat_need      = $_GET['no_seat_need'];
$user_id    = $_SESSION["user_id"];
       $sql1    = "SELECT * FROM `offer_ride` WHERE `start_from` LIKE '$start_from' AND `destination` LIKE '$destination'";
           /*"select * from `offer_ride` where `start_from` LIKE '$start_from' AND `destination` LIKE '$destination' AND `date`='$date' AND `no_seat_need`>=$no_seat_need";*/
        $result1 = mysqli_query($conn, $sql1);
    if ($result1)
       {

            while($row1=mysqli_fetch_array($result1))
            {
            $offereduser_id=$row1['user_id'];
$sql2="select * from registeration where user_id='".$row1['user_id']."' ";
                $result2=mysqli_query($conn,$sql2);
                            while($row2=mysqli_fetch_array($result2))
                            {

           /*  $sql3="select registeration.first_name , registeration.last_name , offer_ride.start_from , offer_ride.destination , offer_ride.date , offer_ride.departure_time , offer_ride.no_seat_avail , offer_ride.approx_arrival from registeration,offer_ride where `registeration.user_id=offer_ride.user_id AND `offer_ride.start_from`='$start_from' AND `offer_ride.destination`='$destination' AND `offer_ride.date`='$date' AND `offer_ride.no_seat_need`='$no_seat_need'";
                           $result3 = mysqli_query($conn, $sql3);
    if ($result3)
       {

            while($row3=mysqli_fetch_array($result3))
            { 
            

       
*/

            echo"<tbody>";
            echo "<tr>";
            echo "<td>".$row2['first_name']."</td>";
            echo "<td>".$row2['last_name']."</td>";
            echo "<td>".$row1['start_from']."</td>";
            echo "<td>".$row1['destination']."</td>";			
            echo "<td>".$row1['date']."</td>";            
            echo "<td>".$row1['departure_time']."</td>";
            echo "<td>".$row1['no_seat_avail']."</td>";
            echo "<td>".$row1['approx_arrival']."</td>";
            echo "<td> <input type=submit name='".$row1['user_id']."' value=request>";
            echo "</tr>";
            echo"</tbody>";
            }
                }
    }

                ?>

            </table>

        </div>
    </div>
        </div>
</body>
</html>                                		                            
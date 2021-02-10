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

        </head>
    <body>
        
        <?php
if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}
?>

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
                        <th>Name</th>
                        
                        <th>From</th>
                        <th>To</th>
                        <th>Departure Time</th>
                        <th>Distance in Km</th>
                        <th>Pick up within</th>
                        <th>Arrival time</th>
                        <th>Date</th>

                        <th>Number of Seats Avail.</th>
                        <th>Reg. No</th>
                        <th>Model</th>
                        <th>Request</th>
                    </tr>
                </thead>

                <?php

$start_from = $_GET['start_from'];
$destination  = $_GET['destination'];
$date        = $_GET['date'];
$no_seat_need      = $_GET['no_seat_need'];
$user_id    = $_SESSION["user_id"];
    
    $_SESSION["start_from"]=$start_from;  
    $_SESSION["destination"]=$destination;
    $_SESSION["date"]=$date;
    $_SESSION["no_seat_need"]=$no_seat_need;
  
    /*`start_from` LIKE '$start_from' or*/
       $sql1    = "SELECT * FROM `offer_ride` WHERE  `destination` LIKE '$destination' and `no_seat_avail` >='$no_seat_need' and `date` LIKE '$date' ";
           
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


echo"<form action='ride_search-insert.php?x=".$row1['offer_id']."' method='post'>";
            echo"<tbody>";
            echo "<tr>";
            echo "<td><a id='name_link' href='profile_view.php?link=".$row1['user_id']."'>".$row2['first_name']. "&nbsp&nbsp".$row2['last_name']."</a></td>";
                                
                             
            
            echo "<td>".$row1['start_from']."</td>";
            echo "<td>".$row1['destination']."</td>";
            echo "<td>".$row1['departure_time']."</td>";
            echo "<td>".$row1['dista']."</td>";  
                            
                                $sql3= "SELECT  duration FROM `distance` WHERE `start_from` LIKE '$start_from' and `destination` LIKE '$destination' ";
            $result3 = mysqli_query($conn, $sql3);
            $row3  = mysqli_fetch_array($result3);
                                
                                $sql4= "SELECT  distance FROM `distance` WHERE `start_from` LIKE '$start_from' and `destination` LIKE '$destination' ";
            $result4 = mysqli_query($conn, $sql4);
            $row4  = mysqli_fetch_array($result4);

    $_SESSION["distance"]=$row4['distance'];
    $duration=$row3['duration'];
    $rduration=$row1['duration'];
                       
       
                                
  $rdur=explode(":",$rduration);
  $dur=explode(":",$duration);

  $hours=$rdur[0]-$dur[0];
  $minutes=$rdur[1]-$dur[1];
  $seconds=$rdur[2]-$dur[2];
                                
  
  if($minutes > 59){
    $minutes=$minutes-60;
    $hours++;
  }

  if($minutes < 10){
    $minutes = "0".$minutes;
  }

  if($minutes == 0){
    $minutes = "00";
  }

  $pickup_time=$hours.":".$minutes.":".$seconds;

            echo "<td>".$pickup_time."</td>";            
                                
                                
                                $_SESSION["pickup_time"]=$pickup_time;

                                $rdeparture_time=$row1['departure_time'];
                                
                                                                
  $rdur=explode(":",$rduration);
  $rdep=explode(":",$rdeparture_time);

  $hours=$rdur[0]+$rdep[0];
  $minutes=$rdur[1]+$rdep[1];
  $seconds=$rdur[2]+$rdep[2];
                                
                  

  if($minutes > 59){
    $minutes=$minutes-60;
    $hours++;
  }

  if($minutes < 10){
    $minutes = "0".$minutes;
  }

  if($minutes == 0){
    $minutes = "00";
  }

  $arrival_time=$hours.":".$minutes.":".$seconds;

                                
                                $_SESSION["arrival_time"]=$arrival_time;
                                
            echo "<td>".$arrival_time."</td>"; 
                                
            echo "<td>".$row1['date']."</td>";            

                                
            echo "<td>".$row1['no_seat_avail']."</td>";

echo "<td>".$row1['car_id']."</td>";
echo "<td>".$row1['car_model']."</td>";
            echo "<td> <input type=submit name=request value=Request></td>";
            echo "</tr>";
            echo"<tr>";
            echo"<th align='left' font='bold'>Route</th>";
            echo "<td align='left' colspan='12'>".$row1['route']."</td>";
            echo"</tr>";
            echo"</tbody>";
            
            }
                }
    }

                ?>
                </form>
            </table>

        </div>
    </div>
        </div>
</body>
</html>                                		                            
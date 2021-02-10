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

    <link rel='stylesheet' type='text/css' href='rideoffered-style.css'>
        </head>
    <body>
    
<div>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Ride <b>Offered</b></h2>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>From</th>
						<th>To</th>
						<th>Date</th>
                        <th>Time</th>
                        <th>Number of Seats Avail.</th>
                        <th>Reg. No</th>
                        <th>Model</th>
                    </tr>
                </thead>
                <?php
                
                if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}

                
                
                $user_id    = $_SESSION["user_id"];

$result1=mysqli_query($conn," select * from offer_ride where user_id='".$user_id."' ");
		while($row1=mysqli_fetch_array($result1))
			{
            echo"<tbody>";
			echo "<tr>";
			echo "<td>".$row1['start_from']."</td>";
			echo "<td>".$row1['destination']."</td>";			
            echo "<td>".$row1['date']."</td>";            
			echo "<td>".$row1['departure_time']."</td>";
			echo "<td>".$row1['no_seat_avail']."</td>";
echo "<td>".$row1['car_id']."</td>";
echo "<td>".$row1['car_model']."</td>";
            echo "</tr>";
            echo"<tr>";
            echo"<th align='left' font='bold'>Route</th>";
            echo "<td align='left' colspan='8'>".$row1['route']."</td>";
            echo"</tr>";
            echo"</tbody>";
			}
                ?>
                
            </table>

        </div>
    </div>
        </div>
</body>
</html>                                		                            
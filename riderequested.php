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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href='riderequested-style.css'>
        </head>
    <body>
    

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Ride <b>Requested</b></h2>
					</div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Requested Too</th>
                        <th>From</th>
						<th>To</th>
                        <th>Date</th>
                        <th>Number of Seat Needed</th>
                        <th>Amount payable</th>
                        <th>Request Status</th>
                    </tr>
                </thead>
                <?php
                
                if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}

                
                    $user_id    = $_SESSION["user_id"];

$result1=mysqli_query($conn," select * from request_ride where user_id='".$user_id."' ");
		while($row1=mysqli_fetch_array($result1))
			{
            $result2=mysqli_query($conn," select * from offer_ride where offer_id='".$row1['requested_too']."' ");
            		while($row2=mysqli_fetch_array($result2))
			{
             
            $result3=mysqli_query($conn," select * from registeration where user_id='".$row2['user_id']."' ");
            		while($row3=mysqli_fetch_array($result3))
			{
            echo"<tbody>";
			echo "<tr>";
            echo "<td><a id='name_link' href='profile_rate.php?link=".$row2['user_id']."'>".$row3['first_name']. "&nbsp&nbsp".$row3['last_name']."</a></td>";        
			echo "<td>".$row1['start_from']."</td>";
			echo "<td>".$row1['destination']."</td>";
			echo "<td>".$row1['date']."</td>";
            echo "<td>".$row1['no_seat_need']."</td>";
            echo "<td>".$row1['amount']."</td>";
                        
            echo "<td>".$row1['confirmation_status']."</td>";
            echo "</tr>";
            echo"</tbody>";
			}
                }
        }
                ?>
                
            </table>

        </div>
    </div>
</body>
</html>                                		                            
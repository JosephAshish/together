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
                    <h2>Request <b>Received</b></h2>
                </div>

            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Number of Seats Needed.</th>
                    <th>Confirm Request</th>
                </tr>
            </thead>
            <?php
            
            if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}

            
                $user_id    = $_SESSION["user_id"];
            
            
            
        $result3=mysqli_query($conn," select * from offer_ride where user_id='".$user_id."' ");
        while($row3=mysqli_fetch_array($result3))
        {  
            $offer_id=$row3['offer_id'];
            
            /*$result4=mysqli_query($conn," select * from request_ride where requested_too='".$offer_id."' AND confirmation_status LIKE 'requested'");
        while($row4=mysqli_fetch_array($result4))
        
        
        $result1=mysqli_query($conn," select * from request_ride where requested_too='".$user_id."' AND confirmation_status LIKE 'requested'");
        {*/
            
            
            
        $result1=mysqli_query($conn," select * from request_ride where requested_too='".$offer_id."' AND confirmation_status LIKE 'requested'");
        while($row1=mysqli_fetch_array($result1))
        {
        $received_from=$row1['user_id'];
            
        $result2=mysqli_query($conn," select * from registeration where user_id='".$received_from."' ");
        while($row2=mysqli_fetch_array($result2))
        {
echo"<form action='request_confirm.php?x=".$row1['request_id']."' method='post'>";
        echo"<tbody>";
        echo "<tr>";
        echo "<td><a id='name_link' href='profile_rate.php?link=".$row1['user_id']."'>".$row2['first_name']. "&nbsp&nbsp".$row2['last_name']."</a></td>";
        echo "<td>".$row1['start_from']."</td>";
        echo "<td>".$row1['destination']."</td>";
        echo "<td>".$row1['date']."</td>";
        echo "<td>".$row1['no_seat_need']."</td>";
        echo "<td> <input type=submit name=confirm value=Confirm></td>";
        echo "</tr>";
        echo"</tbody>";
        echo"</form>";
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
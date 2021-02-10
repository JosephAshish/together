 <?php
     include("db.php");
    include("user_menu.php");
date_default_timezone_set('Asia/Calcutta');
$dt = new DateTime();

/*
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
6964e2    */

    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' type='text/css' href='bill.css'>

        </head>
    <body>
        
       <?php
        if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}

?>
            <div class="invoice-container">
           
                <div class="img-container">
                    <p style="position:absolute;color:#E8E6FF;top:15px;left:25px;font-family: sans-serif;font-size:12px;"><b>INVOICE</b></p>
                    
                    <div class="billlogo">
                <a href="index.php"><img src="logo.png" width="60" height="40"></a>
            </div>
                                <div class="bill-name">
                <h4>2gether</h4>

            </div>
                    <div class="invoice-text">
                        <p>Date: <?php
                            echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    echo $dt->format('d-m-Y');
                            
                ?>
                            <pre></pre>Time: <?php
                            echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                    echo $dt->format('H:i:s');
                            
                ?>
                            
                        <!-- <pre></pre>Invoice NO: -->
                        
                    </p>
                    
                    
                    
                    <br>
                    <p>Invoice To</p> 
                    <?php
                    $user_id    = $_SESSION["user_id"];
                    $sql="SELECT * FROM `registeration` WHERE `user_id`='$user_id'";
                    $result = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_array($result))
            {
                    $first_name=$row['first_name'];
                $last_name=$row['last_name'];
            }
                    ?>
                    <p><?php echo"$first_name  $last_name";?></p>
                    <br><br>
                    
                        <?php
                    $user_id    = $_SESSION["user_id"];
                    $sql1="SELECT * FROM `request_ride` WHERE `user_id`='$user_id'";
                    $result1 = mysqli_query($conn, $sql1);
            while($row1=mysqli_fetch_array($result1))
            {
                    $start_from=$row1['start_from'];
                $destination=$row1['destination'];
            }
                    ?>
                    <p><?php echo"$start_from   to   $destination";?></p>
                    
                    <br><br><br><br>
                    
                    <p style="color:black;"><b>Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total
                        </b>
                    </p>
                    <br>
                    <p style="color:black;">
                        Distance (Km) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["distance"];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $dist=$_SESSION["distance"];
                        $distm=$dist*5;
                        echo "$distm";?> &nbsp;&nbsp;&nbsp;&nbsp;x
                    </p>
                    
                    <p style="color:black;">
                        Seats &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["no_seat_need"];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["no_seat_need"];?>
                    </p>
                    
                    <br><br><br><br>
                    <h1><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        ₹ <?php $amt=$distm*$_SESSION["no_seat_need"];
                        echo "$amt";?>
                    </b>
                    </h1>
                    
                       </div>
                </div>
              
        </div>          
       

        </body>
</html>
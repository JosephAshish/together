            <?php
            include("db.php");



            ?>
            <!DOCTYPE html>
            <html>
            <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel='stylesheet' type='text/css' href='users.css'>
            </head>
            <body>

            <div class="main-container">

            <div class="adminlogo">
            <a href="adminlogin.php"><img src="logo.png" width="90" height="60"></a>
            </div>

            <div class="adminname">
            <h2><b><a id="adminlogolink" href="adminlogin.php">2gether</a></b></h2>

            </div>

            <div class="logout">
                <a id="menulink" href="http://localhost/together/together/adminlogout.php"><span class="fa fa-sign-out"style="color:wheat;font-size:20px;"></span> <b>Logout</b></a>
            </div>
            <div class="menu">
            <b><a id="menulink" href="users.php">Users</a></b><br><br>
            <b><a id="menulink" href="offers.php">Offers</a></b><br><br>
            <b><a id="menulink" href="requests.php">Requests</a></b><br><br>
            <b><a id="menulink" href="report.php">Report</a></b><br><br>
            </div>
            </div>


            <div>
            <div class="container">
            <div class="table-wrapper">
            <div class="table-title">
            <div class="row">
            <div class="col-sm-6">
            <h2><b>Users</b></h2>
            </div>

            </div>
            </div>
            <table class="table table-striped table-hover">
            <thead>
            <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Geder</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Rating</th>
            <th>Delete User</th>
            </tr>
            </thead>
            <?php

            if(!isset($_SESSION["admin_id"]))
            {
            header("location:index.php?logedin=You are not logged in !");
            }

            $admin_id    = $_SESSION["admin_id"];

            $result3=mysqli_query($conn," select * from registeration ");
            while($row3=mysqli_fetch_array($result3))
            {  


            echo"<form action='delete_user.php?x=".$row3['user_id']."' method='post'>";
            echo"<tbody>";
            echo "<tr>";
            echo "<td>".$row3['first_name']. "&nbsp&nbsp".$row3['last_name']."</td>";
            echo "<td>".$row3['dob']."</td>";
            echo "<td>".$row3['gender']."</td>";
            echo "<td>".$row3['email']."</td>";
            echo "<td>".$row3['phone_no']."</td>";
            echo "<td>".$row3['rating']."</td>";
            echo "<td> <input type=submit name=delete value=Delete User></td>";
            echo "</tr>";
            echo"</tbody>";
            echo"</form>";
            }
            ?>

            </table>

            </div>
            </div>
            </div>
            </body>
            </html>

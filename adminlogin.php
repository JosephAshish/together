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

    <link rel='stylesheet' type='text/css' href='adminlogin.css'>
        </head>
    <body>
    <div class="login-container">
        
        <div class="adminlogo">
                <a href="adminlogin.php"><img src="logo.png" width="90" height="60"></a>
            </div>

            <div class="adminname">
                <h2><b><a id="adminlogolink" href="adminlogin.php">2gether</a></b></h2>

            </div>
        
   <div class="icon">
            <a id="menulink" href="http://localhost/together/together/adminlogin.php"><span class="fa fa-user"style="color:#C55757;font-size:100px;"></span></a>
        </div>
            <div class="login">

                <h3><b>Admin</b></h3>
            </div>
        

            <form action="adminlogin-check.php" method="get">
                <div class="form-style-agile">

<h5 class="login";><?php echo @$_GET["success"]; ?></h5>
<h5 class="login";><?php echo @$_GET["invalid"];?></h5>
<h5 class="login";><?php echo @$_GET["logout"]; ?></h5>
<h5 class="login";><?php echo @$_GET["logedin"]; ?></h5>
                    <input placeholder="Phone Number" name="number" type="text" required="" pattern="[0-9]{10}">
                    <br>
                    <input placeholder="Password (Min 8 Char.)" name="password" type="password" required="" minlength="8">
                    <br> 
                  <button class="login-btn btn">Login</button>
                    <br>

                </div>

            </form>
    
        </div>
       </body>
</html>

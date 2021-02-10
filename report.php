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
            <div class="report_container">
                
            <form action="report_generate.php"  method="post" >
                <h4 style="color:white;">From
<input style="color:black;" placeholder="Date (YYYY_MM_DD)" name="frm" type="date" id="date" required="">
            &nbsp;&nbsp;    To 
                    <input style="color:black;" placeholder="Date (YYYY_MM_DD)" name="to" type="date" id="date" required="">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                <select style="color:black;"  name="option" type="text" required="">
        <option value="" selected disabled hidden>Offer or Request</option>
        <option value="offer_ride">Offers</option>
        <option value="request_ride">Requests</option>
        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                <select style="color:black;"  name="place" type="text" required="">
        <option value="" selected disabled hidden>Place</option>
        <option value="muttom thaikkavu">muttom thaikkavu</option>
        <option value="ambatikavu">ambatikavu</option>
        <option value="garage">garage</option>
        <option value="pulinchodu">pulinchodu</option>
        <option value="aluva">aluva</option>
        <option value="scms">scms</option>
        <option value="premier">premier</option>
        <option value="hmt">hmt</option>
        <option value="cusat">cusat</option>
        <option value="pathadipalam">pathadipalam</option>
        <option value="edappally">edappally</option>
        <option value="high school">high school</option>
        <option value="palarivattom">palarivattom</option>
        <option value="kaloor stadium">kaloor stadium</option>
        
        <option value="kaloor bus stop">kaloor bus stop</option>
        </select>
                     &nbsp;&nbsp;&nbsp;&nbsp;
                <input style="color:black;" type="submit" name="view" value="View">
                </h4>
                </form>
            </div>
            
              
            </div>
            </body>
            </html>

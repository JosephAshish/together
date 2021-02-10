<?php
 include("db.php");
include("user_menu.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='offer_ride.css'>

</head>
<body>
    
    <?php
if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}
?>
    
<div class="container">

<div class="offerride">
<h2>Offer Ride</h2>
</div>
            <form action="offer_ride-insert.php" method="get">
                <div class="input-container">

        <br>
                    <select placeholder="From" id="txtSource" name="start_from"  required="">
        <option value="" selected disabled hidden>From</option>
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
                    <br>
        <select placeholder="Destination" id="txtDestination" name="destination"  required="">
        <option value="" selected disabled hidden>Destination</option>
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
                    <br>
                    <input placeholder="Route" name="route" type="text" id="route" required="">
                    <br>
                    <input placeholder="Date (YYYY_MM_DD)" name="date" type="date" id="date" required="">
                    <br>
                    <input placeholder="Departure Time" id="d_time" name="departure_time" type="time" required="">
                    <br>
                    <input placeholder="Number of Seats Avail." id="no_seat_avail" name="no_seat_avail" type="number" required="" max=4 min=1>
                    <br>
                    <input placeholder="Car Number" id="car_id" name="car_id" type="text" required="">
                    <br>
                    <input placeholder="Car Model" id="car_model" name="car_model" type="text" required="">
                    <br> 
                  <input type="submit" id="button" value="Offer Ride" />

                </div>

            </form>
</div>
            <div id="dvDistance">
               
        </div>
</body>
</html>



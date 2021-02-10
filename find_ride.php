    <?php
     include("db.php");
    include("user_menu.php");
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' href='find_ride.css'>

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
    <h2>Find Ride</h2>
    </div>
                <form action="ride_search.php" method="get">
                    <div class="form-style-agile">
    <br><br>


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
                        <input placeholder="Date (YYYY_MM_DD)" name="date" type="date" required="">
                        <br>
                        <input placeholder="Number of Seats needed." name="no_seat_need" type="number" required="" max=4 min=1>
                        <br>
                      <button class="book-btn btn">Find Ride</button>
                        <br>

                     </div>

                </form>
            </div>
  
    </body>
    </html>

<?php

include("db.php");
?>
<?php
$confirmed_requestof=$_GET['x'];


        $sql    = "UPDATE request_ride SET confirmation_status = 'confirmed' WHERE request_id = $confirmed_requestof";
        $result = mysqli_query($conn, $sql);
 
        $sql1    = "SELECT * FROM `request_ride` where `request_id` = '$confirmed_requestof' ";
        $result1 = mysqli_query($conn, $sql1);
        while($row1=mysqli_fetch_array($result1))
        {   $no_seat_need=$row1['no_seat_need'];
            $requested_too=$row1['requested_too'];
        
         
         $sql2    = "SELECT * FROM `offer_ride` where `offer_id` = '$requested_too' ";
        $result2 = mysqli_query($conn, $sql2);
         while($row2=mysqli_fetch_array($result2))
        {   
             $no_seat_avail=$row2['no_seat_avail'];
         
         $seat=$no_seat_avail-$no_seat_need;
        $sql3    = "UPDATE offer_ride SET no_seat_avail = '$seat' WHERE offer_id = $requested_too";
        $result3 = mysqli_query($conn, $sql3);
        
         
        
        }
        }

        if ($result3)
           {

                header("location: profile.php");
                        header("location:profile.php?success=login ok");
            
            

     
}
?>
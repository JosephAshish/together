<?php 
 include("db.php");

?>
<html>
<?php
$user_id=$_GET['rate'];
$rating=$_POST['rating'];

$sql0 = "SELECT * FROM `registeration` WHERE `user_id` = '$user_id'";
$result0=mysqli_query($conn, $sql0);
while($row0=mysqli_fetch_array($result0))
{
    $previous=$row0['rating'];
    $rating=(($previous+$rating)/5)*5;
}
if($rating>5)
    $rating=5;
    
$sql = "UPDATE `registeration` SET `rating` = '$rating' WHERE `user_id` = '$user_id'";
$result=mysqli_query($conn, $sql);

if($result)
  header("location:requestreceived.php?");

?>
</html>

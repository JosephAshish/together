<?php 
 include("db.php");

?>
<html>
<?php
$first_name=$_GET['first_name'];
$last_name=$_GET['last_name'];
$dob=$_GET['dob'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$phone_no=$_GET['phone_no'];
$passwordue=$_GET['password'];
$password=md5($passwordue);
$sql = "UPDATE `registeration` SET `first_name` = '$first_name',`last_name` = '$last_name',`dob` = '$dob',`gender` = '$gender',`password` = '$password',`email` = '$email',`phone_no` = '$phone_no' WHERE `registeration`.`user_id` = $_SESSION[user_id]";
mysqli_query($conn, $sql);
  header("location:profile.php?");

?>
</html>

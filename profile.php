<?php 
 include("db.php");
 include("user_menu.php");



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='profile_style.css'>

</head>

<body>
<div class="profile-container">

<b>
<?php
if(!isset($_SESSION["user_id"]))
{
 header("location:index.php?logedin=You are not logged in !");
}


$user_id=$_SESSION["user_id"];

$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");

while($check=mysqli_fetch_array($result))
{
echo"Hello... ";
echo $check['first_name'];
echo"&nbsp";
echo $check['last_name'];

}
?>
</b>
<br><br><br>
<span class="fa fa-child"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Born on:  ";
echo $check['dob'];
echo"<br><br>";
}
?>

<br>
<span class="fa fa-intersex"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Gender:  ";
echo $check['gender'];
echo"<br><br>";
}
?>

<br>
<span class="fa fa-envelope"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"e-Mail ID:  ";
echo $check['email'];
echo"<br><br>";
}
?>

<br>
<span class="fa fa-phone"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Phone Number:  ";
echo $check['phone_no'];
echo"<br><br>";
}
?>

<br>
<span class="fa fa-star"style="color:#ffdf00;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Rating:  ";
echo $check['rating'];
echo"<br><br>";
}
?>
    <br>

<a id="deactivate" href='deactivate.php?user_id=<?php echo $user_id ?>'>Deactivate Account</a>


</div>

   
</body>
</html> 

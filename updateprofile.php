<?php 
 include("db.php");
 include("user_menu.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='updateprofile.css'>

</head>

<body>
<div class="container">

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
<br><br>

<br>
<form action="update.php" method="get">

<span class="fa fa-user"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"First Name:  ";
echo "<input type='text' id='first_name' name='first_name' value='$check[first_name]' required>";
echo"<br>";
echo"Last Name:  ";
echo "<input type='text' id='last_name' name='last_name' value='$check[last_name]' required>";
echo"<br><br>";
}
?>

<br>
<span class="fa fa-child"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Born on:  ";
echo "<input type='date' id='dob' name='dob' value='$check[dob]' required>";
echo"<br><br>";
}
?>

<br>
<span class="fa fa-intersex"style="color:black;font-size:24px;"></span>
 

&nbsp
Gender: 
<div class="select">
<select name="gender" id="gender">
<option value="" selected disabled hidden>Gender</option>
<option value="female">female</option>
<option value="male">Male</option>
</select>
</div>

<span class="fa fa-envelope"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"e-Mail ID:  ";
echo "<input type='text' id='email' name='email' value='$check[email]' required>";
}
?>

<br><br><br>
<span class="fa fa-phone"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Phone Number:  ";
echo "<input type='number' id='phone_no' name='phone_no' value='$check[phone_no]' required>";
}
?>

<br><br><br>
<span class="fa fa-key"style="color:black;font-size:24px;"></span>
<?php
$result=mysqli_query($conn," select * from registeration where user_id='".$user_id."' ");
while($check=mysqli_fetch_array($result))
{
echo"&nbsp";
echo"Password:  ";
echo "<input type='password' id='password' name='password'  required>";
}
?>
<br><br><br><br>
<button class="update-btn btn">Update</button>
</form>

</div>

   
</body>
</html> 

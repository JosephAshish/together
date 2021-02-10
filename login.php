
<?php

 
 include("db.php");
 session_start();
$phno=$_GET['number'];
$passue=$_GET['password'];
$pass=md5($passue);
$sql="select * from registeration where phone_no='$phno' AND password='$pass'";
$result=mysqli_query($conn,$sql);

$check=mysqli_fetch_array($result);
if($result)
{
                   if($check['phone_no']==$phno )
 			{
 				if($check['password']==$pass)
					{
						$_SESSION["user_id"]=$check['user_id'];
						header("location: profile.php");
						header("location:profile.php?success=login ok");
					}


			 }	
                    else           
			{ 	
                          header("location:index.php?invalid=Invalid Username or Password");

                                
  				
			}
	

	
}


?>


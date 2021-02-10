
<?php

 
 include("db.php");
 session_start();
$phno=$_GET['number'];
$pass=$_GET['password'];

$sql="select * from admin where phone='$phno' AND password='$pass'";
$result=mysqli_query($conn,$sql);

$check=mysqli_fetch_array($result);
if($result)
{
                   if($check['phone']==$phno )
 			{
 				if($check['password']==$pass)
					{
						$_SESSION["admin_id"]=$check['admin_id'];
						
						header("location:users.php?success=login ok");
					}


			 }	
                    else           
			{ 	
                          header("location:adminlogin.php?invalid=Invalid Username or Password");

                                
  				
			}
	

	
}


?>


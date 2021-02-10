<?php

include("db.php");
?>
<?php
$first_name = $_GET['first_name'];
$last_name  = $_GET['last_name'];
$dob        = $_GET['dob'];
$gender     = $_GET['gender'];
$email      = $_GET['email'];
$phone_no   = $_GET['phone_no'];
$passwordue   = $_GET['password'];
$password      =md5($passwordue);
$sql    = "select * from registeration where phone_no='$phone_no' ";
$result = mysqli_query($conn, $sql);
$check  = mysqli_fetch_array($result);

if ($result) 
   {
    
    if ($check['phone_no'] == $phone_no)
       {
        if ($check['password'] == $password)
           {
            $_SESSION["user_id"] = $check['user_id'];
            header("location: profile.php");
            header("location:profile.php?success=login ok");
           }
        
        else
           {
            
            header("location:index.php#login?invalid=user already exits");
           }
        
       }

    else
       {

        $sql    = "INSERT INTO `registeration` (`user_id`,`first_name`, `last_name`, `dob`, `gender`, `password`, `email`, `phone_no`) VALUES (NULL, '$first_name', '$last_name', '$dob', '$gender', '$password', '$email', '$phone_no')";
        $result = mysqli_query($conn, $sql);
       

        if ($result)
           {
            $sql    = "select * from registeration where phone_no='$phone_no' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            $check  = mysqli_fetch_array($result);
            
            
            
            if ($result)
               {
                if ($check['phone_no'] == $phone_no)
                   {
                    if ($check['password'] == $password)
                       {
                        session_start();
                        $_SESSION["user_id"] = $check['user_id'];
                        header("location: profile.php");
                        header("location:profile.php?success=login ok");
                       }
                   }
                }
              }
 
}    
    
}
?>
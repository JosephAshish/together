        <?php
        include("db.php");
        ?>
<?php
        $user_id=$_GET['user_id'];
echo"$user_id";
$sql    = "DELETE FROM `registeration` WHERE `user_id`='$user_id'";
        
        $result = mysqli_query($conn, $sql);
   if ($result)
    {
 header("location:index.php?logedin=You are not logged in !");
    }
?>
s

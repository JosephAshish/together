<?php
session_start();
session_unset();
session_destroy();
if(!$_SESSION["user_id"])
{
  header("location:index.php#login?logedin=You are not logged in !");
}

?>
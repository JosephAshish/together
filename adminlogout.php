<?php
session_start();
session_unset();
session_destroy();
if(!$_SESSION["admin_id"])
{
  header("location:adminlogin.php?logedin=You are not logged in !");
}

?>
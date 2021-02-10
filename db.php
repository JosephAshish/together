<?php
$username = 'root';
$password = '';
$db = 'together';
 session_start();
// Create connection
$conn = mysqli_connect('localhost', $username, $password, $db);
// Check connection
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
?>
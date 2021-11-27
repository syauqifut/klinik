<?php
// Create database connection using config file
// include_once("config.php");
 include_once('config/config.php');
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM usertype");
?>
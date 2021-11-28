<?php
include_once('config/config.php');
 
$query = "SELECT * FROM usertype";
$result = mysqli_query($mysqli, $query);

$query1 = "SELECT CONCAT(kode, ' - ', nama) as nama, id FROM wilayah ORDER BY kode";
$result1 = mysqli_query($mysqli, $query1);
?>
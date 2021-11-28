<?php
include_once('config/config.php');

$query = "SELECT CONCAT(kode, ' - ', nama) as nama, id FROM wilayah ORDER BY kode";
$result = mysqli_query($mysqli, $query);

?>
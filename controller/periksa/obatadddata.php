<?php
include_once('config/config.php');

$query = "SELECT id, CONCAT(jenis, ' - ', nama, ' - Rp. ', harga) as nama, harga FROM obat ORDER BY jenis";
$result = mysqli_query($mysqli, $query);

?>
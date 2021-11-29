<?php
include_once('config/config.php');
 
$id = $_SESSION['id'];

$query = "SELECT perawat.nama as perawat, periksa.* FROM periksa 
        JOIN user perawat ON periksa.pegawai_id = perawat.id
        WHERE periksa.pasien_id = $id
        AND periksa.status = 'pembayaran'
        GROUP BY periksa.id";
$result = mysqli_query($mysqli, $query);

?>
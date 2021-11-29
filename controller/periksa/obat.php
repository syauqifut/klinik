<?php
include_once('config/config.php');

$id = $_GET['id'];

$query = "SELECT * FROM periksa_obat 
        JOIN obat ON periksa_obat.obat_id = obat.id
        WHERE periksa_obat.periksa_id = $id";
$result = mysqli_query($mysqli, $query);

?>
<?php
include_once('config/config.php');

$id = $_GET['id'];

$query = "SELECT * FROM periksa_tindakan 
        JOIN tindakan ON periksa_tindakan.tindakan_id = tindakan.id
        WHERE periksa_tindakan.periksa_id = $id";
$result = mysqli_query($mysqli, $query);

?>
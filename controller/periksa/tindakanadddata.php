<?php
include_once('config/config.php');

$query = "SELECT id, CONCAT(nama, ' - Rp. ', harga) as nama FROM tindakan ORDER BY nama";
$result = mysqli_query($mysqli, $query);

?>
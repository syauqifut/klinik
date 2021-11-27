<?php
include('config/config.php');

$id = $_GET['id'];
 
$query = "SELECT * FROM wilayah WHERE id=$id";
$result = mysqli_query($mysqli, $query);
 
while($data = mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $kode = $data['kode'];
}
?>
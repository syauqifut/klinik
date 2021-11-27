<?php
include('config/config.php');

$id = $_GET['id'];
 
$query = "SELECT * FROM obat WHERE id=$id";
$result = mysqli_query($mysqli, $query);
 
while($data = mysqli_fetch_array($result))
{
    $nama = $data['nama'];
    $harga = $data['harga'];
    $jenis = $data['jenis'];
    $keterangan = $data['keterangan'];
}
?>
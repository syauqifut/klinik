<?php
include('config/config.php');

$id = $_GET['id'];
 
$query = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($mysqli, $query);
 
$query1 = "SELECT * FROM usertype";
$result1 = mysqli_query($mysqli, $query1);

$query2 = "SELECT CONCAT(kode, ' - ', nama) as nama, id FROM wilayah ORDER BY kode";
$result2 = mysqli_query($mysqli, $query2);

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $username = $user_data['username'];
    $email = $user_data['email'];
    $nomor = $user_data['nomor'];
    $usertype_id = $user_data['usertype_id'];
    $wilayah_id = $user_data['wilayah_id'];
}

?>
<?php
include('config/config.php');

$id = $_GET['id'];
 
$query = "SELECT * FROM usertype WHERE id=$id";
$result = mysqli_query($mysqli, $query);
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
}
?>
<?php
// Display selected user data based on id
// Getting id from url
 include('config/config.php');
 $id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM usertype WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
}
?>
<?php
include_once('config/config.php');
 
$query = "SELECT user.id, user.nama, usertype.nama AS type, user.* FROM user INNER JOIN usertype ON user.usertype_id=usertype.id ORDER BY user.usertype_id, user.nama";
$result = mysqli_query($mysqli, $query);
?>
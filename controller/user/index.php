<?php
include_once('config/config.php');
 
$query = "SELECT u.id, u.nama, u.kode, t.nama AS type, w.nama AS wilayah, u.* 
        FROM user u
        LEFT JOIN usertype t ON u.usertype_id=t.id 
        LEFT JOIN wilayah w ON u.wilayah_id=w.id 
        ORDER BY u.usertype_id, u.nama";
$result = mysqli_query($mysqli, $query);
?>
<?php
include_once("../../config/config.php");
session_start();
$id = $_GET['id'];
$userid = $_SESSION['id'];

$query = "UPDATE periksa SET pegawai_id='$userid' WHERE id='$id'";
$result = mysqli_query($mysqli, $query);
// var_dump($userid);
$message = 'Edit status successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/periksalist';
    </script>
";
?>
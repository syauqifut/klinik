<?php
include_once("../../config/config.php");

$id = $_GET['id'];

$query = "DELETE FROM wilayah WHERE id=$id";
$result = mysqli_query($mysqli, $query);

$message = 'Wilayah deleted successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/wilayah';
    </script>
";
?>
<?php
include_once("../../config/config.php");

$id = $_GET['id'];

$query = "DELETE FROM obat WHERE id=$id";
$result = mysqli_query($mysqli, $query);

$message = 'Obat deleted successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/obat';
    </script>
";
?>
<?php
include_once("../../config/config.php");

$id = $_GET['id'];

$query = "DELETE FROM tindakan WHERE id=$id";
$result = mysqli_query($mysqli, $query);

$message = 'Tindakan deleted successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/tindakan';
    </script>
";
?>
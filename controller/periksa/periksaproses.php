<?php
include_once("../../config/config.php");

$id = $_GET['id'];

$query = "UPDATE periksa SET status='proses' WHERE id='$id'";
$result = mysqli_query($mysqli, $query);

$message = 'Edit status successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/periksalist';
    </script>
";
?>
<?php
include_once("../../config/config.php");

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id=$id";
$result = mysqli_query($mysqli, $query);

$message = 'User deleted successfully';

echo "
    <script>
        alert('$message');
        window.location.href='/klinik/user';
    </script>
";
?>
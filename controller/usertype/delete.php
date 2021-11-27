<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM usertype WHERE id=$id");
 
$message = 'User deleted successfully';

    echo "
    <script>
    alert('$message');
    window.location.href='/klinik/usertype';
    </script>
    ";
?>
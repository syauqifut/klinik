<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $query = "UPDATE usertype SET nama='$nama' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'User updated successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/usertype';
        </script>
    ";
}
?>
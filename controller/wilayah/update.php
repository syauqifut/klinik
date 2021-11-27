<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];

    $query = "UPDATE wilayah SET nama='$nama', kode='$kode' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'Wilayah updated successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/wilayah';
        </script>
    ";
}
?>
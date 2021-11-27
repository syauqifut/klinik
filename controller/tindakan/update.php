<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE tindakan SET nama='$nama', harga='$harga', keterangan='$keterangan' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'Tindakan updated successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/tindakan';
        </script>
    ";
}
?>
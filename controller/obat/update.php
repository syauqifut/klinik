<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE obat SET nama='$nama', jenis='$jenis', harga='$harga', keterangan='$keterangan' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'Obat updated successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/obat';
        </script>
    ";
}
?>
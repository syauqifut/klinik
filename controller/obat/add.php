<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO obat (nama, jenis, harga, keterangan) VALUES('$nama', '$jenis', '$harga', '$keterangan')";
    $result = mysqli_query($mysqli, $query);

    $message = 'Obat added successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/obat';
        </script>
    ";
}
?>

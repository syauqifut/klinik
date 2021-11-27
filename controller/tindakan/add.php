<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO tindakan (nama, harga, keterangan) VALUES('$nama', '$harga', '$keterangan')";
    $result = mysqli_query($mysqli, $query);

    $message = 'Tindakan added successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/tindakan';
        </script>
    ";
}
?>

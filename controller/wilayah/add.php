<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];

    $query = "INSERT INTO wilayah (nama, kode) VALUES('$nama', '$kode')";
    $result = mysqli_query($mysqli, $query);

    $message = 'Wilayah added successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/wilayah';
        </script>
    ";
}
?>

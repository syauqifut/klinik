<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $id         = $_POST['id'];
    $pembayaran = $_POST['pembayaran'];
    $tanggal    = $_POST['tanggal'];

    $query = "UPDATE periksa SET pembayaran='$pembayaran', tglbayar='$tanggal', status='verifikasi' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    $message = 'Periksa selesai successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/transaksi';
        </script>
    ";
}
?>
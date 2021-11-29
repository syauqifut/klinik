<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $harga = $_POST['harga'];

    $cek_periksa = $mysqli->query("SELECT * FROM periksa WHERE id=$id");
    $ktm_periksa = $cek_periksa->num_rows;
    $data_periksa = $cek_periksa->fetch_assoc();
    $hargaperiksa = $data_periksa['totalharga'];

    $totalharga = $hargaperiksa += $harga;

    $query1 = "UPDATE periksa SET totalharga='$totalharga', harga='$harga', status='pembayaran' WHERE id='$id'";
    $result1 = mysqli_query($mysqli, $query1);

    $message = 'Periksa selesai successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/periksalist';
        </script>
    ";
}
?>
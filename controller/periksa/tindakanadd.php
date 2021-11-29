<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $periksa_id  = $_POST['periksa_id'];
    $tindakan_id     = $_POST['tindakan_id'];

    $cek_tindakan = $mysqli->query("SELECT * FROM tindakan WHERE id=$tindakan_id");
    $ktm_tindakan = $cek_tindakan->num_rows;
    $data_tindakan = $cek_tindakan->fetch_assoc();
    $harga = $data_tindakan['harga'];

    $cek_periksa = $mysqli->query("SELECT * FROM periksa WHERE id=$periksa_id");
    $ktm_periksa = $cek_periksa->num_rows;
    $data_periksa = $cek_periksa->fetch_assoc();
    $hargaperiksa = $data_periksa['totalharga'];

    $totalharga = $hargaperiksa += $harga;

    $query = "INSERT INTO periksa_tindakan (periksa_id, tindakan_id, harga) VALUES('$periksa_id', '$tindakan_id', '$harga')";
    $result = mysqli_query($mysqli, $query);

    $query1 = "UPDATE periksa SET totalharga='$totalharga' WHERE id='$periksa_id'";
    $result1 = mysqli_query($mysqli, $query1);
    
    $message = 'Tambah tindakan successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/periksalisttindakan?id=$periksa_id';
        </script>
    ";
}
?>

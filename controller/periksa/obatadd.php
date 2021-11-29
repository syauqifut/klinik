<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $periksa_id  = $_POST['periksa_id'];
    $obat_id     = $_POST['obat_id'];

    $cek_obat = $mysqli->query("SELECT * FROM obat WHERE id=$obat_id");
    $ktm_obat = $cek_obat->num_rows;
    $data_obat = $cek_obat->fetch_assoc();
    $harga = $data_obat['harga'];
    
    $cek_periksa = $mysqli->query("SELECT * FROM periksa WHERE id=$periksa_id");
    $ktm_periksa = $cek_periksa->num_rows;
    $data_periksa = $cek_periksa->fetch_assoc();
    $hargaperiksa = $data_periksa['totalharga'];

    $totalharga = $hargaperiksa += $harga;

    $query = "INSERT INTO periksa_obat (periksa_id, obat_id, harga) VALUES('$periksa_id', '$obat_id', '$harga')";
    $result = mysqli_query($mysqli, $query);

    $query1 = "UPDATE periksa SET totalharga='$totalharga' WHERE id='$periksa_id'";
    $result1 = mysqli_query($mysqli, $query1);

    $message = 'Tambah obat successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/periksalistobat?id=$periksa_id';
        </script>
    ";
}
?>

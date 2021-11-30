<?php
include_once('config/config.php');
 
$id = $_SESSION['id'];
$todaysDate = date("Y-m-d"); 

$query = "SELECT * FROM periksa WHERE pasien_id = $id AND tanggal >= '" . $todaysDate ."' ORDER BY tanggal DESC";
$result = mysqli_query($mysqli, $query);


$query1 = "SELECT perawat.nama as perawat, periksa.* FROM periksa 
        JOIN user perawat ON periksa.pegawai_id = perawat.id
        LEFT JOIN periksa_obat ON periksa_obat.periksa_id = periksa.id
        LEFT JOIN periksa_tindakan ON periksa_tindakan.periksa_id = periksa.id
        WHERE periksa.pasien_id = $id
        GROUP BY periksa.id
        ORDER BY periksa.tanggal DESC";
$result1 = mysqli_query($mysqli, $query1);

$query2 = "SELECT pasien.nama as pasien, periksa.* FROM periksa 
        LEFT JOIN user pasien ON periksa.pasien_id = pasien.id
        LEFT JOIN periksa_obat ON periksa_obat.periksa_id = periksa.id
        LEFT JOIN periksa_tindakan ON periksa_tindakan.periksa_id = periksa.id
        WHERE periksa.pegawai_id = $id
        GROUP BY periksa.id
        ORDER BY periksa.tanggal DESC";
$result2 = mysqli_query($mysqli, $query2);

$query3 = "SELECT pasien.nama as pasien, perawat.nama as perawat, perawat.id as perawatid, periksa.* FROM periksa 
        LEFT JOIN user pasien ON periksa.pasien_id = pasien.id
        LEFT JOIN user perawat ON periksa.pegawai_id = perawat.id
        LEFT JOIN periksa_obat ON periksa_obat.periksa_id = periksa.id
        LEFT JOIN periksa_tindakan ON periksa_tindakan.periksa_id = periksa.id
        GROUP BY periksa.id
        ORDER BY periksa.tanggal DESC";
$result3 = mysqli_query($mysqli, $query3);
?>
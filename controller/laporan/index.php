<?php
include_once('config/config.php');

$querytngl      = "SELECT DATE_FORMAT(tanggal, '%d %M') as tanggal FROM periksa GROUP BY tanggal ORDER BY tanggal DESC LIMIT 5";
$tanggal        = mysqli_query($mysqli, $querytngl);

$queryprks      = "SELECT COUNT(id) as jumlahperiksa FROM periksa GROUP BY tanggal ORDER BY tanggal DESC";
$pemeriksaan    = mysqli_query($mysqli, $queryprks);

$querywlyh      = "SELECT * FROM wilayah ORDER BY kode ASC LIMIT 5";
$wilayah        = mysqli_query($mysqli, $querywlyh);

$querypsen      = "SELECT COUNT(user.id) as jumlahpasien FROM user
                JOIN wilayah ON user.wilayah_id = wilayah.id 
                WHERE user.usertype_id = 2 
                GROUP BY wilayah.id 
                ORDER BY wilayah.kode ASC
                LIMIT 5";
$pasien         = mysqli_query($mysqli, $querypsen);
// while ($data = mysqli_fetch_array($tanggal)) {
//     echo $data['tanggal'];
// }
?>
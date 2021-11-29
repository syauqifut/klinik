<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $pasien_id  = $_POST['pasien_id'];
    $tanggal    = $_POST['tanggal'];
    $status     = 'belum';

    $query = "INSERT INTO periksa (pasien_id, tanggal, status) VALUES('$pasien_id', '$tanggal', '$status')";
    $result = mysqli_query($mysqli, $query);

    $message = 'Register periksa successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/tindakan';
        </script>
    ";
}
?>

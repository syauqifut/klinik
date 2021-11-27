<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];

    $query = "INSERT INTO usertype(nama) VALUES('$nama')";
    $result = mysqli_query($mysqli, $query);

    $message = 'User added successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/usertype';
        </script>
    ";
}
?>

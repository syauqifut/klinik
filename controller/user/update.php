<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $usertype_id = $_POST['usertype_id'];

    $query = "UPDATE user SET nama='$nama', username='$username', email='$email', nomor='$nomor', usertype_id='$usertype_id' WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);
    
    $message = 'User updated successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/user';
        </script>
    ";
}
?>
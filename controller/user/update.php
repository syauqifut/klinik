<?php
include_once("../../config/config.php");

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $usertype_id = $_POST['usertype_id'];
    $wilayah_id = $_POST['wilayah_id'];

    $kodeunik = '';
    if($_POST['usertype_id'] == 3){
        if(strlen($username) > 7){
            $kodename = substr($username, 0, 7);
        }else if(strlen($username) < 7){
            // $kodename = substr($username, 0, 7). 'p';
            $kodename = str_pad($username,  7, 'p');   
        }else{
            $kodename = $username;
        }
        $kodeunik = 'P-'.$kodename;
    }

    $query = "UPDATE user SET nama='$nama', username='$username', email='$email', nomor='$nomor', usertype_id='$usertype_id', wilayah_id='$wilayah_id', kode='$kodeunik' WHERE id='$id'";
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
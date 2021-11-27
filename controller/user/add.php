<?php
include_once("../../config/config.php");

if (isset($_POST['Submit'])) {

    $kodeunik = '';
    $username = $_POST['username'];
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

    // var_dump($kodeunik);
    $nama           = $_POST['nama'];
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $nomor          = $_POST['nomor'];
    $usertype_id    = $_POST['usertype_id'];
    $password       = password_hash($_POST['password'], PASSWORD_DEFAULT);;
    $kode           = $kodeunik;

    $query = "INSERT INTO user(nama, username, email, nomor, usertype_id, password, kode) VALUES('$nama', '$username', '$email', '$nomor', '$usertype_id', '$password', '$kode')";
    $result = mysqli_query($mysqli, $query);

    $message = 'User added successfully';

    echo "
        <script>
            alert('$message');
            window.location.href='/klinik/user';
        </script>
    ";
}
?>

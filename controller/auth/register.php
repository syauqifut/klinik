<?php
include_once("../../config/config.php");

    // var_dump($kodeunik);
    $nama           = $_POST['nama'];
    $username       = $_POST['username'];
    $email          = $_POST['email'];
    $nomor          = $_POST['nomor'];
    $usertype_id    = 2;
    $password       = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $kode           = '';

    $query = "INSERT INTO user(nama, username, email, nomor, usertype_id, password, kode) VALUES('$nama', '$username', '$email', '$nomor', '$usertype_id', '$password', '$kode')";
    $result = mysqli_query($mysqli, $query);

    $regemail      = $mysqli->real_escape_string($_POST['email']);
    $regpassword   = $mysqli->real_escape_string($_POST['password']);

    $cek_login = $mysqli->query("SELECT * FROM user WHERE email='$regemail'");
    $ktm_login = $cek_login->num_rows;
    $data_login = $cek_login->fetch_assoc();
    
    if($ktm_login>=1){
        if(password_verify($regpassword, $data_login['password'])){
            
            session_start();
    
            $_SESSION['id']=$data_login['id'];
            $_SESSION['email']=$data_login['email'];
            $_SESSION['nama']=$data_login['nama'];
    
            if($data_login['usertype_id'] == '1'){
    
                $_SESSION['type'] = 'admin';
                header("Location: /klinik/user");
    
            }else if($data_login['usertype_id'] == '3'){
                
                $_SESSION['type'] = 'pegawai';
                header("Location: /klinik/wilayah");
    
            }else if($data_login['usertype_id'] == '2'){
                
                $_SESSION['type'] = 'pasien' ;
                header("Location: /klinik/obat");
            }else{
                header("Location: /klinik/register?pesan=gagal");
            }	
        }else{
            header("Location: /klinik/register?pesan=gagal");
        }
    }else{
        header("Location: /klinik/register?pesan=gagal");
    }
?>
<?php 
include_once("../../config/config.php");

$email      = $mysqli->real_escape_string($_POST['email']);
$password   = $mysqli->real_escape_string($_POST['password']);

$cek_login = $mysqli->query("SELECT * FROM user WHERE email='$email'");
$ktm_login = $cek_login->num_rows;
$data_login = $cek_login->fetch_assoc();

if($ktm_login>=1){
    if(password_verify($password, $data_login['password'])){
        
        session_start();

        $_SESSION['id']=$data_login['id'];
        $_SESSION['email']=$data_login['email'];
        $_SESSION['nama']=$data_login['nama'];

        if($data_login['usertype_id'] == '1'){ //admin

    		$_SESSION['type'] = 'admin';
    		header("Location: /klinik/laporan");

    	}else if($data_login['usertype_id'] == '3'){ //perawat
            
    		$_SESSION['type'] = 'pegawai';
    		header("Location: /klinik/periksalist");

    	}else if($data_login['usertype_id'] == '2'){ //pasien
            
    		$_SESSION['type'] = 'pasien' ;
    		header("Location: /klinik/periksa");
    	}else{
    	    header("Location: /klinik/login?pesan=gagal");
    	}
    }else{
        header("Location: /klinik/login?pesan=gagal");
    }
}else{
    header("Location: /klinik/login?pesan=gagal");
}

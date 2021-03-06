<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/klinik";
    $url = $project_location;
    // echo $url;
    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];
    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    //All route
    switch ($request) {
        //Auth route
        case $url.'/login':
            require "views/auth/login.php";
            break;
        case $url.'/register':
            require "views/auth/register.php";
            break;

         
        //Authed route  
        //laporan 
        case $url.'/laporan' :
            require "template.php";
            break;

        //usertype
        case $url.'/usertype' :
            require "template.php";
            break;
        case $url.'/usertypeadd' :
            require "template.php";
            break;
        case $url.'/usertypeedit?id='. $id:
            require "template.php";
            break;

        //user
        case $url.'/user' :
            require "template.php";
            break;
        case $url.'/useradd' :
            require "template.php";
            break;
        case $url.'/useredit?id='. $id:
            require "template.php";
            break;

        //obat
        case $url.'/obat' :
            require "template.php";
            break;
        case $url.'/obatadd' :
            require "template.php";
            break;
        case $url.'/obatedit?id='. $id:
            require "template.php";
            break;

        //tindakan
        case $url.'/tindakan' :
            require "template.php";
            break;
        case $url.'/tindakanadd' :
            require "template.php";
            break;
        case $url.'/tindakanedit?id='. $id:
            require "template.php";
            break;

        //wilayah
        case $url.'/wilayah' :
            require "template.php";
            break;
        case $url.'/wilayahadd' :
            require "template.php";
            break;
        case $url.'/wilayahedit?id='. $id:
            require "template.php";
            break;
        
        //periksa pasien
        case $url.'/periksa' :
            require "template.php";
            break; 
        case $url.'/periksadaftar' :
            require "template.php";
            break;
        case $url.'/periksaobat?id='. $id :
            require "template.php";
            break; 
        case $url.'/periksatindakan?id='. $id :
            require "template.php";
            break; 

        //periksa perawat
        case $url.'/periksalist' :
            require "template.php";
            break; 
        case $url.'/periksaselesai?id='. $id :
            require "template.php";
            break; 
        case $url.'/periksalistobat?id='. $id :
            require "template.php";
            break; 
        case $url.'/periksalistobatadd?id='. $id :
            require "template.php";
            break; 
        case $url.'/periksalisttindakan?id='. $id :
            require "template.php";
            break; 
        case $url.'/periksalisttindakanadd?id='. $id :
            require "template.php";
            break;  

        //transaksi
        case $url.'/transaksi' :
            require "template.php";
            break; 
        case $url.'/transaksibayar?id='. $id :
            require "template.php";
            break;

        default:
            http_response_code(404);
            require "template.php";
            break;
    }

?>
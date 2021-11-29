<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/klinik";
    $url = $project_location;
    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];
    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    switch ($request) {
        //laporan
        case $url.'/laporan' :
            require "views/laporan/index.php";
            break;
            
        //usertype
        case $url.'/usertype' :
            require "views/usertype/index.php";
            break;
        case $url.'/usertypeadd' :
            require "views/usertype/add.php";
            break;
        case $url.'/usertypeedit?id='.$id :
            require "views/usertype/edit.php";
            break;

        //user
        case $url.'/user' :
            require "views/user/index.php";
            break;
        case $url.'/useradd' :
            require "views/user/add.php";
            break;
        case $url.'/useredit?id='. $id:
            require "views/user/edit.php";
            break;
            
        //obat
        case $url.'/obat' :
            require "views/obat/index.php";
            break;
        case $url.'/obatadd' :
            require "views/obat/add.php";
            break;
        case $url.'/obatedit?id='. $id:
            require "views/obat/edit.php";
            break;

        //tindakan
        case $url.'/tindakan' :
            require "views/tindakan/index.php";
            break;
        case $url.'/tindakanadd' :
            require "views/tindakan/add.php";
            break;
        case $url.'/tindakanedit?id='. $id:
            require "views/tindakan/edit.php";
            break;

        //wilayah
        case $url.'/wilayah' :
            require "views/wilayah/index.php";
            break;
        case $url.'/wilayahadd' :
            require "views/wilayah/add.php";
            break;
        case $url.'/wilayahedit?id='. $id:
            require "views/wilayah/edit.php";
            break;

        //periksa pasien
        case $url.'/periksa' :
            require "views/periksa/index.php";
            break; 
        case $url.'/periksadaftar' :
            require "views/periksa/daftar.php";
            break;
        case $url.'/periksaobat?id='. $id :
            require "views/periksa/obat.php";
            break; 
        case $url.'/periksatindakan?id='. $id :
            require "views/periksa/tindakan.php";
            break; 

        //periksa perawat
        case $url.'/periksalist' :
            require "views/periksa/periksa.php";
            break; 
        case $url.'/periksaselesai?id='. $id :
            require "views/periksa/periksaselesai.php";
            break; 
        case $url.'/periksalistobat?id='. $id :
            require "views/periksa/periksaobat.php";
            break;
        case $url.'/periksalistobatadd?id='. $id :
            require "views/periksa/obatadd.php";
            break; 
        case $url.'/periksalisttindakan?id='. $id :
            require "views/periksa/periksatindakan.php";
            break; 
        case $url.'/periksalisttindakanadd?id='. $id :
            require "views/periksa/tindakanadd.php";
            break; 

        //transaksi
        case $url.'/transaksi' :
            require "views/transaksi/index.php";
            break;
        case $url.'/transaksibayar?id='. $id :
            require "views/transaksi/bayar.php";
            break; 

        default:
            http_response_code(404);
            echo "404";
            break;
    }

?>
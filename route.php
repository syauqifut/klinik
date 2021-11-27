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
        case $url.'/usertype' :
            require "views/usertype/index.php";
            break;
        case $url.'/usertypeadd' :
            require "views/usertype/add.php";
            break;
        case $url.'/usertypeedit?id='.$id :
            require "views/usertype/edit.php";
            break;
        case $url.'/user' :
            require "views/user/index.php";
            break;
        case $url.'/useradd' :
            require "views/user/add.php";
            break;
        case $url.'/useredit?id='. $id:
            require "views/user/edit.php";
            break;
        case $url.'/obat' :
            require "views/obat/index.php";
            break;
        case $url.'/obatadd' :
            require "views/obat/add.php";
            break;
        case $url.'/obatedit?id='. $id:
            require "views/obat/edit.php";
            break;
        case $url.'/tindakan' :
            require "views/tindakan/index.php";
            break;
        case $url.'/tindakanadd' :
            require "views/tindakan/add.php";
            break;
        case $url.'/tindakanedit?id='. $id:
            require "views/tindakan/edit.php";
            break;
        case $url.'/wilayah' :
            require "views/wilayah/index.php";
            break;
        case $url.'/wilayahadd' :
            require "views/wilayah/add.php";
            break;
        case $url.'/wilayahedit?id='. $id:
            require "views/wilayah/edit.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }

?>
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
    //auth route -> template.php -> route.php
    switch ($request) {
        case $url.'/usertype' :
            require "template.php";
            break;
        case $url.'/usertypeadd' :
            require "template.php";
            break;
        case $url.'/usertypeedit?id='. $id:
            require "template.php";
            break;
        case $url.'/user' :
            require "template.php";
            break;
        case $url.'/useradd' :
            require "template.php";
            break;
        case $url.'/useredit?id='. $id:
            require "template.php";
            break;
        case $url.'/obat' :
            require "template.php";
            break;
        case $url.'/obatadd' :
            require "template.php";
            break;
        case $url.'/obatedit?id='. $id:
            require "template.php";
            break;
        case $url.'/tindakan' :
            require "template.php";
            break;
        case $url.'/tindakanadd' :
            require "template.php";
            break;
        case $url.'/tindakanedit?id='. $id:
            require "template.php";
            break;
        case $url.'/wilayah' :
            require "template.php";
            break;
        case $url.'/wilayahadd' :
            require "template.php";
            break;
        case $url.'/wilayahedit?id='. $id:
            require "template.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }

?>
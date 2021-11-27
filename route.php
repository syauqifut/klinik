<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/klinik";
    $url = $project_location;
    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];
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
        default:
            http_response_code(404);
            echo "404";
            break;
    }

?>
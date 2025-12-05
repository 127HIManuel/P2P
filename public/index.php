<?php
    session_start();
    require "../app/core/config/init.php";
    $url = $_GET['url'] ?? "home";
    $url = explode("/", $url);
        
    $pagename = trim($url[0]);
        
    $filename = "../app/core/pages/".$pagename.".php";

    if(file_exists($filename)){
        require_once $filename;
    }else{
        require_once "../app/core/pages/404.php";
    }
    
    
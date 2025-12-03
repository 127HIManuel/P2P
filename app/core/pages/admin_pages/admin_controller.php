<?php
$section = $url[1] ?? 'dashboard';


$operation = $url[2] ?? 'view';

$id = $url[3] ?? 0;

$filename = "../app/core/pages/admin_pages/".$section.".php";
if(file_exists($filename)) {
    $filename = "../app/core/pages/admin_pages/".$section.".php"; 
}else {
   $filename = "../app/core/pages/404.php";
}
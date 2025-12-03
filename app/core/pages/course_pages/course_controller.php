<?php
$section = $url[1] ?? 'web_design';


$operation = $url[2] ?? 'view';

$id = $url[3] ?? 0;

$filename = "../app/core/pages/course_pages/".$section.".php";
if(file_exists($filename)) {
    $filename = "../app/core/pages/course_pages/".$section.".php"; 
}else {
   $filename = "../app/core/pages/404.php";
}
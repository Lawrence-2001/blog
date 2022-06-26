<?php
$controller_name = $_GET['c'] ?? 'index';
$path = "controllers/$controller_name.php";
$controller_exists = (file_exists($path));

if($controller_exists){
    require_once($path);
}
else{
    require_once('controllers/index.php');
}
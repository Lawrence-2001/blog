<?php
require_once ("helpers/router.php");

$URL = $_GET['routerURL'] ?? '';
$paramsOfURL = parseURL($URL);

$controller_name = $paramsOfURL[0] ?? 'index';
$path = "controllers/$controller_name.php";
$controller_exists = (file_exists($path));

if ($controller_exists) {
    require_once($path);
} else {
    require_once('controllers/index.php');
}
<?php

include_once('configuration/bootstrap.php');

$articles = getPosts($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar'];
$templateParams = ['articles' =>$articles];
$pageHTML = buildPage('posts', $pageParams, $templateParams);

echo $pageHTML;
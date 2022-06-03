<?php

include_once('configuration/bootstrap.php');

$articles = getPosts($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar'];
$pageHTML = buildPage('posts', $pageParams, ['articles' =>$articles]);

echo $pageHTML;
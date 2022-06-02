<?php

include_once('configuration/bootstrap.php');

$articles = getPosts($db);
$title = 'Lawrence.com';

$pageHTML = buildPage('posts', ['title' => $title, 'sidebar' => 'main/sidebar'], ['articles' =>$articles]);

echo $pageHTML;
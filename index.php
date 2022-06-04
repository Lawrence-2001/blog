<?php

include_once('configuration/bootstrap.php');

$articles = getPosts($db);
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];
$pageHTML = buildPage('posts', $pageParams, ['articles' =>$articles]);
echo $pageHTML;
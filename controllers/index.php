<?php

include_once('configuration/bootstrap.php');

$articles = isset($paramsOfURL[1]) && !empty($paramsOfURL[1])? getPostsByCategory($db, $paramsOfURL[1]) : getPosts($db);
$view = $articles != false ? 'posts' : 'main/404';
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];
$pageHTML = buildPage($view, $pageParams, ['articles' =>$articles]);
echo $pageHTML;
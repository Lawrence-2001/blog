<?php

include_once('configuration/bootstrap.php');

$articles = isset($_GET['category_id']) && !empty($_GET['category_id'])? getPostsByCategory($db, $_GET['category_id']) : getPosts($db);
$view = $articles != false ? 'posts' : 'main/404';
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];
$pageHTML = buildPage($view, $pageParams, ['articles' =>$articles]);
echo $pageHTML;
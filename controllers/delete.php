<?php
include_once('configuration/bootstrap.php');

$post = getPost($db, $paramsOfURL[1]);
$title = $post['title'] ?? 'Error 404';
$postExist = $post != false;
$categories = getCategories($db);
$pageParams = ['title' => $title, 'sidebar' => 'main/sidebar', 'categories' => $categories];

if ($postExist) {
    removePost($db, $post['post_id']);
    header('Location: http://hw.com/');
} else {
    $pageHTML = buildPage('main/404', $pageParams);
    header('HTTP/1.1 404 NOT FOUND');
    echo $pageHTML;
}
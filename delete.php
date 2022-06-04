<?php
include_once('configuration/bootstrap.php');

$post = getPost($db, $_GET['id']);
$title = $post['title'] ?? 'Error 404';
$postExist = $post != false;
$categories = getCategories($db);
$pageParams = ['title' => $title, 'sidebar' => 'main/sidebar', 'categories' => $categories];

if ($postExist) {
    removePost($db, $post['post_id']);
    header('Location: http://localhost/hw');
} else {
    $pageHTML = buildPage('main/404', $pageParams);
    header('HTTP/1.1 404 NOT FOUND');
    echo $pageHTML;
}
<?php
include_once('configuration/bootstrap.php');

$post = getPost($db, $_GET['id']);
$title = $post['title'] ?? 'Error 404';
$postExist = $post != false;

if ($postExist) {
    removePost($db, $post['post_id']);
    header('Location: http://localhost/hw');
} else {
    $pageHTML = buildPage('main/404', ['sidebar' => 'main/sidebar', 'title' => $title]);
    header('HTTP/1.1 404 NOT FOUND');
    echo $pageHTML;
}
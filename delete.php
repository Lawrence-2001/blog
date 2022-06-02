<?php
include_once('helpers/db_functions.php');
include_once('configuration/db_configuration.php');
include_once('model/post.php');
include_once('helpers/bufferization.php');

$postId = $_GET['id'];
$post = getPost($db, $postId);
$postExist = $post != false;

$title = $post['title'] ?? 'Error 404';
$contentView = $postExist ? NULL : 'main/404';


$postExist ? removePost($db, $postId) : header('HTTP/1.1 404 NOT FOUND');

if ($contentView != NULL) {
    $errorHTML = template($contentView);
    $sidebarHTML = template('main/sidebar');
    $pageHTML = template('main/main', ['content' => $errorHTML, 'sidebar' => $sidebarHTML, 'title' => $title]);
    echo $pageHTML;
} else {
    header('Location: http://localhost/hw');
}
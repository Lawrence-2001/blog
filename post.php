<?php

include_once('helpers/validation.php');
include_once('helpers/db_functions.php');
include_once('configuration/db_configuration.php');
include_once('model/post.php');
include_once('helpers/bufferization.php');

$id = $_GET['id'] ?? '';
$post = getPost($db, $id);
$postExist = $post != false;

$title = $postExist ? $post['title'] : 'Error 404';
$contentView = $postExist ? 'post' : 'main/404';

$articleHTML = template($contentView,['post' => $post]);
$sidebarHTML = template('main/sidebar');
$pageHTML = template('main/main',['content' =>$articleHTML, 'sidebar' => $sidebarHTML, 'title' => $title]);

echo $pageHTML;

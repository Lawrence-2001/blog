<?php

include_once('helpers/validation.php');
include_once('helpers/functions.php');
include_once('conf.php');
include_once('model/post.php');


$id = $_GET['id'] ?? '';
$post = getPost($db, $id);
$postExists = isset($post['post_id']);

if ($postExists) {
    include_once('view/article.php');
    include_once('view/main/footer.php');
} else {
    include_once('view/main/header.php');
    include_once('view/main/404.php');
    include_once('view/main/footer.php');
}
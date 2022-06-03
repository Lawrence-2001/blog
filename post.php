<?php

include_once('configuration/bootstrap.php');

$post = getPost($db, $_GET['id']);
$postExist = $post != false;

$pageParams['title'] = $post['title'] ?? 'Error 404';
$pageParams['sidebar'] = 'main/sidebar';
$templateName = $postExist ? 'post' : 'main/404';

$pageHTML = buildPage($templateName, $pageParams, ['post' => $post]);

if(!$postExist){
    header('HTTP/1.1 404 NOT FOUND');
}

echo $pageHTML;
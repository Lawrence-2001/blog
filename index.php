<?php

include_once('helpers/db_functions.php');
include_once('configuration/db_configuration.php');
include_once('model/post.php');
include_once('helpers/bufferization.php');

$articles = getPosts($db);
$title = 'Lawrence.com';

$articlesHTML = template('posts',['articles' => $articles]);
$sidebarHTML = template('main/sidebar');
$pageHTML = template('main/main',['content' =>$articlesHTML, 'sidebar' => $sidebarHTML, 'title' => $title]);

echo $pageHTML;
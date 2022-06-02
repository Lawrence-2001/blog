<?php

include_once('helpers/db_functions.php');
include_once('configuration/db_configuration.php');
include_once('model/post.php');
include_once('helpers/bufferization.php');
$articles = getPosts($db);

$articlesHTML = template('posts',['articles' => $articles]);
$pageHTML = template('main/main',['content' =>$articlesHTML]);

echo $pageHTML;
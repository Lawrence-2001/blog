<?php

	include_once('helpers/functions.php');
	include_once('conf.php');
    include_once('model/post.php');

    $articles = getPosts($db);

    include_once('view/main/header.php');
    include_once('view/posts.php');
    include_once('view/main/footer.php');
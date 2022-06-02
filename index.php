<?php

	include_once('helpers/db_functions.php');
	include_once('configuration/db_configuration.php');
    include_once('model/post.php');

    $articles = getPosts($db);

    include_once('view/main/header.php');
    include_once('view/posts.php');
    include_once('view/main/footer.php');

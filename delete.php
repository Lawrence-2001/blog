<?php
    include_once('helpers/db_functions.php');
    include_once('db_configuration.php');
    include_once('model/post.php');

    $postId = isset($_GET['id']) ? $_GET['id'] : '';
    $view = 'delete';

    if($postId != ''){
        $post = getPost($db, $postId);
        if($post!= false){
            removePost($db, $postId);
        }
        else{
            $view = 'main/404';
            header('HTTP/1.1 404 NOT FOUND');
        }
    }


    include_once('view/main/header.php');
    include_once("view/$view.php");
    include_once('view/main/footer.php');
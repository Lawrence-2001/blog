<?php
include_once('configuration/bootstrap.php');

$id = $_GET['id'] ?? '';
$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];

$view = 'articleForm';
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    validateFormFields($fields, $errors, 2);
    if (notExistsErrors($errors)) {
        editPost($db, $id, $fields['title'], $fields['content']);
        header('Location: http://localhost/hw');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $post = getPost($db, $id);
    if ($post != false) {
        $fields = extractFields($post, ['title', 'content']);
        $view = 'edit';
    } else {
        $view = 'main/404';
        header('HTTP/1.1 404 NOT FOUND');
    }
}

$pageHTML = buildPage($view, $pageParams, ['fields' => $fields, 'errors' => $errors]);
echo $pageHTML;
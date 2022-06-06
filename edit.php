<?php
include_once('configuration/bootstrap.php');

$id = $_GET['id'] ?? '';
$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];

$view = 'edit';
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];
$post = getPost($db, $id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    validateFormFields($fields, $errors, 2);
    if (notExistsErrors($errors)) {
        editPost($db, $id, $fields['title'], $fields['content'], $_POST['category_id']);
        header('Location: http://localhost/hw');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($post != false) {
        $fields = extractFields($post, ['title', 'content']);
    } else {
        $view = 'main/404';
        header('HTTP/1.1 404 NOT FOUND');
    }
}

$pageHTML = buildPage($view, $pageParams, ['fields' => $fields,'categories' => $categories, 'errors' => $errors, 'category_id' => $post['category_id']]);
echo $pageHTML;
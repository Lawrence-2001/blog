<?php
include_once('configuration/bootstrap.php');

$id = $_GET['id'] ?? '';
$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];

$view = 'edit';
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];
$category_id = NULL;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    $category_id = $_POST['category_id'];
    validateFormFields($fields, $errors, 2);
    if (notExistsErrors($errors)) {
        editPost($db, $id, $fields['title'], $fields['content'], $category_id);
        header('Location: http://localhost/hw');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $post = getPost($db, $id);
    if ($post != false) {
        $fields = extractFields($post, ['title', 'content']);
        $category_id = $post['category_id'];
    } else {
        $view = 'main/404';
        header('HTTP/1.1 404 NOT FOUND');
    }
}

$pageHTML = buildPage($view, $pageParams, ['fields' => $fields,'categories' => $categories, 'errors' => $errors, 'category_id' => $category_id]);
echo $pageHTML;
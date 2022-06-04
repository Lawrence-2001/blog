<?php
include_once('configuration/bootstrap.php');

$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];
$categories = getCategories($db);
$pageParams = ['title' => 'Lawrence.com', 'sidebar' => 'main/sidebar', 'categories' => $categories];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    validateFormFields($fields, $errors, 2);
    if(notExistsErrors($errors)){
        addPost($db, $fields['title'], $fields['content'], $_POST['category_id']);
        header('Location: http://localhost/hw');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fields = extractFields($_GET, $fieldsNames);
}

$pageHTML = buildPage('articleForm', $pageParams, ['fields' =>$fields,'categories' => $categories, 'errors' => $errors]);
echo $pageHTML;

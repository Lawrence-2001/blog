<?php
include_once('configuration/bootstrap.php');

$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];
$pageParams = ['title' => 'Add article', 'sidebar' => 'main/sidebar'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    validateFormFields($fields, $errors, 2);
    if(notExistsErrors($errors)){
        addPost($db, $fields['title'], $fields['content']);
        header('Location: http://localhost/hw');
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fields = extractFields($_GET, $fieldsNames);
}

$pageHTML = buildPage('articleForm', $pageParams, ['fields' =>$fields, 'errors' => $errors]);
echo $pageHTML;

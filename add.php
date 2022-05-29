<?php
include_once('helpers/functions.php');
include_once('helpers/validation.php');
include_once('conf.php');
include_once('model/post.php');

$id = $_GET['id'] ?? '';
$fieldsNames = ['content', 'title'];
$fields = [];
$errors = [];
$lengthOfField = 2;
$view = 'edit';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, $fieldsNames);
    if (isFieldsEntered($fields)) {
        if (checkLengthOfFields($fields, $lengthOfField)) {
            addPost($db, $fields['title'], $fields['content']);
            header('Location: http://localhost/hw');
        } else {
            $errors['checkLengthOfFields'] = "Enter at least $lengthOfField characters";
        }
    } else {
        $errors['isFieldsEntered'] = "Fill in all the fields of the form";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $fields = extractFields($_GET, $fieldsNames);
}

include_once('view/main/header.php');
include_once('view/main/errors.php');
include_once("view/$view.php");
include_once('view/main/footer.php');
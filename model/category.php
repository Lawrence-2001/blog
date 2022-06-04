<?php
function getCategories(PDO $connection) : array {
    $sql_query = "SELECT * FROM `categories`";
    $result = dbQuery($connection, $sql_query);
    return $result->fetchAll();
}

function getCategory(PDO $connection, int $categoryId) : array {
    $sql_query = "SELECT * FROM `categories` WHERE category_id = $categoryId";
    $result = dbQuery($connection, $sql_query);
    return $result->fetch();
}


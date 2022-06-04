<?php
function getCategories(PDO $connection) : array {
    $sql_query = "SELECT * FROM `categories`";
    $result = dbQuery($connection, $sql_query);
    return $result->fetchAll();
}

function getCategory(PDO $connection, int $categoryID) : array {
    $sql_query = "SELECT * FROM `categories` WHERE category_id =:category_id";
    $result = dbQuery($connection, $sql_query, ['category_id' => $categoryID]);
    return $result->fetch();
}


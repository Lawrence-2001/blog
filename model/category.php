<?php
function getCategories(PDO $connection) : array {
    $sql_query = "SELECT * FROM `categories`";
    $result = dbQuery($connection, $sql_query);
    return $result->fetchAll();
}




<?php

function getPosts(PDO $connection): array
{
    $sql_query = "SELECT * FROM `posts` ORDER BY `post_id` DESC";
    $result = dbQuery($connection, $sql_query);
    return $result->fetchAll();
}

function getPost(PDO $connection, $post_id)
{
    $sql_query = "SELECT * FROM posts 
                    INNER JOIN categories ON posts.category_id = categories.category_id
                    WHERE posts.post_id = :post_id";
    $result = dbQuery($connection, $sql_query, ['post_id' => $post_id]);
    return $result->fetch();
}

function addPost(PDO $connection, string $title, string $content): bool
{
    $sql_query = "INSERT INTO `posts`(`title`, `content`) VALUES (:title, :content)";
    dbQuery($connection, $sql_query, ['title' => $title, 'content' => $content]);
    return true;
}

function editPost(PDO $connection, int $post_id, string $title, string $content): bool
{
    $sql_query = "UPDATE posts SET title = :title, content = :content WHERE post_id = :post_id";
    dbQuery($connection, $sql_query, ['post_id' => $post_id, 'title' => $title, 'content' => $content]);
    return true;
}

function removePost(PDO $connection, int $post_id): bool
{
    $sql_query = "DELETE FROM `posts` WHERE `post_id` = :post_id";
    $result = dbQuery($connection, $sql_query, ['post_id' => $post_id]);
    return true;
}


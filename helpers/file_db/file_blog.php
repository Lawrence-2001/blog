<?php
function getArticles() : array{
    return json_decode(file_get_contents('file_db/articles.json'), true);
}

function addArticle(string $title, string $content) : bool{
    $articles = getArticles();

    $lastId = end($articles)['id'];
    $id = $lastId + 1;

    $articles[$id] = [
        'id' => $id,
        'title' => $title,
        'content' => $content
    ];

    saveArticles($articles);
}

function editArticle(int $id, string $title, string $content) : bool {
    $articles = getArticles();
    if(isset($articles[$id])){
        $articles[$id]['title'] = $title;
        $articles[$id]['content'] = $content;
        return saveArticles($articles);
    }
    return false;
}

function removeArticle(int $id) : bool{
    $articles = getArticles();

    if(isset($articles[$id])){
        unset($articles[$id]);
        return saveArticles($articles);
    }

    return false;
}

function saveArticles(array $articles) : bool{
    file_put_contents('file_db/articles.json', json_encode($articles));
    return true;
}
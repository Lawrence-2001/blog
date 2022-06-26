<?php
function parseURL(string $URL) : array {
    $paramsOfURL = array_diff(explode('/', $URL), ['']);
    return $paramsOfURL;
}
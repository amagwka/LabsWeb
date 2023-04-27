<?php
$dt = time();
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];

$path = "$dt|$page|$ref" . PHP_EOL;

if (!file_exists('log')) {
    mkdir('log', 0777, true);
}

file_put_contents('log/' . PATH_LOG, $path, FILE_APPEND);
?>

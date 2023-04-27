<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Page</title>
    </head>
    <body>
        <?php
session_start();
if(!isset($_SESSION['pages_visited'])){
    $_SESSION['pages_visited'] = [];
}
array_push($_SESSION['pages_visited'], $_SERVER['REQUEST_URI']);
?>

<h1>Welcome to page 3</h1>

<?php
if(isset($_SESSION['pages_visited'])){
    echo '<h3>Pages visited:</h3>';
    foreach($_SESSION['pages_visited'] as $page){
        echo $page.'<br>';
    }
}
?>

<a href="index.php">Go back to index</a>
    </body>
</html>

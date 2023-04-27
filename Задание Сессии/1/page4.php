<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Page</title>
    </head>
    <body>
        <?php
session_start();

echo 'Name: '.$_SESSION['name'].'<br>';
echo 'Surname: '.$_SESSION['surname'].'<br>';
echo 'Age: '.$_SESSION['age'].'<br>';
?>
    </body>
</html>

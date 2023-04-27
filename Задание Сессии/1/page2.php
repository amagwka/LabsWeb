<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Page</title>
    </head>
    <body>
        <?php
session_start();

if(isset($_POST['surname'])){
    $_SESSION['surname'] = $_POST['surname'];
    header('Location: page3.php');
}
?>

<form method="POST" action="">
    <label for="surname">Surname:</label>
    <input type="text" name="surname" id="surname">
    <input type="submit" value="Next">
</form>

    </body>
</html>

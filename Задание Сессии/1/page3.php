<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Page</title>
    </head>
    <body>
        <?php
session_start();

if(isset($_POST['age'])){
    $_SESSION['age'] = $_POST['age'];
    header('Location: page4.php');
}
?>

<form method="POST" action="">
    <label for="age">Age:</label>
    <input type="text" name="age" id="age">
    <input type="submit" value="Next">
</form>
    </body>
</html>

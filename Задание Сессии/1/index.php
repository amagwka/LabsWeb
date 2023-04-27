<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Page</title>
    </head>
    <body>
        <?php
session_start();

if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header('Location: page2.php');
}
?>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Next">
</form>
    </body>
</html>
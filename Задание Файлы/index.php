<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
</head>
<body>
	<h1>Гостевая книга</h1>
	<form action="process_guestbook.php" method="POST">
		<label for="name">Ваше имя:</label>
		<input type="text" name="name" required><br>

		<label for="comment">Ваш комментарий:</label>
		<textarea name="comment" required></textarea><br>

		<input type="submit" value="Отправить">
	</form>

	<h2>Комментарии:</h2>
	<?php include 'display_comments.php'; ?>
</body>
</html>

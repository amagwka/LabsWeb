<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
	$date = date('d.m.Y H:i:s');

	$data = array('name' => $name, 'comment' => $comment, 'date' => $date);

	$json_data = json_encode($data);

	$file = 'comments.json';

	if(file_exists($file)) {
		$current_data = file_get_contents($file);
		$current_data = json_decode($current_data, true);
	} else {
		$current_data = array();
	}

	$current_data[] = $data;

	$new_data = json_encode($current_data);

	if(file_put_contents($file, $new_data)) {
		header('Location: index.php');
	} else {
		echo 'Ошибка записи в файл';
	}
} else {
	header('Location: index.php');
}
?>

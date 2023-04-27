<?php
$file = 'comments.json';

if(file_exists($file)) {
	$current_data = file_get_contents($file);
	$current_data = json_decode($current_data, true);

	if($current_data) {
		foreach($current_data as $comment) {
			echo '<p><strong>' . $comment['name'] . ':</strong> ' . $comment['comment'] . '</p>';
			echo '<p><em>' . $comment['date'] . '</em></p>';
			echo '<hr>';
		}
	} else {
		echo 'Пока нет комментариев';
	}
} else {
	echo 'Пока нет комментариев';
}
?>
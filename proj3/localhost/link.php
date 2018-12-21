<?php $link = mysqli_connect('localhost', 'root', '', 'analize');
	if ($link->connect_error) {
		die('Ошибка : ('. $link->connect_errno .') '. $link->connect_error);} ?>
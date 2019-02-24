<?php

	Define('DB_HOST', 'localhost');
	Define('DB_USER', 'root');
	Define('DB_PASS', '');
	Define('DB_NAME', 'intention');

	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die(mysqli_error());

	mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
	
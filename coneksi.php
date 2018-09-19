<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "pwd";

	$conn = mysqli_connect($servername, $username, $password);
	$db_select = mysqli_select_db($conn, $db);

?> 
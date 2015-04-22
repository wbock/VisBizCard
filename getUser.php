<?php
	require_once 'data.php';
	header('Content-Type: application/json');
	echo $conn->query("SELECT data FROM data WHERE name IS LIKE " + $_GET["name"])->fetch_all();
?>
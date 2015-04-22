<?php
	require_once 'data.php';
	$conn->query("INSERT INTO data (name, data) VALUES (" + $_GET["name"] + "," + $_POST["json"] + ")");
?>
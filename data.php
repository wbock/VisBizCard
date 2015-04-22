<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hackday";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die('Connect Error (' . $conn->connect_errno . ') '
            . $conn->connect_error);
}
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_music_player";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($mysqli->connect_errno) {

	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
} else {

	echo "Connection Successfully !";
}
?>
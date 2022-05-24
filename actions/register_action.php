<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_music_player";

$link = mysqli_connect($servername, $username, $password, $dbname);

if($link == false){
	die("Error: Could not connect with the Database!!");
}
else{
	echo "Connected With Database!!";
}


$link1 = mysqli_query($link, "SELECT username FROM login_details WHERE username=$username");

if (($link1) != 0)
{
	echo "Username already exists";
}

else
{
	echo "failed.. not signed up";
}

?>
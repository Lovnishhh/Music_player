<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_music_player";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if($conn == false){
// 	die("Error: Could not connect with the Database!!");
// } 
// else{    $username = $_POST['username'];
// 		 $password = $_POST['password'];
	
// 	$sql = mysqli_query($conn, 'select * from login_users where username = "'
// 	.$username.'" and password = "'.$password.'"');
	
// 		header("Location: http://localhost/music_player/index.html");
// 		//echo "Connected With Database!!";
// 	}

$sql = "SELECT id, username, password FROM login_player";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - username: " . $row["username"]. " " . $row["password"]. "<br>";
	header("Location: http://localhost/music_player/index.html");
  }
} else {
  echo "0 results";
}

mysqli_close($conn);


?>
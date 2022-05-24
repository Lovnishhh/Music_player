<?php
require '../config/database.php';

public function registerUser($name = '', $email = '', $phone = '', $password = '') {
	
	$sql = "INSERT INTO users (name, email, phone, password)
	VALUES (".$name.", ".$email.", ".$phone.", ".$password.")";

	if ($conn->query($sql) === TRUE) {

	  return true;
	} else {


	  echo "Error: " . $sql . "<br>" . $conn->error;
	  return false;
	}
}
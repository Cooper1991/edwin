<?php 



if(isset($_POST['submit'])){

	
	$name = array("Jack", "Stuart", "Amy", "Emmas");

	$minimum = 5;
	$maximum = 10;

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum){

		echo "Must be longer than five";
	}

	if(strlen($username) > $maximum){

		echo "Not as long as ten";
	}

	if(!in_array($username, $name)){

		echo "Get out now!";

	} else {

		echo "Welcome " . $username;
	}
}





?>
<?php 


if(isset($_POST['submit'])){

	$name = array("Jack", "James", "Michael", "Amy", "Emily");
	$minimum = 5;
	$maximum = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(strlen($username) < $minimum){

		echo "Must be more than 5";
	}

	if(strlen($username) > $maximum){

		echo "Must be less than 10";
	}

	if(!in_array($username, $name)){

		echo "You are not Welcome";

	} else {

		echo "Welcome " . $username;
	}
	
}






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>

<!--JQUERY-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!--BOOTSTRAP-->

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS-->
	<link rel="stylesheet" href="styles/styles.css">

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>

	<form action="form.php" method="post">
		
		<input type="text" placeholder="Username" name="username"><br>
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" name="submit">

	</form>


	</form>

</body>
</html>
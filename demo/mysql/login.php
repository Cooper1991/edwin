<?php 


if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost', 'root', 'fabregas4', 'loginapp');

	if ($connection) {
		
		echo "Again, yay!";

	} else {

		die ("Nope sorry");

	}
}


 ?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</head>
<body>

	<div class="container">
		<div class="col-sm-6">
			
			<form action="login.php" method="post">
			<label for="username">Username</label>
			<div class="form-group">
				<input type="text" class="form-control" name="username">
			</div>

			<label for="password">Password</label>
			<div class="form-group">
				<input type="password" class="form-control" name="password">
			</div>
		

		<input type="submit" name="submit" value="Submit" class=" btn btn-primary">
</div>
	</div>

			</form>
	
</body>
</html>
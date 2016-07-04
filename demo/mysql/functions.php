<?php

include 'db.php';

function showAllData(){

  //Database connection & SQL query
  $query = 'SELECT * FROM users';
  global $connection; //Need to make it global becase it's coming from db.php
  $result = mysqli_query($connection, $query);

  if(!$result){

    die ("Couldn't connect" . mysqli_error());

  }

  while($row = mysqli_fetch_assoc($result)){ //grab array of data from database

    $id = $row['id']; //store the id columns the the assoc array into id

  echo "<option value='$id'>$id</option>";

  }

}





function readData(){
  global $connection;
  $query = 'SELECT * FROM users';
  $result = mysqli_query($connection, $query);

  if(!$result){

    die ("Couldn't connect");

  }

  foreach($result as $rows){
        print_r($rows);
      }

}





function createRows(){
  if(isset($_POST['submit'])){
  global $connection;
  $username = $_POST["username"];
  $password = $_POST["password"];
      
      
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
      

//password format for encrypting password 
$hashFormat = '$2y$10$';
      
//a salt we make up which we also add to the password to give added encryption      
$salt = 'iusesomecrazystrings22';
      
//add these two together            
$hashF_and_salt = $hashFormat . $salt;
      
//user crypt password to encrypt password with format and salt      
$password = crypt($password, $hashF_and_salt);      
      
      
$query = "INSERT INTO users(username, password) VALUE('$username', '$password')";

$result = mysqli_query($connection, $query);

if(!$result){

  die ("Query Failed " . mysqli_error());

} else {
  echo "Recored Created";
}
  }
}

function updateData(){
  global $connection;
  $username = $_POST["username"];
  $password = $_POST["password"];
  $id 			= $_POST['id'];

  $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if(!$result){

    die("Couldn't connect" . mysqli_error($connection));

  } else {
    echo "Record Updated";
  }

}


function deleteRows(){
  if(isset($_POST['submit'])){
  global $connection;
  $id 			= $_POST['id'];
  $query = "DELETE FROM users WHERE id = $id";

  $result = mysqli_query($connection, $query);

  if(!$result){

    die("Couldn't connect" . mysqli_error($connection));

  } else {
    echo "Record Deleted";
    }
  }
}

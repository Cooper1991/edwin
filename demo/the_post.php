<?php

echo $_POST['name'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
</head>
<body>
   
   <form action="the_post.php" method="post">
       
       <input type="text" name="name">
       
       <input type="submit" name="Submit">
       
   </form>
    
</body>
</html>
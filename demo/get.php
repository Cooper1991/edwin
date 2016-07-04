<?php 

//print_r used for displaying array. $_GET is an associative array
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET</title>
</head>
<body>

<?php 
    
$id = 10;
$button = 'Click Me';
    
?>


<!--gets sent to the GET Super Global-->
<a href="get.php?id=<?php echo $id?>"><?php echo $button?></a>

</body>
</html>
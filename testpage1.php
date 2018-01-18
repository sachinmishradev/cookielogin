
<?php 

if (!isset($_COOKIE['login'])) {

header('Location:login.php');
}


else
{

echo "<h1>Hi i am 1 st page </h1>";


	

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php">logout</a>
<a href="index.php">home</a>

</body>
</html>
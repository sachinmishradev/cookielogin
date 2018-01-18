<?php 

if (!isset($_COOKIE['login'])) {

header('Location:login.php');
}


else
{
echo "HI THis is me you have logged in !";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php">logout</a>
<a href="testpage1.php">testpage1</a>

</body>
</html>
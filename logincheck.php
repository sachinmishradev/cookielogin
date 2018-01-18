<?php
include('connection.php')
?>
<?php
if (isset($_REQUEST['username'])) {
	


$username = $_REQUEST['username'];

$password = $_REQUEST['password'];
echo $username;
echo $password;
$query = 'SELECT *  FROM user WHERE username="'.$username.'" AND password="'.$password.'" ';
$exe = mysqli_query($conn,$query);

$count = mysqli_num_rows($exe);

if($count > 0)
{

	setcookie('login','1');
	header('Location:index.php');

   
}
else
{

	header('Location:login.php?err=1');

}

}


?>
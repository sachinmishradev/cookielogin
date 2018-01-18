<?php 

if (isset($_COOKIE['login'])) {
	header('Location:index.php');
}
else
{


if (isset($_REQUEST['err']) == 1 ){
	echo 'not working efort to login';
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0 ,user-scalable=no,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	
</head>
<body>
<div class="container-fluid">

	

<div class="col col-sm-12 " id='form'  >
	<form class="form-group" method="post" action='logincheck.php'> 
	<div class="form-group">
	<label for='email'>Email : </label>
	<input type="email" class="form-control" name='username'  placeholder='Enter Email' required/>
	</div>
	<div class="form-group">
	<label for='password'>Password: </label>
	<input type="password" class="form-control" name="password" placeholder='Enter password' minlength='8' required/>
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-default" name="login" value='login'/>
	</div>
	</form>
</div>		
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</html>


<?php
}
?>
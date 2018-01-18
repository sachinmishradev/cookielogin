<?php

if (isset($_COOKIE['login'])) {
	$s_d = setcookie('login','',time()+3600);
	echo "cookie got destroyed";
	header('refresh:4;url=index.php');
}



?>
<?php
error_reporting(0);
session_start();
$host = 'localhost';
$user = strip_tags(trim($_GET['login']));
$password = strip_tags(trim($_GET['password']));

$connect = new mysqli($host, $user, $password);
if(!empty($user))
{
	if(!empty($password))
	{
		if($connect->connect_errno != 0)
		{	
    		echo '<div class="error"><p class="er"><b>#'.$connect->connect_errno."</b> Nie udało się zalogować na serwer MySQL </p></div>";
    		include 'error.php';
    		die(); 
		}
		else
		{
    		echo '<br>Połączyłeś się z bazą danych';
		    $_SESSION['user'] = $user;
		    $_SESSION['password'] = $password;
		    $_SESSION['auth2'] = TRUE;
		    header("Location:../mysql.php");  
		}
	}
 	else 
 	{
    	include 'error.php';
	}
}
else 
{
   	include 'error.php';
}

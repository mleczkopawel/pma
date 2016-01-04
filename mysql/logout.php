<?php
session_start();
if ($_SESSION['auth2'] = TRUE && !isset($_GET['logout'])) 
    {
        $_SESSION['login'] = ' ';
		$_SESSION['auth2'] == FALSE;
		header("Location:../index.php");
    }
?>
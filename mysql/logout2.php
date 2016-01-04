<?php
session_start();        
        $_SESSION['login'] = ' ';
		$_SESSION['auth2'] == FALSE;
		header("Location:../../portfolio/index.php");
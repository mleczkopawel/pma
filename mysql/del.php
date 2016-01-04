<?php
	if ($_POST['check']==TRUE)
	{
		$connect->query("DROP DATABASE ".$_POST['check[$k]']);
	}
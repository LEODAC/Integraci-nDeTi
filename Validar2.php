<?php
	session_start();
	if(!isset($_SESSION['usuario']))
	{
		
	}
	else
	{
		header('location: /ES/HOME/index.php');
	}
?>
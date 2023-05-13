<?php 
	
	session_start();
	if(isset($_SESSION['user']) && $_SESSION['user']['role_id'] != 1)
	{
		header("location: ../index.php");
	}

	if(!isset($_SESSION['user']))
	{
		header("location: ../index.php?msg=Please First Login&color=red");
	}


?>
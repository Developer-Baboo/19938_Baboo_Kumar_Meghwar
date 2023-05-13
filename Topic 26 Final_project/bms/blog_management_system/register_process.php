<?php 
	require_once("require/connection.php");

	require_once 'session_maintance.php';
	
	if(isset($_POST['register']))
	{
		//print_r($_POST);
		extract($_POST);
		$insertUserQuery = "INSERT INTO `users`(full_name,gender,user_email,user_password)
		VALUES(?,?,?,?)";

		$stmt_insert = mysqli_prepare($connection,$insertUserQuery);

		mysqli_stmt_bind_param($stmt_insert,'ssss',$full_name,$gender,$email,$password);

		$msg = "";
		if(mysqli_stmt_execute($stmt_insert))
		{
			//this code for insert data into user role table
			$query = "INSERT INTO `user_role`(user_id,role_id) 
			VALUES(?,?)";
			$user_last_insert_id =  mysqli_insert_id($connection);
			$stmt = mysqli_prepare($connection,$query);
			mysqli_stmt_bind_param($stmt,'ii',mysqli_insert_id($connection),$role);
			mysqli_stmt_execute($stmt);



			$msg = "User Account Registered With User Id:".$user_last_insert_id;
			header("location: register.php?msg=$msg&color=green");	

		}
		else
		{
			$msg = "Register Not Working";
			header("location: register.php?msg=$msg&color=red");
		}



	}


?>
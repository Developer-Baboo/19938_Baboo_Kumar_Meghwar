<?php 
	require_once("require/connection.php");
	session_start();
	if(isset($_POST['login']))
	{

		extract($_POST);

		$login_query = "SELECT * FROM `users` 
		WHERE `users`.`user_email` = ?
		AND `users`.`user_password` = ?";

		$stmt = mysqli_prepare($connection,$login_query);

		mysqli_stmt_bind_param($stmt,"ss",$email,$password);

		mysqli_stmt_execute($stmt);

		$data = mysqli_stmt_get_result($stmt);

		//var_dump($data);
		if($data->num_rows > 0)
		{
			$user_info = mysqli_fetch_assoc($data);

			//var_dump($user_info);
			$query = "SELECT `user_role`.`user_role_id`, `roles`.`role_id`,`roles`.`role_type`
			FROM `roles`, `user_role`
			WHERE `roles`.`role_id` = `user_role`.`role_id`
			AND `user_role`.`user_id` = ".$user_info['user_id'];


			$result = mysqli_query($connection,$query);
			$roles = mysqli_fetch_assoc($result);
			
			$user_info['role_id'] = $roles['role_id'];
			$user_info['role_type'] = $roles['role_type'];
			$user_info['user_role_id'] = $roles['user_role_id'];
			//var_dump($user_info);
			$_SESSION['user'] =  $user_info;
			if($user_info['role_id'] == 1)
			{
				header("location: admin/index.php");
			}elseif($user_info['role_id'] == 2)
			{
				header("location: author/index.php");
			}elseif($user_info['role_id'] == 3)
			{
				header("location: user/index.php");
			}







		}
		else
		{
			$msg = "Login Failed Plz Try Again ";
			header("location: index.php?msg=$msg&color=red");
		}


	}

?>
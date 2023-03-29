<?php 
	
	require_once '../require/connection.php';
	session_start();

	if(isset($_POST['add_post']))
	{
		extract($_POST);

		$inser_query = "INSERT INTO `posts`(added_by_user_role_id,post_title,post_description)
		VALUES(?,?,?)";

		$stmt = mysqli_prepare($connection,$inser_query);
		$user_role_id = $_SESSION['user']['user_role_id'];

		mysqli_stmt_bind_param($stmt,'iss',$user_role_id,$post_title,$post_desc);

		if(mysqli_stmt_execute($stmt))
		{			
			$post_last_insert_id =  mysqli_insert_id($connection);
			$msg = "Post Added With Post ID :".$post_last_insert_id;
			header("location: index.php?msg=$msg&color=green");	

		}
		else
		{
			$msg = "Post not add due to some reason ";
			header("location: index.php?msg=$msg&color=red");
		}

	}elseif(isset($_GET['action']) && $_GET['action'] == "delete_post")
	{
		//	echo $_GET['post_id'];

		$inser_query = "DELETE FROM `posts` WHERE post_id = ?";

		$stmt = mysqli_prepare($connection,$inser_query);

		mysqli_stmt_bind_param($stmt,'i',$_GET['post_id']);

		if(mysqli_stmt_execute($stmt))
		{			
			
			$msg = "Post Deleted With Post ID :".$_GET['post_id'];
			header("location: index.php?msg=$msg&color=green");	

		}
		else
		{
			$msg = "Post not delete due to some reason ";
			header("location: index.php?msg=$msg&color=red");
		}


	}if(isset($_POST['update_post']))
	{
		extract($_POST);

		$inser_query = "UPDATE `posts` SET  post_title=?,post_description=? WHERE post_id = ?";

		$stmt = mysqli_prepare($connection,$inser_query);

		mysqli_stmt_bind_param($stmt,'ssi',$post_title,$post_desc,$post_id);

		if(mysqli_stmt_execute($stmt))
		{		
			$msg = "Post Updated With Post ID :".$post_id;
			header("location: index.php?msg=$msg&color=green");	

		}
		else
		{
			$msg = "Post not  Update due to some reason ";
			header("location: index.php?msg=$msg&color=red");
		}

	}



?>
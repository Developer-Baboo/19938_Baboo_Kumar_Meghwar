<?php 

	require_once '../require/connection.php';

	//var_dump($connection);

	function getAllPosts()
	{
		global $connection;
		$query = "SELECT * FROM posts ORDER BY `posts`.`post_id` DESC";
		$res = mysqli_query($connection,$query);
		return $res;
	}

	function getUserFullNameByUserRoleId($user_role_id){
		

		global $connection;
		$query = "SELECT `roles`.`role_type`, `users`.`full_name` FROM `users`
		INNER JOIN `user_role` ON `users`.`user_id` = `user_role`.`user_id`
		INNER JOIN `roles` ON `user_role`.`role_id` = `roles`.`role_id`
		WHERE `user_role`.`user_role_id` = $user_role_id";
		$res = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($res);	
		return $data['full_name']."( ".$data['role_type'].")";
	}
	

	function AddFormPost($action = "",$method="GET")
	{
		?>
		<br />
		<fieldset style="width: 60%">
			<legend>Add Post Form</legend>
			<form action="<?php echo $action; ?>" method="<?php echo $method; ?>">
				<table>
						<tr>
							<th>Post Title</th>
							<td>
								<input type="text" name="post_title" required>
							</td>
						</tr>
						<tr>
							<th>Post Description</th>
							<td>
								<textarea cols="50" rows="10" name="post_desc" required></textarea>
							</td>
						</tr>
						<tr>							
							<td align="center">
								<input type="submit" name="add_post" value="Add Post">
							</td>
						</tr>
				</table>
			</form>
		</fieldset>
		<br />

		<?php
	}

	function getPostByPostId($post_id)
	{
		global $connection;
		$query = "SELECT * FROM `posts` WHERE `posts`.`post_id` = $post_id";
		$res = mysqli_query($connection,$query);
		$data = mysqli_fetch_assoc($res);	
		return $data;
	}


	function EditFormPost($action = "",$method="GET",$post_id)
	{

		$data = getPostByPostId($post_id);

		//var_dump($data);

		?>
		<br />
		<fieldset style="width: 60%">
			<legend>Update Post Form</legend>
			<form action="<?php echo $action; ?>" method="<?php echo $method; ?>">
				<input type="hidden" name="post_id" value="<?php echo $data['post_id'];?>">
				<table>
						<tr>
							<th>Post Title</th>
							<td>
								<input type="text" name="post_title" required value="<?php echo $data['post_title'];?>">
							</td>
						</tr>
						<tr>
							<th>Post Description</th>
							<td>
								<textarea cols="50" rows="10" name="post_desc" required><?php echo $data['post_description']; ?></textarea>
							</td>
						</tr>
						<tr>							
							<td align="center">
								<input type="submit" name="update_post" value="Update Post">
							</td>
						</tr>
				</table>
			</form>
		</fieldset>
		<br />

		<?php
	}

?>
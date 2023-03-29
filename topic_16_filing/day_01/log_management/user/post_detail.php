
<!DOCTYPE html>
<html>
<head>
	<title>User Dashborad Post Detail</title>
	<style type="text/css">
		#header{
			background-color: skyblue;
			padding: 10px;
			height: auto;
			text-align: center;
		}
		#post_div{
			background-color: lightgreen;
		}
		
	</style>
</head>
<body>
	<?php 
		require_once 'session_maintance.php';
		require_once 'manage_posts.php';

		$posts = getAllPosts();
	?>
	<center>
		<div id="header">
			<h1>User Dashborad Post Detail</h1>
			<hr />
			<h5>Welcome User [ 
				<?php 
					echo $_SESSION['user']['full_name'];
				?>

			]</h5>
			<a href="../logout_users.php">Logout</a>
		</div>

		<?php 
		if($posts->num_rows > 0)
		{
			while($post = mysqli_fetch_assoc($posts))
			{

				if(isset($_GET['post_id']) && $_GET['post_id'] == $post['post_id'])
				{

			


			
			?>
			<div id="post_div">
				<h5> Title: <?php echo $post['post_title']; ?></h5>
				<hr/>
				<h6> Post Id: <?php echo $post['post_id']; ?></h6>
				<p>
					<b>Post Description: </b> <?php echo $post['post_description']; ?>

				</p>
				<h6> Author: 
					<?php 
					echo getUserFullNameByUserRoleId($post['added_by_user_role_id']); 
					?>			
				</h6>
				<a href="index.php">Show All Posts</a>
			</div>
			<?php
			}
			}

		}
		else
		{
			?>
				<div id="post_div">
					<h5> No Posts Available </h5>
					
				</div>
			<?php
		}
		?>
		
	</center>

</body>
</html>
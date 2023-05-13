
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<style type="text/css">
		#header{
			background-color: skyblue;
			padding: 10px;
			height: auto;
			text-align: center;
		}

		table tr th{
			background-color: blue;
			color: white;

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
			<h1>Admin Dashborad</h1>
			<hr />
			<h5>Welcome Admin [ 
				<?php 
					echo $_SESSION['user']['full_name'];
				?>

			]</h5>
			<a href="../logout_users.php">Logout</a>
		</div>
		<div>
			<?php 
				if(isset($_GET['msg']))
				{
					?>
						<p style="background-color: <?php echo $_GET['color']; ?>">
							
							<?php echo $_GET['msg']; ?>
						</p>
					<?php
				}

			?>
		</div>
		<?php 
			//AddFormPost("post_process.php","POST");

			if(isset($_GET['post_id']))
			{
				EditFormPost("post_process.php","POST",$_GET['post_id']);
			}else{
				AddFormPost("post_process.php","POST");
			}

			
		?>
		<table border="1" width="100%">
				<tr>
					<th>Post ID</th>
					<th>Post Added By</th>
					<th>Post Title</th>
					<th>Post Description</th>
					<th>Actions</th>
				</tr>
				<?php 
					if($posts->num_rows > 0)
					{
						while($post = mysqli_fetch_assoc($posts))
						{

						
						?>
						<tr>
							<td>
								<?php echo $post['post_id']; ?>		
							</td>
							<td>
								<?php 
								echo getUserFullNameByUserRoleId($post['added_by_user_role_id']); 
								?>
							</td>
							<td>
								<?php echo $post['post_title']; ?>
							</td>
							<td>
								<?php echo $post['post_description']; ?>
							</td>
							<td>
								<a href="index.php?post_id=<?php echo $post['post_id']; ?>">
									Edit
								</a>
								 | 
								<a href="javascript:void(0)" post_id="<?php echo $post['post_id']; ?>" onclick="deletePost(this)">
								Delete 
								</a>
								

							</td>
						</tr>
						<?php
						}

					}
					else
					{
						?>
							<tr align="center">
								<td colspan="5">
									No Posts Available 
								</td>
							</tr>
						<?php
					}

				?>
		</table>

	</center>
	<script type="text/javascript">
		function deletePost(obj){

			 var flag = confirm("Do you want delete this record");
			 if(flag)
			 {
			 	window.location = "post_process.php?action=delete_post&post_id="+obj.getAttribute("post_id");
			 }
		}
	</script>
</body>
</html>
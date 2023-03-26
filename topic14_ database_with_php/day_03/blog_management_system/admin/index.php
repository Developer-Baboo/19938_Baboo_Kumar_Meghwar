<!DOCTYPE html>
<html>

<head>
	<title>Admin Dashboard</title>
	<style type="text/css">
		#header {
			/* background-color: skyblue; */
			padding: 10px;
			height: auto;
			text-align: center;
		}

		table tr th {
			background-color: blue;
			color: white;

		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			font-size: 20px;
			cursor: pointer;
			border-radius: 10px;
			font-weight: bold;
		}

		input[type="text"],
		textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 2px solid black;
			border-radius: 3px;
			/* box-sizing: border-box; */
			font-size: 16px;
		}


		* {
			/* background-color:darkgray; */
			font-family: serif;
		}

		h1 {
			font-family: cursive;
			background-color: lightseagreen;
			border-radius: 10px;
			border: 2px groove yellowgreen;
			padding: 5px;
			margin: 3px;
		}

		#post tr:nth-child(even) {
			background-color: lightgreen;
		}

		#post tr:nth-child(odd) {
			background-color: lightskyblue;
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
			<h2>Welcome Admin [
				<?php
				echo $_SESSION['user']['full_name'];
				?>

				]</h2>
			<button><a style="text-decoration:none" href="../logout_users.php">SignOut</a></button>
		</div>
		<div>
			<?php
			if (isset($_GET['msg'])) {
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

		if (isset($_GET['post_id'])) {
			EditFormPost("post_process.php", "POST", $_GET['post_id']);
		} else {
			AddFormPost("post_process.php", "POST");
		}


		?>
		<table id="post" border="1" width="100%">
			<tr>
				<th>Post ID</th>
				<th>Post Added By</th>
				<th>Post Title</th>
				<th>Post Description</th>
				<th>Actions</th>
			</tr>
			<?php
			if ($posts->num_rows > 0) {
				while ($post = mysqli_fetch_assoc($posts)) {


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
			} else {
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
		function deletePost(obj) {

			var flag = confirm("Do you want delete this record");
			if (flag) {
				window.location = "post_process.php?action=delete_post&post_id=" + obj.getAttribute("post_id");
			}
		}
	</script>
</body>

</html>
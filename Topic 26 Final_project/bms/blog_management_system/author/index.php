
<!DOCTYPE html>
<html>
<head>
	<title>Author Dashboard</title>
	<style type="text/css">
		#header{
			background-color: skyblue;
			padding: 10px;
			height: auto;
			text-align: center;
		}
		
	</style>
</head>
<body>
	<?php 
		require_once 'session_maintance.php';
	?>
	<center>
		<div id="header">
			<h1>Author Dashborad</h1>
			<hr />
			<h5>Welcome Author [ 
				<?php 
					echo $_SESSION['user']['full_name'];
				?>

			]</h5>
			<a href="../logout_users.php">Logout</a>
		</div>
	</center>

</body>
</html>
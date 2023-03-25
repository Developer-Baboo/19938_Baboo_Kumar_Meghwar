<!DOCTYPE html>
<html>
<head>
	<title>BMS->HIST->Login Page</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<?php 
		require_once 'session_maintance.php';
	?>
	<center>
		<h1>BMS->HIST->Login Page</h1>
		<hr />
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
		<fieldset style="width: 60%">
			<legend>Login Form</legend>
			<form action="login_process.php" method="POST">
				<table>
					<tr>
						<th>Email: </th>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<th>Password: </th>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>	
			</form>
		</fieldset>
		<h5>Don't Have An Account <a href="register.php" style="text-decoration: none;">Register</a></h5>
	</center>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>BMS->HIST->Register Page</title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<center>
		<h1>BMS->HIST->Register Page</h1>
		<hr />
		<?php 
			require_once("require/connection.php");
		require_once 'session_maintance.php';

			$getRolesQuery = "SELECT * FROM `roles` WHERE `roles`.`role_id` <> 1
ORDER BY `roles`.`role_id` DESC";
			$result = mysqli_query($connection,$getRolesQuery);


		?>
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
			<legend>Register Form</legend>
			<form action="register_process.php" method="POST">
				<table>
					<tr>
						<th>Full Name: </th>
						<td><input type="text" name="full_name" required></td>
					</tr>
					<tr>
						<th>Email: </th>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<th>Password: </th>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<th>Gender: </th>
						<td>
							Male <input type="radio" name="gender" value="Male" checked> || 
							Female <input type="radio" name="gender" value="Female">
						</td>
					</tr>
					<tr>
						<th>Role: </th>
						<td>
							<select name="role">
								<?php 
									while ($row = mysqli_fetch_assoc($result)) 
									{
										?>
											<option value="<?php echo $row['role_id']; ?>">
												<?php echo $row['role_type']; ?>
											</option>
										<?php 	
									}

								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="register" value="Register">
						</td>
					</tr>
				</table>	
			</form>
		</fieldset>
		<h5>You Have Already An Account <a href="index.php" style="text-decoration: none;">Login</a></h5>
	</center>

</body>
</html>
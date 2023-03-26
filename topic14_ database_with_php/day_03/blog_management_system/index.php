<!DOCTYPE html>
<html>

<head>
	<title>BMS->HIST->Login Page</title>
	<style type="text/css">
		*{
			background-color: lightskyblue;
		}
		h1 {
			font-family: cursive;
			background-color: lightseagreen;
			border-radius: 10px;
			border: 2px groove yellowgreen;
			padding: 5px;
			margin: 3px;
		}

		form {
			padding: 20px;
			border: 4px groove grey;
			border-radius: 10px;
			font-family: Arial, sans-serif;
		}

		label {
			font-weight: bold;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 2px solid black;
			border-radius: 3px;
			/* box-sizing: border-box; */
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			font-size: 20px;
			cursor: pointer;
			border-radius: 29px;
			font-weight: bold;
		}

		select option {
			font-size: 16px;
			color: #333;
			background-color: #fff;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		span {
			color: red;
		}
	</style>
</head>

<body>
	<?php
	require_once 'session_maintance.php';
	?>
	<center>
		<h1>BMS->HIST->Login Page</h1>
		
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
		<fieldset style="width: 30%">
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
		<h3>Don't Have An Account <a href="register.php" style="text-decoration: none;">Register</a></h3>
	</center>
</body>

</html>
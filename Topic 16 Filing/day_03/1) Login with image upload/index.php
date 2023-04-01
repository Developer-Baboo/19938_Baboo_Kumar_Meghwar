<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h1>User Login Form</h1>
	</center>
	<center>
		<form method="POST" action="login_process.php" >
			<fieldset>
				<legend>
					User Login Form 
				</legend>
				<table>
					<tr>
						<td><label>Email Address</label></td>
						<td><input type="text" name="email_address" placeholder="Enter Your Email" ></td>
					</tr>
					
					<tr>
						<td><label>Password</label></td>
						<td><input type="text" name="password" placeholder="********" ></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="register" value="Login"></td>
					</tr>
				</table>
				<p>If You have not Created Earlier Then <a href="./registraction.php">Register Here</a></p>
			</fieldset>
		</form>
	</center>
</body>
</html>
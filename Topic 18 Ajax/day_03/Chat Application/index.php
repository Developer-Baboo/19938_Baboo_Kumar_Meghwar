<!DOCTYPE html>
<html>

<head>
	<title>Group Chat Application</title>
	<style>
		
		a {
			text-decoration: none;

		}
	</style>
</head>

<body>
	<h1 align="center" style="color: red">Group Chat Application</h1>
	<center>
		<fieldset style="width:40%">
			<div>
				<?php if (isset($_REQUEST['msg'])) {
				?> <p style="color:<?php echo $_REQUEST['color'] ?>"><?php echo $_REQUEST['msg'] ?></p>

				<?php
				}
				?>
			</div>
			<legend>Login Here..</legend>
			<form action="process.php" method="POST">
				<table>

					<tr>
						<td>Email:</td>
						<td><input type="email" name="email" required placeholder="Enter Your Email"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" placeholder="Enter Your Password"></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="login" value="Login" style="color: white;background: green;padding:5px;border-radius: 10px;font-weight:bold;">
							<input type="submit" name="cancel" value="Cancel" style="color: white;background: red;padding: 5px;border-radius: 10px;font-weight: bold">

						</td>
					</tr>

				</table>
			</form>
			<a href="register.php">Please Register Account</a>
		</fieldset>
		<br><br>
	</center>

</body>

</html>
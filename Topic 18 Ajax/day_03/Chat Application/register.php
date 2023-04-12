<!DOCTYPE html>
<html>
<head>
	<title>..::Chat-Application::..</title>
	<style type="text/css">
		fieldset{
			/*color: white;*/
			/*background: #4a69bd;*/
			padding: 20px;
			font-weight: bold;
		}
		legend{
			background: red;
			height:20px;
			padding: 5px;
			border-radius: 20px;
			color: white;
			font-weight: bold;
		}
		a{
			text-decoration: none;
			/*color: white;*/
		}
	</style>
</head>
<body>
      <h1 align="center" style="color: red">Chat Application</h1>
      <hr>
      <center>
		<fieldset style="width:40%">
			<div>
				<?php
                if(isset($_REQUEST['msg']))
                {
                ?>	
                <p style="color: green"><?php echo $_REQUEST['msg'];?></p>
                <?php
                }
				?>
			</div>
			<legend>Register Here..</legend>
			<form action="process.php" method="POST">
				<table>
					    <tr>
							<td>Firstname:</td>
							<td><input type="text" name="first_name" required placeholder="Enter Your First Name"></td>
						</tr>
						<tr>
							<td>Lastname:</td>
							<td><input type="text" name="last_name" required placeholder="Enter Your Last Name"></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="email" name="email" required placeholder="Enter Your Email"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password" placeholder="Enter Your Password"></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input type="submit" name="register" value="Register" style="color: white;background: green;padding:5px;border-radius: 10px;font-weight:bold;">
							 <input type="submit" name="cancel" value="Cancel" style="color: white;background: red;padding: 5px;border-radius: 10px;font-weight: bold">	
                            
							</td>
						</tr>
				
				</table>
			</form>
			<br>
		<a href="index.php">Please Sign Your Account</a>
		</fieldset>
		<br><br>
        </center>
</body>
</html>
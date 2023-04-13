<?php
setcookie("username","hello");
if(isset($_COOKIE['username']))
	{
		?>
			<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title></title>
				</head>
				<body style="background-color:lightgreen;" >

				</body>
				</html>
			<p style="color:red" >Hello World</p>
		<?php
	}
	else
	{
		echo "Hello World";
	}
?>

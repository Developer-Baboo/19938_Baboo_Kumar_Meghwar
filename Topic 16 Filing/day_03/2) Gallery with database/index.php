<!DOCTYPE html>
<html>
<head>
	<title>Upload Images</title>
	<link rel="stylesheet" type="text/css" href="./CSS/style.css">
</head>
<body>
	<center>
		<h1>Upload Images</h1>
		<hr />
		<fieldset style="width:50%">
			<legend>Upload File</legend>
			<form action="./muti_image_send.php" method="POST" enctype="multipart/form-data">
				<table cellpadding="10">
					<tbody>
						<tr>
							<th>Choose Multiple Images</th>
							<td>
								<input type="file" name="multiple_file[]" multiple />
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" name="send" value="Send" accept="images/*" required />
							</td>
						</tr>

					</tbody>
				</table>
			</form>
		</fieldset>
	</center>
</body>
</html>
<?php


?>
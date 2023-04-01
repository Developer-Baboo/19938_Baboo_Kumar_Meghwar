<!DOCTYPE html>
<html>

<head>
	<title>Upload Images</title>
</head>

<body>
	<center>
		<h1>Upload Images</h1>
		<hr />
		<?php
		// if (isset($_REQUEST['msg'])) {
		// 	echo "<p style='color:" . $_REQUEST['color'] . "'>" . $_REQUEST['msg'] . "</p>";
		// }
		?>
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
								<input type="submit" name="send" value="Send" accept="images/*" />
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
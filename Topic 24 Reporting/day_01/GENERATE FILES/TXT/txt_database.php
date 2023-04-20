<?php
require_once("require/connection.php");
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Data</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}

		h1 {
			text-align: center;
			font-size: 32px;
			margin-top: 50px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 30px;
		}

		table th,
		table td {
			padding: 10px;
			border: 1px solid #ccc;
		}

		table th {
			background-color: #f1f1f1;
		}

		a.download-btn {
			display: inline-block;
			padding: 10px 10px;
			background-color: #4CAF50;
			color: #fff;
			text-align: center;
			font-size: 16px;
			border-radius: 4px;
			text-decoration: none;
			/* margin-top: 10px; */
		}

		a.download-btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>
	<h1>User Data</h1>
	<?php
	if ($result->num_rows > 0) { ?>
		<center>
			<a href="txt_database_process.php" class="download-btn">Download TXT</a>
		</center>
		<table>
			<tr>
				<th>User id</th>
				<th>Full name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Status</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['user_id']; ?></td>
					<td><?php echo $row['full_name']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['user_email']; ?></td>
					<td><?php echo $row['is_active']; ?></td>
				</tr>
			<?php
			}
			?>
		</table>
	<?php } else {
		echo "<p style='color:red; text-align:center;'>NO Record Found</p>";
	}
	?>
</body>

</html>
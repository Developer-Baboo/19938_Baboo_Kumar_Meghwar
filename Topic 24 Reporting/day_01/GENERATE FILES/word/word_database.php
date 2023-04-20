<?php
require_once("require/connection.php");
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-top: 20px;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 20px auto;
			font-size: 14px;
		}

		th,
		td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: #f2f2f2;
		}

		a {
			display: block;
			width: 150px;
			height: 40px;
			background-color: #4CAF50;
			color: white;
			text-align: center;
			line-height: 40px;
			border-radius: 5px;
			margin: 20px auto;
			text-decoration: none;
			font-size: 16px;
		}

		a:hover {
			background-color: #3e8e41;
		}

		p {
			color: red;
			text-align: center;
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<center>
		<h1>User Data </h1>
	</center>
	<?php
	if ($result->num_rows > 0) { ?>
		<center>
			<a href="word_database_process.php">Download Word</a>

			<table border="1">
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
		</center>
	<?php } else {
		echo "<p style='color:red; text-align:center;'>NO Record Found</p>";
	}
	?>

</body>

</html>
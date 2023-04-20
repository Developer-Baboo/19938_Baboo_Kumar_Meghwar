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
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			font-size: 36px;
			margin-top: 50px;
			margin-bottom: 30px;
			color: #333;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 0 auto;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
		}

		th,
		td {
			padding: 10px;
			text-align: center;
			border: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: #fff;
			font-weight: bold;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.btn {
			display: inline-block;
			padding: 12px 24px;
			background-color: #4CAF50;
			color: #fff;
			text-align: center;
			font-size: 16px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			text-decoration: none;
			margin-bottom: 30px;
		}

		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>
	<h1>User Data</h1>
	<?php
	require_once("require/connection.php");
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if ($result->num_rows > 0) { ?>
		<center>
			<a href="exel_database_process.php" class="btn">Download Excel</a>
			<br>
			<table>
				<tr>
					<th>User ID</th>
					<th>Full Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Status</th>
				</tr>
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['full_name']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['user_email']; ?></td>
						<td><?php echo $row['is_active']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</center>
	<?php } else {
		echo "<p style='color:red; text-align:center;'>NO Record Found</p>";
	}
	?>
</body>

</html>
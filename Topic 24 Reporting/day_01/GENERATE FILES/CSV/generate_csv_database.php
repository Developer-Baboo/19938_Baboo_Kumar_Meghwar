<?php
	require_once("require/connection.php");
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if($result->num_rows > 0)
	{
		$filename = "files/my_csv_file_database.csv";
		$file_resource = fopen($filename, "w");
		$heading = array("ID", "Fullname", "Gender", "Email", "Password", "Status");
		fputcsv($file_resource, $heading);
		while($row = mysqli_fetch_assoc($result))
		{
			fputcsv($file_resource, $row);
		}
	}
	else
	{
		echo "<p style='color:red;'>No Record Found</p>";
	}
?>
<?php 
require_once("require/connection.php");
$file_resource=fopen("files/my_csv_file_database.csv", "r");
$counter=0;
while ($data=fgetcsv($file_resource)) {
	
	if ($counter==0) {
		$counter++;
		continue;
	}
	$counter++;
	$query="INSERT INTO users VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."')";
	$result=mysqli_query($connection,$query);	
}
if ($result) {
		echo --$counter."Records  Inserted";
}



?>
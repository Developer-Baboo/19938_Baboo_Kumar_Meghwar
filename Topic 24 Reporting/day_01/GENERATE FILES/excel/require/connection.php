<?php 
mysqli_report(false);
$connection= mysqli_connect("localhost","root","","blog_management_system");
	if (mysqli_connect_errno()) {
		echo "<p style='color:red;'>Database Connection Problem".mysqli_connect_error()."</p>";
	}
?>
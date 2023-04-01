<?php
$connection=mysqli_connect("localhost","root","","gallery_database");

if(mysqli_connect_errno())
{
	// die("Error Message:".mysql_connect_error());
    die ("Database connection Failed");
}
?>
<?php
$connection=mysqli_connect("localhost","root","","user_login_with_image");

if(mysqli_connect_errno())
{
	// die("Error Message:".mysql_connect_error());
    die ("Database connection Failed");
}
?>
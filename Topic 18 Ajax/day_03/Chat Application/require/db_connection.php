<?php

$connection=mysqli_connect('localhost','root','','chat_application');
if(mysqli_connect_error())
{
	echo "<p style='color:red'>Connection Failed</p>";

}else{
	// echo "Database connection seccess";
}
?>
<?php
$connection=mysqli_connect("localhost","root","","user_login_with_image");

if ($connection) {
	echo "connect";
}else{
	echo"no";
}
?>
<?php

include "config.php";

if($_SESSION["user_role"] == '0'){
header("Location: post.php");
}

$userid = $_GET['id'];
$sql = "DELETE FROM user WHERE user_id = {$userid}";

if(mysqli_query($conn, $sql)){
	header("Location: users.php");
}

mysqli_close($conn);


?>
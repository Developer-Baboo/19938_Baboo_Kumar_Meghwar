<?php
session_start();
require_once('require/db_connection.php');
if(isset($_SESSION['user']))
{
$query="UPDATE users set is_online=0 where user_id=".$_SESSION['user']['user_id'];
$result=mysqli_query($connection,$query);
session_destroy();
header("Location:index.php?color=green&msg=Your Account Logout Successfully.... ");
}

?>
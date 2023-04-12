<?php
if(!isset($_REQUEST['user']))
{
	header("Location:index.php?color=green&msg=Please Login First Into Your Account");
}
?>
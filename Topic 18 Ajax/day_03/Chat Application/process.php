<?php

session_start();
require_once('require/db_connection.php');
if(isset($_POST['login']))
{
	 extract($_POST);

	 echo $query="SELECT * FROM users where email='".$email."' AND password='".$password."'";
	 
	 $result=mysqli_query($connection,$query);
	 
	 if($result->num_rows)
	 {
	 	$row=mysqli_fetch_assoc($result);
	 	// var_dump($row);

	 	 $_SESSION['user']=$row;
	 	 
       header('Location:chat.php?color=green&msg=Your Account Logged Successfully');
	 }
	 else{
       header('Location:index.php?color=red&msg=Your Email Or Password incorrect');
	 	// echo "not working";


	 }

}

if(isset($_POST['register']))
{
	extract($_POST);

	$query="INSERT INTO users (first_name,last_name,email,password)
           values('".$first_name."','".$last_name."','".$email."','".$password."')";
    $result=mysqli_query($connection,$query);
    if($result)
    {
    	header("Location:register.php?msg=New User Register Successfully");
    }       
}

	//$query="SELECT *FROM users,chat WHERE users.user_id=chat.user_id";
?>
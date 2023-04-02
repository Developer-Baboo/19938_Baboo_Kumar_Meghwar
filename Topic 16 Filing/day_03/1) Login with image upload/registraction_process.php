<?php
require_once("./Include/connection.php");
if (isset($_POST['register'])) 
{
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $contact = $_POST['phone_number'];
  $cnic_number = $_POST['cnic'];
  $gender = $_POST['gender'];
  $city = $_POST['city'];
  $password = $_POST['password'];
  $file_name = $_FILES['profile_image']['name'];
  $file_tmp = $_FILES['profile_image']['tmp_name'];

  $insert = mysqli_query($connection, "INSERT INTO registraction_table (`first_name`,`middle_name`,`last_name`,`email_address`,`contact_number`,`cnic_number`,`gender`,`city`,`password`) VALUES('" . $first_name . "','" . $middle_name . "','" . $last_name . "','" . $email . "','" . $contact . "','" . $cnic_number . "','" . $gender . "','" . $city . "','" . $password . "')");
  
  $last_user_id= mysqli_insert_id($connection);

  $upload_dir = 'Images/';
  $file_path = $upload_dir . $file_name;
  // echo $file_path;
  move_uploaded_file($file_tmp, $file_path);

  $sql = "INSERT INTO image_table (image_name,user_id) VALUES ('$file_path',$last_user_id)";
  $sql_query = mysqli_query($connection, $sql);
  if ($insert && $sql_query) 
  {
    header("location: index.php");
  } 
  else 
  {
    echo "Data not inserted";
  }
}
?>
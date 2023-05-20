<?php
require_once('../require/connection.php');
/*************************User Update his Profile********************/
if (isset($_REQUEST['edit_profile'])) {
    if (isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
        $file_name = "profile_image_" . time() . substr($file['name'], strpos($file['name'], "."));
        if (move_uploaded_file($file['tmp_name'], "../images" . $file_name)) {
            date_default_timezone_set("Asia/Karachi");
            $update_time = date('Y-m-d h:i:s');
            $query = "UPDATE user SET first_name='" . $_REQUEST['first_name'] . "',last_name='" . $_REQUEST['last_name'] . "',password='" . $_REQUEST['password'] . "',gender='" . $_REQUEST['gender'] . "',date_of_birth='" . $_REQUEST['dob'] . "',user_image='" . $file_name . "',address='" . $_REQUEST['address'] . "', updated_at='" . $update_time . "' WHERE user_id='" . $_REQUEST['user_id'] . "' ";
            $result = mysqli_query($connection, $query);
            var_dump($result);
            if ($result) {
                header("location:approved_users.php?color=green&msg=User Edit Successfully");
            } 
            else {
                header("location:apporved_users.php?message= Sorry User Not Edited....!");
            }
        }
    }
}
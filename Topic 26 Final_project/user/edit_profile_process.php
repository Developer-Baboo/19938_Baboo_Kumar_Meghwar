

<?php
session_start();
require_once('../require/connection.php');
/*************************Update Profile********************/
if (isset($_REQUEST['edit_profile'])) {
    if (isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
        $file_name = "profile_image_" . time() . substr($file['name'], strpos($file['name'], "."));
        if (move_uploaded_file($file['tmp_name'], "../images/" . $file_name)) {
            date_default_timezone_set("Asia/Karachi");
            $update_time = date('Y-m-d h:i:s');
            $query = "UPDATE user SET first_name='" . $_REQUEST['first_name'] . "',last_name='" . $_REQUEST['last_name'] . "',password='" . $_REQUEST['password'] . "',gender='" . $_REQUEST['gender'] . "',date_of_birth='" . $_REQUEST['dob'] . "',user_image='" . $file_name . "',address='" . $_REQUEST['address'] . "', updated_at='" . $update_time . "' WHERE user_id='" . $_REQUEST['user_id'] . "' ";
            $result = mysqli_query($connection, $query);
            // var_dump($result);
            if ($result) {
                $query = "SELECT * FROM user WHERE user.user_id = '" . $_REQUEST['user_id'] . "'";
                $result = mysqli_query($connection, $query);
                $row  = mysqli_fetch_assoc($result);
                $_SESSION['User'] = $row;
                header("location:../index.php?color=green&msg=Profile Updated Successfully");
            } 
            else {
                header("location:edit_profile.php?message= Sorry Profile  Not Updated....!");
            }
        }
    }
}
?>
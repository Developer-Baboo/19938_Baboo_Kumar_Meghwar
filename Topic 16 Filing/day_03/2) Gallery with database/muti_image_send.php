<?php
require_once("./Include/connection.php");
if (isset($_REQUEST['send'])) {
    $count = 0;
    $folder = "Images";
    if (!is_dir($folder)) {
        if (!mkdir($folder)) {
            $message = "Folder Not Created";
            header("location:index.php?msg=$message&color=red");
            die;
        }
    }

    foreach ($_FILES['multiple_file']['name'] as $key => $value) {
        $originalname = $_FILES['multiple_file']['name'][$key];
        $filename = rand() . "_" . $_FILES['multiple_file']['name'][$key];
        $temp_name = $_FILES['multiple_file']['tmp_name'][$key];

        if (move_uploaded_file($temp_name, $folder . "/" . $filename)) {
            $count++;
        }
    }
    if ($count > 0) {
        $message = $count . " Files Uploaded";
        header("location:index.php?msg=$message&color=green");
        die;
    } else {
        $message = "Files Not Uploaded";
        header("location:index.php?msg=$message&color=red");
        die;
    }

    




















}
?>
<?php
$connection = mysqli_connect('localhost', 'root', '', 'school_management_system');
if(!$connection)
{
    echo ("Error No: ".mysqli_connect_errno());
    die("Connection failed...");
}
echo "Connection created successfully";
?>
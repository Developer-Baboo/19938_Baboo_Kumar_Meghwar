<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


 $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed"); 

    $sql = "INSERT INTO student_01(sname, saddress,sclass, sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
    
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");


    mysqli_close($conn);

?>
<?php
echo $stu_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed"); 

    $sql = "DELETE FROM student_01 WHERE sid = {$stu_id}";
    
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");

    mysqli_close($conn);

?>
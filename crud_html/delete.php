<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){

    $stu_id = $_POST['sid'];
    $conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed"); 

    $sql = "DELETE FROM student_01 WHERE sid = {$stu_id}";
    
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");

    mysqli_close($conn);
}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>

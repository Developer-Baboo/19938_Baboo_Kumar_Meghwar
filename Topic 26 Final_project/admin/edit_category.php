<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();
 include("../require/connection.php");

if (!isset($_SESSION['Admin'])) {
    header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
?>
<html>

<head>
    <!-- datab table  -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- data table  -->
    <title> .::ONLINE BLOGGING APPLICATION::. </title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
    if(isset($_REQUEST['edit_category'])){
        // echo "hello";
       

        $updated_at = date('Y-m-d h:i:s');
        echo $update_query = "UPDATE category SET category_title = '".$_REQUEST['category_title']."',category_description='".$_REQUEST['category_description']."',$updated_at";
        $result = mysqli_query($connection, $update_query);
        var_dump($result);
        if($result){
            header("Location: category.php");
        }
    }
    ?>

    <center>
        <fieldset>
            <legend>Edit Category</legend>
       

        <form style="width:50%" class="row g-3" method="POST" action="" enctype="multipart/form-data">
            <?php 
                if(isset($_GET['category_id'])){
                    // include("../require/connection.php");
                    $category_id = $_GET['category_id'];
                    $query = "SELECT * FROM category WHERE category_id = $category_id";
                    $result = mysqli_query($connection, $query); 
                    $row = mysqli_fetch_assoc($result);
                }
                
            ?>
            <div class="col-md-6">
                <label for="posttitle" class="form-label">Category Title</label>
                <input value="<?php echo $row['category_title']; ?>"  type="text" value="" class="form-control" id="firstname" name="category_title" required placeholder="Enter Category Title">
            </div>

            <div class="col-md-6">
                <label for="inputState" class="form-label">Category STATUS</label>
                <select id="inputState" class="form-select" name="category_status">
                    <option value="active">ACTIVE</option>
                    <option value="Female">INACTIVE</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="postdecription" class="form-label">Category Description</label>
                <input value="<?php echo $row['category_description']; ?>" type="text" class="form-control" id="lastname" name="category_description" required placeholder="Enter Category Description">
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary" type="submit" name="edit_category" value="edit">
            </div>
        </form>
         </fieldset>
    </center>
    <?php require_once("../General/footer.php") ?>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
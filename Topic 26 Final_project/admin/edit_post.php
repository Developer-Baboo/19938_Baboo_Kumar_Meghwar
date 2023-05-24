<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index_01.php?msg=Sorry! Only Admin can Access It !...&color=red");
}
?>
<!DOCTYPE html>
<html>

<head>
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
  <title> .: Online Blogging Application :. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<?php
include("../require/connection.php");
if (isset($_REQUEST['edit_post'])) {
	// echo "edit post";
    if (isset($_FILES['upload'])) {
    	echo "upload";
        $file = $_FILES['upload'];
        $file_name = "post_image_" . time() . substr($file['name'], strpos($file['name'], "."));
        if (move_uploaded_file($file['tmp_name'], "../images/" . $file_name)) {
            // echo "uploaded file";
            // $date = date('Y-m-d', strtotime($_REQUEST['dob']));
            date_default_timezone_set("Asia/Karachi");
            $updated_at = date('Y-m-d h:i:s');
// echo $_REQUEST['post_title'];

            // $update_time = date('Y-m-d h:i:s');
            $query = "UPDATE post SET post_title = '" . $_REQUEST['post_title'] . "',post_summary = '" . $_REQUEST['post_summary'] . "',$updated_at";
            $result1 = mysqli_query($connection, $query);
            // var_dump($result1);
            if ($result1) {
                header("Location: posts.php");
            }
        }
    }
}
?>
<center>
  <fieldset>
    <legend>
      EDIT POST FORM
    </legend>
<form style="width: 80%" class="row g-3" method="POST" action="" enctype="multipart/form-data">
	 <?php

            if(isset($_GET['post_id'])){


                // echo "<pre>";
                //   print_r($_GET);
                // echo "</pre>";

                $post_id = $_GET['post_id'];
                $query1 = "SELECT * from post WHERE post_id = $post_id";
                $result1 = mysqli_query($connection,$query1);
                // var_dump($result1);
                $row1 = mysqli_fetch_assoc($result1);   
                // echo "<pre>";
                // print_r($row1);
                // echo "</pre";
            }
            ?>
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Title</label>
                      <input value="<?php echo $row1['post_title'] ?>" type="text" class="form-control" name="post_title" required placeholder="Enter Post Title">
                    </div>
                    <div class="col-md-6">
                      <label for="postdecription" class="form-label">Post Description</label>
                      <input value="<?php echo $row1['post_description'] ?>" type="text" class="form-control" name="post_description" required placeholder="Enter Post Description">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Choose Category</label>
                      <select class="form-select" name="choose_category">
                        <?php
                        require("../require/connection.php");
                        $sql = "SELECT category_title FROM category";
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['category_title'] . '">' . $row['category_title'] . '</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Choose Blog</label>
                      <select class="form-select" name="choose_blog">
                        <?php
                        require("../require/connection.php");
                        $sql = "SELECT blog_id, blog_title FROM blog";
                        $result = mysqli_query($connection, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['blog_id'] . '">' . $row['blog_title'] . '</option>';
                          }
                        }
                        ?>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">POST STATUS</label>
                      <select id="inputState" class="form-select" name="is_active">
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="INACTIVE">INACTIVE</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Comment Permission</label>
                      <select id="inputState" class="form-select" name="comment_permission">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="image" class="form-label">Upload Featured Image</label>
                      <input type="file" class="form-control" name="upload" id="image">
                    </div>
                    <div class="col-md-6">
                      <?php //echo $row['post_summary'] ?>
                      <label  class="form-label">Post Summary</label>
                      <input value="<?php echo $row1['post_summary'];?>" type="text" class="form-control" name="post_summary" required placeholder="Enter Post Title">
                    </div>
                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                      <button style="margin-top:10px; margin-bottom: 10px; margin-right: 700px"  type="submit" class="btn btn-primary" name="edit_post">Edit POST</button>
                    </div>
                  </form>
  
  </fieldset>

</center>
                  <?php require_once("../General/footer.php") ?>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
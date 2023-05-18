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
  <title> .::Online Blogging Application::. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script type="text/javascript">
    function register() {
      const forms = document.querySelectorAll('.needs-validation')
      // alert(forms);

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    }
  </script>
</head>

<body>
  <?php

  include("../require/connection.php");

  if (isset($_REQUEST['add_blog'])) {
    // echo $_REQUEST['blog_title'];
    // var_dump(expression)

    if (isset($_FILES['blog_background_image'])) {
      // echo "hello world";
      // $file = $_FILES['upload'];
      $file = $_FILES['blog_background_image'];
      $file_name = "blog_image_" . time() . substr($file['name'], strpos($file['name'], "."));

      if (move_uploaded_file($file['tmp_name'], "../images/blogs/" . $file_name)) {
        // "success";
        $date = date('Y-m-d');
        date_default_timezone_set("Asia/Karachi");
        $current_time = date('Y-m-d h:i:s');

        $query1 = "INSERT into blog (user_id, blog_title, post_per_page, blog_background_image, blog_status, created_at) VALUES('" . $_SESSION['Admin']['user_id']."','" . $_REQUEST['blog_title'] . "','" . $_REQUEST['post_blog'] . "', '" . $file_name . "','".$_REQUEST['blog_status']."' ,'" . $current_time . "')";
        // var_dump($query1);
        $result1 = mysqli_query($connection, $query1);
        if (!$result1) {
          echo "Query execution failed: " . mysqli_error($connection);
        }
        else{
            ?>
          <script type="text/javascript">
            alert('Blog Created Successfully!...');
          </script>
  <?php
        }
      }
    }
  }
  ?>
  <div class="row">
    <!-- side bar start -->
    <?php require_once("../General/side_bar.php"); ?>
    <!-- side bar end -->

    <div class="col-lg-8 col-md-8">
      <div class="row">
        <!-- Add Blog Modal -->
        <div class="col-md-12">
          <!-- <div>
          </div> -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Add BLOG</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Blog Title</label>
                      <input type="text" class="form-control" id="firstname" name="blog_title" required placeholder="Enter Blog Title">
                    </div>
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">BACKGROUND IMAGE</label>
                      <input type="file" class="form-control" name="blog_background_image" id="image">
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">BLOG STATUS</label>
                      <select id="inputState" class="form-select" name="blog_status">
                        <option value="active">ACTIVE</option>
                        <option value="Inactive">INACTIVE</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Per Blog</label>
                      <input type="number" class="form-control" id="post_per_page" name="post_blog" required placeholder="Enter Number">
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="add_blog">Add Blog</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Add Blog Modal -->


         <!-- Edit Blog Modal -->
        <div class="col-md-12">
          <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Edit BLOG</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Blog Title</label>
                      <input type="text" class="form-control" id="firstname" name="blog_title" required placeholder="Enter Blog Title">
                    </div>
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">BACKGROUND IMAGE</label>
                      <input type="file" class="form-control" name="blog_background_image" id="image">
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">BLOG STATUS</label>
                      <select id="inputState" class="form-select" name="blog_status">
                        <option value="active">ACTIVE</option>
                        <option value="Inactive">INACTIVE</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Per Blog</label>
                      <input type="number" class="form-control" id="post_per_page" name="post_blog" required placeholder="Enter Number">
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="add_blog">Edit Blog</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Edit Blog Modal -->


      </div>

      <!-- Table Data start here -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($connection, $query);
            if ($result->num_rows) {
          ?>
          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD BLOG</button>
            </div>
            <div class="col-lg-6">
              <h1>ALL Created BLOGS </h1>
            </div>
          </div>
          <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>BLOG ID</th>
                  <th>USER NAME</th>
                  <th>BLOG TITLE</th>
                  <th>POST PER PAGE</th>
                  <th>BLOG BACKGROUND IMAGE</th>
                  <th>BLOG STATUS</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                      // print_r($row);
              ?>
              <tbody>
                <td><?php echo $row['blog_id'] ?></td>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['blog_title'] ?></td>
                <td><?php echo $row['post_per_page'] ?></td>
                <td><img src="../images/blogs/<?php echo $row['blog_background_image'] ?>" width="50px" style="border-radius: 50px"></td>
                <td><?php echo $row['blog_status'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td>
                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo" onclick="getUserID(<?php echo $row['blog_id']; ?>)">Edit</a>
                    <script>
                            function getUserID(blogID) {
                              // Perform any desired operations with the user ID
                              console.log("Blog ID:", blogID);
                              // You can also pass the user ID to a function or make an AJAX request, etc.
                              // For example, to redirect to the approved_users.php page with the user ID:
                              // window.location.href = "approved_users.php?user_id=" + userID;
                            }
                          </script>
                </td>
              </tbody>
              <?php
                }
              ?>
            </table>
          </div>
          <?php
          }
            ?>
        </div>
      </div>
      <!-- Table data end here -->
    </div>
  </div>

  <?php require_once("../General/footer.php") ?>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        paging: true,
        lengthChange: true,
        lengthMenu: [10, 25, 50, 75, 100],
        searching: true,
      });
    });
  </script>
</body>

</html>
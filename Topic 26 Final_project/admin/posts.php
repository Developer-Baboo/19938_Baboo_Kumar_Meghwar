<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index.php?msg=Sorry! Only Admin can Access It !...&color=red");
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
  <div class="row">
    <!-- SIDE BAR START -->
    <?php require_once("../General/side_bar.php"); ?>
    <!-- SIDE BAR End -->
    <?php
    include("../require/connection.php");
    if (isset($_REQUEST['add_post'])) {
      if (isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
        $file_name = "post_image_" . time() . substr($file['name'], strpos($file['name'], "."));

        if (move_uploaded_file($file['tmp_name'], "../images/" . $file_name)) {
          // $date = date('Y-m-d', strtotime($_REQUEST['dob']));
          date_default_timezone_set("Asia/Karachi");
          $current_time = date('Y-m-d h:i:s');
          $selected_blog_id = $_POST['choose_blog'];
          $query1 = "INSERT INTO post (post_title, post_summary, post_description, featured_image, post_status, is_comment_allowed, created_at, blog_id)
           VALUES ('" . $_REQUEST['post_title'] . "','" . $_REQUEST['post_summary'] . "','" . $_REQUEST['post_description'] . "','" . $file_name . "','" . $_REQUEST['is_active'] . "','" . $_REQUEST['comment_permission'] . "','" . $current_time . "'," . $selected_blog_id . ")";
          $result1 = mysqli_query($connection, $query1);
        }
      }
    }
    ?>
    <div class="col-lg-8 col-md-8">
      <div class="row">
        <!-- Add Post Modal -->
        <div class="col-md-12">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Create POST</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Title</label>
                      <input type="text" class="form-control" name="post_title" required placeholder="Enter Post Title">
                    </div>
                    <div class="col-md-6">
                      <label for="postdecription" class="form-label">Post Description</label>
                      <input type="text" class="form-control" name="post_description" required placeholder="Enter Post Description">
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
                      <label for="posttitle" class="form-label">Post Summary</label>
                      <input type="text" class="form-control" id="firstname" name="post_summary" required placeholder="Enter Post Title">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="add_post">Add POST</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Post Modal End -->
        <div class="row">
          <!-- view post model -->
          <div class="col-md-12">
            <div class="modal fade" id="viewPOstModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" style="max-width: 600px;">
                <div class="modal-content">
                  <div class="modal-header">
                    <center>
                      <h3 style="color: green; text-align: center;">View POST</h3>
                    </center>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                    <h1 style="font-size: 24px; font-weight: bold;">Post Id: 01</h1>
                    <h1 style="font-size: 24px; font-weight: bold;">Blog Id: 01</h1>
                    <h1 style="font-size: 24px; font-weight: bold;">Post Title: Blockchain</h1>
                    <h1 style="font-size: 24px; font-weight: bold;">Post Summary</h1>
                    <p style="font-size: 16px; line-height: 1.5; text-align: justify; ">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator</p>
                    <h1 style="font-size: 24px; font-weight: bold; ">Post Description</h1>
                    <p style="font-size: 16px; line-height: 1.5; text-align: justify">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    <h1 style="font-size: 24px; font-weight: bold;">Image</h1>
                    <img src="../images/12.jpg" alt="" height="100%" width="100%">
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- view post model end -->

          <!-- Post Table -->
          <div style="margin-left:-10px;" class="col-lg-12 col-md-12">
            <span><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD NEW POST</button></span>
            <?php
            require_once("../require/connection.php");
            // $query = "SELECT * FROM post";
            $query = "SELECT post.*, blog.blog_id
                      FROM post
                      INNER JOIN blog ON post.blog_id = blog.blog_id;";
            // var_dump($query);
            $result = mysqli_query($connection, $query);
            // var_dump($result);
            // die();
            if ($result->num_rows) {
            ?>
              <center>
<!--                 <span style="font-size: 20px">All POSTS</span>
 -->                <h2>All POSTS</h2>
              </center>
              <div style="margin-left: -100px; " class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead class="thead-dark">
                    <tr>
                      <th>POST ID</th>
                      <th>BLOG ID</th>
                      <th scope="col">POST Title</th>
                      <th scope="col">POST Summary</th>
                      <th scope="col">POST Description </th>
                      <th scope="col">View Post</th>
                      <th scope="col">Featured Image</th>
                      <th scope="col">POST Status</th>
                      <th scope="col">Comment Allowed</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Updated At</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <tbody>
                      <td><?php echo $row['post_id'] ?></td>
                      <td><?php echo $row['blog_id'] ?></td>
                      <td><?php echo $row['post_title'] ?></td>
                      <td><?php echo $row['post_summary'] ?></td>
                      <td><?php echo $row['post_description'] ?></td>
                      <td>
                        <a href="view_post.php">View POST</a>
                      </td>
                      <td><img src="../images/<?php echo $row['featured_image'] ?>" width="50px" style="border-radius: 50px"></td>
                      <td><?php echo $row['post_status'] ?></td>
                      <td><?php echo $row['is_comment_allowed'] ?></td>
                      <td><?php echo $row['created_at'] ?></td>
                      <td><?php echo $row['created_at'] ?></td>
                      <td>
                        <a href="edit_post.php?post_id=<?php echo $row['post_id'] ?>">Edit</a>
                      </td>
                    </tbody>
                  <?php
                  }
                  ?>
                </table>
                <div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
          <!-- Post Modal Table -->
        </div>
      </div>
    </div>
  </div>
  <?php require_once("../General/footer.php") ?>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
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
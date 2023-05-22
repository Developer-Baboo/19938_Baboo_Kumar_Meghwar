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

</head>

<body>

  <?php
  include("../require/connection.php");
  if (isset($_REQUEST['add_category'])) {
    // echo $_REQUEST['category_title'];
    // echo $_REQUEST['category_description'];
    // echo $_REQUEST['category_status'];
    // $date = date('Y-m-d');
    date_default_timezone_set("Asia/Karachi");
    $current_time = date('Y-m-d h:i:s');

    $query1 = "INSERT into category (category_title, category_description, category_status,created_at) VALUES('" . $_REQUEST['category_title'] . "','" . $_REQUEST['category_description'] . "','" . $_REQUEST['category_status'] . "','" . $current_time . "')";
    // var_dump($query1);
    $result1 = mysqli_query($connection, $query1);
    // $result1 = mysqli_query($connection, $query1);
    if (!$result1) {
      echo "Query execution failed: " . mysqli_error($connection);
    }
    // var_dump($result1);
    // echo "<pre>";
    //   print_r($result1);
    // echo "</pre>";
    else {
      // echo "string";
  ?>
      <script type="text/javascript">
        alert('Category Created Successfully!...');
      </script>
  <?php
    }
    // }
    // }
  }
  ?>


  <div class="row">
    <!-- SIDE BAR START -->
    <?php require_once("../General/side_bar.php"); ?>
    <!-- SIDE BAR End -->
    <div class="col-lg-8 col-md-8">
      <div class="row">
        <!-- Add Category Modal -->
        <div class="col-md-12">
          <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD NEW Category</button>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Add Category</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Category Title</label>
                      <input type="text" class="form-control" id="firstname" name="category_title" required placeholder="Enter Category Title">
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
                      <input type="text" class="form-control" id="lastname" name="category_description" required placeholder="Enter Category Description">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="add_category">Add Category</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- Add Category Modal End -->


        <!-- Edit Category Model -->
        <div class="col-md-12">
          <!-- div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalEdit" data-bs-whatever="@mdo">Edit Category</button>
        </div> -->
        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width: 100%">
              <div class="modal-header">
                <center>
                  <h3 style="font-family: times;color: green; text-align: center; ">Edit Category</h3>
                </center>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                  <div class="col-md-6">
                    <label for="posttitle" class="form-label">Category Title</label>
                    <input type="text" class="form-control" id="firstname" name="category_title" required placeholder="Enter Category Title">
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
                    <input type="text" class="form-control" id="lastname" name="category_description" required placeholder="Enter Category Description">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="add_category">Edit Category</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- edit Category Model -->
      <!-- Category data table -->
      <div class="row">
        <div class="col-md-12">
          <?php
          $query = "SELECT * FROM category";
          $result = mysqli_query($connection, $query);
          if ($result->num_rows) {
          ?>
            <center>
              <h1>ALL Categories</h1>
            </center>
            <div class="table-responsive">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-dark">
                  <tr>
                    <th>Categories ID</th>
                    <th>Category Title</th>
                    <th scope="col">Category Description </th>
                    <th scope="col">Category Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  // print_r($row);
                ?>
                  <tbody>
                    <td><?php echo $row['category_id'] ?></td>
                    <td><?php echo $row['category_title'] ?></td>
                    <td><?php echo $row['category_description'] ?></td>
                    <td><?php echo $row['category_status'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td>1999999</td>
                    <!-- <td><?php //echo $row['category_id'] 
                              ?></td> -->
                    <td><a href="./edit_category.php?user_id=<?php echo $row['category_id']; ?>" class="btn btn-info">Edit</a></td>
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
      <!-- Category Data table end -->
    </div>
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
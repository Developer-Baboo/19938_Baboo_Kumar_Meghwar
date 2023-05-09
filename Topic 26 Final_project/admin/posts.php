<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) =='Admin') {
    header("location:../index_01.php");
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
    <div class="col-lg-4 col-md-4">
      <main>
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; background-color: #5DADE2">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="../images/logo.png" width="50px">
            <span class="fs-10">Online Blogging Application</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li>

              <a href="./admin_dashboard.php" class="nav-link text-white">
                <img src="../images/icons/dashboard.svg" width="10%" height="10%">
                Admin Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a href="./posts.php" class="nav-link active" aria-current="page">
                <img src="../images/icons/post.svg" width="10%" height="10%">
                MANAGE POSTS
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <img src="../images/icons/category.svg" width="10%" height="10%">
                MANAGE CATEGORIES
              </a>
            </li>
            <li>
              <a href="./all_users.php" class="nav-link text-white">
                <img src="../images/icons/user.svg" width="10%" height="10%">
                MANAGE USERS
              </a>
            </li>
            <li>
              <i class="fas fa-comment"></i>
              <a href="./all_comments.php" class="nav-link text-white">
                <img src="../images/icons/comment.svg" width="10%" height="10%">
                MANAGE COMMENTS
              </a>
            </li>
            <li>
              <i class="fas fa-comment"></i>
              <a href="./all_attachements.php" class="nav-link text-white">
                <img src="../images/icons/comment.svg" width="10%" height="10%">
                MANAGE ATTACHEMENTS
              </a>
            </li>

            <li>
              <a href="./feedbacks.php" class="nav-link text-white">
                <img src="../images/icons/feedback.svg" width="10%" height="10%">
                MANAGE FEEDBACKS
              </a>
            </li>
            <li>
              <a href="./follower.php" class="nav-link text-white">
                <img src="../images/icons/thumb.png" width="10%" height="10%">
                MANAGE FOLLOWERS
              </a>
            </li>
            <li>
              <a href="./create_blog.php" class="nav-link text-white">
                <img src="../images/icons/blog.svg" width="10%" height="10%">
                MANAGE BLOGS
              </a>
            </li>
          </ul>
          <hr>
          <div style="padding-top: 100px;" class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../images/profile_image_1683396936.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Baboo Kumar</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#"> <img src="../images/icons/setting.svg" width="10%" height="10%"> Settings</a></li>
              <li><a class="dropdown-item" href="#"> <img src="../images/icons/user.svg" width="10%" height="10%"> Profile</a></li>
              <li>
                <i class="fas fa-angle-right"></i>
                <a class="dropdown-item" href="../logout.php"><img src="../images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>
    <!-- /END SIDE BAR/ -->

    <div class="col-lg-8 col-md-8">
      <div class="row">
        <div class="col-md-12">
          <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD NEW POST</button>
          </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <center>
                    <h3 style="font-family: times;color: green; text-align: center; ">Add POST</h3>
                  </center>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Title</label>
                      <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="Enter Post Title">
                    </div>
                    <div class="col-md-6">
                      <label for="postdecription" class="form-label">Post Description</label>
                      <input type="text" class="form-control" id="lastname" name="last_name" required placeholder="Enter Post Description">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Choose Category</label>
                      <select id="inputState" class="form-select" name="gender">
                        <option selected>Block Chain</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Choose Blog</label>
                      <select id="inputState" class="form-select" name="gender">
                        <option selected>Block Chain</option>
                        <option value="Male">IOT</option>
                        <option value="Female">Information</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">POST STATUS</label>
                      <select id="inputState" class="form-select" name="gender">
                        <option value="Male">ACTIVE</option>
                        <option value="Female">INACTIVE</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Comment Permission</label>
                      <select id="inputState" class="form-select" name="gender">
                        <option value="Male">YES</option>
                        <option value="Female">NO</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="image" class="form-label">Upload Featured Image</label>
                      <input type="file" class="form-control" name="upload" id="image">
                    </div>
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Summary</label>
                      <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="Enter Post Title">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="register">Add POST</button>
                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class class="row">
          <div style="margin-left:-10px;" class="col-lg-12 col-md-12">
            <center>
              <h1>ALL POSTS</h1>
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
                    <th scope="col">Featured Image</th>
                    <th scope="col">POST Status</th>
                    <th scope="col">Comment Allowed</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <th>1</th>
                    <td>1</td>
                    <td>Block Chain</td>
                    <td>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a documen</td>
                    <td> is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</td>
                    <!-- <td>files/cv.pdf</td> -->
                    <td>tech.jpg</td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Active
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          InActive
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          YES
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          NO
                        </label>
                      </div>
                    </td>
                    <td>2023-9-1</td>
                    <td>2023-9-8</td>
                    <td>
                      <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th>1</th>
                    <td>1</td>
                    <td>Block Chain</td>
                    <td>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a documen</td>
                    <td> is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</td>
                    <!-- <td>files/cv.pdf</td> -->
                    <td>tech.jpg</td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Active
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          InActive
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          YES
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          NO
                        </label>
                      </div>
                    </td>
                    <td>2023-9-1</td>
                    <td>2023-9-8</td>
                    <td>
                      <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th>1</th>
                    <td>1</td>
                    <td>Block Chain</td>
                    <td>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a documen</td>
                    <td> is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</td>
                    <!-- <td>files/cv.pdf</td> -->
                    <td>tech.jpg</td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Active
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          InActive
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          YES
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          NO
                        </label>
                      </div>
                    </td>
                    <td>2023-9-1</td>
                    <td>2023-9-8</td>
                    <td>
                      <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th>1</th>
                    <td>1</td>
                    <td>Block Chain</td>
                    <td>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a documen</td>
                    <td> is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</td>
                    <!-- <td>files/cv.pdf</td> -->
                    <td>tech.jpg</td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Active
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          InActive
                        </label>
                      </div>
                    </td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          YES
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                          NO
                        </label>
                      </div>
                    </td>
                    <td>2023-9-1</td>
                    <td>2023-9-8</td>
                    <td>
                      <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div>
              </div>
            </div>
          </div>
        </div>
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
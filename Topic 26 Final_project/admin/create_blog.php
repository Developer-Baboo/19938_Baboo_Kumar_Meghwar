<!DOCTYPE html>
<html>

<head>
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
  <div class="row">
    <!-- side bar start -->
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
                <a class="dropdown-item" href="#"><img src="../images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>
    <!-- side bar end -->

    <div class="col-lg-8 col-md-8">
      <div class="row">
        <div class="col-md-12">
          <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD BLOG</button>
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
                      <label for="image" class="form-label">ADD ATTACHEMENT </label>
                      <input type="file" class="form-control" name="upload" id="image">
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
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <center>
            <h1>ALL Created BLOGS </h1>
          </center>
          <div class="table-responsive">
            <table class="table-striped " id="table" style="width:100%" cellpadding="4px">
              <thead>
                <tr>
                  <th>BLOG ID</th>
                  <th>USER ID</th>
                  <th>BLOG TITLE</th>
                  <th>POST PER PAGE</th>
                  <th>BLOG STATUS</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>Health</td>
                  <td>2</td>
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
                  <td>2023-9-1</td>
                  <td>2023-9-1</td>
                  <td>
                    <a href="">Edit</a> || <a href="">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>1</td>
                  <td>Technology</td>
                  <td>3</td>
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
                  <td>2023-10-1</td>
                  <td>2023-9-1</td>
                  <td>
                    <a href="">Edit</a> || <a href="">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>2</td>
                  <td>Sports</td>
                  <td>5</td>
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
                  <td>2023-10-15</td>
                  <td>2023-9-1</td>
                  <td>
                    <a href="">Edit</a> || <a href="">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>3</td>
                  <td>Travel</td>
                  <td>4</td>
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
                  <td>2023-11-1</td>
                  <td>2023-9-1</td>
                  <td>
                    <a href="">Edit</a> || <a href="">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

    <!-- <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-6">Add BLOG</h1>
          <hr>
        </div>
      </div>
    </div>
    <form style="width:50%;" class="row g-3 needs-validation border rounded shadow-lg my-5 " novalidate>
      <div class="col-md-6">
        <label for="firstName" class="form-label">BLOG Title</label>
        <input type="text" class="form-control" id="firstName" required>
        <div class="invalid-feedback">
          Please enter BLOG title.
        </div>
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">POST PER PAGE</label>
        <input type="number" class="form-control" id="post_per_page" required>
        <div class="invalid-feedback">
          Please enter post per page.
        </div>
      </div>

      <div class="col-md-12">
        <label for="profilePic" class="form-label">Upload Background Image</label>
        <input type="file" class="form-control" id="profilePic" required>
        <div class="invalid-feedback">
          Please upload a Background Image.
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary mx-5" type="submit" onclick="register()">ADD BLOG</button>
      </div>
      <br>
    </form> -->

    <!-- all Comments -->
  </div>

  <footer class="footer-main bg-dark text-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-8">
          <h5 class="mb-3">About Us</h5>
          <center>
            <p class="text-white" style="text-align:justify;">We are an online blogging application developed by Developer Baboo Kumar 19938 Intern @ HIST Jamshoro. Our goal is to provide a platform for people to share their thoughts and ideas with the world.</p>
          </center>
        </div>
        <div class="col-md-4">
          <h5 class="mb-3">Contact Us</h5>
          <ul class="list-unstyled">
            <li>Address: 123 Main St, Anytown USA</li>
            <li>Phone: (555) 555-5555</li>
            <li>Email: info@onlineblogging.com</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="bg-secondary text-light py-3">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0">&copy; <script>
                document.write(new Date().getFullYear())
              </script> All rights reserved | Online Blogging Application</p>
          </div>
          <div class="col-md-6 text-center text-md-end text-white">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="#" style="color:white; text-decoration: none;">Privacy Policy</a></li>
              <li class="list-inline-item">·</li>
              <li class="list-inline-item"><a href="#" style="color:white; text-decoration: none; ">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
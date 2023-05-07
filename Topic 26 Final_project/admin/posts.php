<!DOCTYPE html>
<html>

<head>
  <title> .: Online Blogging Application :. </title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <script type="text/javascript">
    function register() {
      const forms = document.querySelectorAll('.needs-validation')
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
    <!-- SIDE BAR START -->
    <div class="col-lg-4 col-md-4">
      <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="width: 280px; background-color: #5DADE2">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="../images/logo.png" width="50px">
            <span class="fs-10">Online Blogging Application</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#speedometer2" />
                </svg>
                Admin Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a href="./posts.php" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#writing" />
                </svg>
                MANAGE POSTS
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#speedometer2" />
                </svg>
                MANAGE CATEGORIES
              </a>
            </li>
            <li>
              <a href="./all_users.php" class="nav-link text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
                MANAGE USERS
              </a>
            </li>
            <li>
              <a href="./all_comments.php" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#comments" />
                </svg>
                MANAGE COMMENTS
              </a>
            </li>
            <li>
              <a href="./feedbacks.php" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#feedbacks" />
                </svg>
                MANAGE FEEDBACKS
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../images/profile_image_1683396936.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Baboo Kumar</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
      </main>
    </div>
    <!-- /END SIDE BAR/ -->

    <div class="col-lg-8 col-md-8">
      <div class="row">
        <div class="col-md-12">
          <div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">ADD NEW USERS</button>

            <a href="export_data_user.php"><button class="btn btn-secondary">User Excel Data</button></a>
            <!-- <a href="export_data_user.php"><button class="btn btn-secondary">User PDF Data</button></a>  -->
          </div>
          <div class="text-center" style="color: red; font-family: times; font-size: 18px;">New Users</div>


          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width: 100%">
                <div class="modal-header">
                  <img src="images/logo.png" width="30%">
                  <h3 style="margin-top:40px;font-family: times;color: green">Admin Add Users</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="firstname" class="form-label">Firstname</label>
                      <input type="text" class="form-control" id="firstname" name="first_name" required placeholder="Enter Your Firstname">
                    </div>
                    <div class="col-md-6">
                      <label for="lastname" class="form-label">Lastname</label>
                      <input type="text" class="form-control" id="lastname" name="last_name" required placeholder="Enter Your Lastname">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Gender</label>
                      <select id="inputState" class="form-select" name="gender">
                        <option selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="col-md-6">

                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Your Email">
                    </div>

                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter Your Password">
                    </div>

                    <div class="col-md-6">
                      <label for="date" class="form-label">Date-of-Birth</label>
                      <input type="date" class="form-control" name="dob" id="date">
                    </div>
                    <div class="col-md-6">
                      <label for="image" class="form-label">Upload Profile</label>
                      <input type="file" class="form-control" name="upload" id="image">
                    </div>
                    <div class="col-md-6">
                      <label for="address" class="form-label">Address</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Role</label>
                      <select id="inputState" class="form-select" name="roles">
                        <option selected>Roles</option>
                        <option value="1">Admin</option>
                        <option value="2">Teacher</option>
                        <option value="3">Student</option>
                      </select>
                    </div>

                    <div class="col-12">

                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="register">Add Users</button>
                </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class class="row">
        <div class="col-md-12">
          <center>
            <h1>ALL POSTS</h1>
          </center>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead class="thead-dark">
                <tr>
                  <th>POST ID</th>
                  <th>BLOG ID</th>
                  <th scope="col">POST Title</th>
                  <th scope="col">POST Summary</th>
                  <th scope="col">POST Description </th>
                  <th scope="col">POST Attachement</th>
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
                  <td>files/cv.pdf</td>
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
                  <td>files/cv.pdf</td>
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
                  <td>files/cv.pdf</td>
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
                  <td>files/cv.pdf</td>
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
      <!-- Footer Start-->
      <footer>

        <div class="footer-main footer-bg">
          <div class="footer-bottom-area footer-bg">
            <div class="container">
              <div class="footer-border">
                <div class="row d-flex align-items-center">
                  <div class="col-xl-12 ">
                    <div class="footer-copy-right text-center">
                      <p>
                        Copyright &copy;<script>
                          document.write(new Date().getFullYear());
                        </script> All rights reserved | Online Blogging Application Developed by Developer Baboo Kumar 19938 Intern @ HIST Jamshoro
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer End-->
      </footer>
      <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
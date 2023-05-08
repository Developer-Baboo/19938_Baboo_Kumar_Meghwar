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
                <!-- <svg class="bi me-2" width="16" height="16">
                  <use xlink:href="#grid" />
                </svg> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
                MANAGE USERS
              </a>
            </li>
            <li>
              <i class="fas fa-comment"></i>
              <a href="./all_comments.php" class="nav-link text-white">
                MANAGE COMMENTS
              </a>
            </li>
            <li>
              <a href="./feedbacks.php" class="nav-link text-white">
                MANAGE FEEDBACKS
              </a>
            </li>
            <li>
              <a href="./follower.php" class="nav-link text-white">
                MANAGE FOLLOWERS
              </a>
            </li>
            <li>
              <a href="./create_blog.php" class="nav-link text-white">
                MANAGE BLOGS
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
              <li>
                <i class="fas fa-angle-right"></i>
                <a class="dropdown-item" href="#">Sign out</a>
              </li>
            </ul>
          </div>
        </div>
      </main>

    </div>

    <div class="col-lg-8 col-md-8">
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
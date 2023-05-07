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
    
  </center>
  <!-- all Comments -->
  <center>
    <h1>ALL Created BLOGS </h1>
  </center>
  <div class="table-responsive">
    <table class="table table-striped table-hover">
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
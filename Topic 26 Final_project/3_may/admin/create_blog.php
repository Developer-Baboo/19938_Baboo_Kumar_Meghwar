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
  <center>
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
        <textarea class="form-control" id="address" required></textarea>
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
      <!-- <br> -->
    </form>
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
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>Health</td>
          <td>2</td>
          <td>Inactive</td>
          <td>2023-9-1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>1</td>
          <td>Technology</td>
          <td>3</td>
          <td>Active</td>
          <td>2023-10-1</td>
        </tr>
        <tr>
          <td>3</td>
          <td>2</td>
          <td>Sports</td>
          <td>5</td>
          <td>Active</td>
          <td>2023-10-15</td>
        </tr>
        <tr>
          <td>4</td>
          <td>3</td>
          <td>Travel</td>
          <td>4</td>
          <td>Inactive</td>
          <td>2023-11-1</td>
          <td>
            <a href="">Edit</a> || <a href="">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

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
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
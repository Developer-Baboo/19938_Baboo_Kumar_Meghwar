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
  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-6">Add User</h1>
          <hr>
        </div>
      </div>
    </div>
    <form style="width:50%;" class="row g-3 needs-validation border rounded shadow-lg my-5 " novalidate>
      <div class="col-md-4">
        <label for="firstName" class="form-label">First name</label>
        <input type="text" class="form-control" id="firstName" required>
        <div class="invalid-feedback">
          Please enter your first name.
        </div>
      </div>
      <div class="col-md-4">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastName" required>
        <div class="invalid-feedback">
          Please enter your last name.
        </div>
      </div>
      <div class="col-md-4">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" required>
        <div class="invalid-feedback">
          Please enter a valid email address.
        </div>
      </div>
      <div class="col-md-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
        <div class="invalid-feedback">
          Please enter a password.
        </div>
      </div>
      <div class="col-md-4">
        <label for="gender" class="form-label">Gender</label>
        <div>
          <input type="radio" class="form-check-input" id="male" name="gender" required>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div>
          <input type="radio" class="form-check-input" id="female" name="gender" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="invalid-feedback">
          Please select your gender.
        </div>
      </div>
      <div class="col-md-4">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" required>
        <div class="invalid-feedback">
          Please enter your date of birth.
        </div>
      </div>
      <div class="col-md-6">
        <label for="profilePic" class="form-label">Upload Profile Picture</label>
        <input type="file" class="form-control" id="profilePic" required>
        <div class="invalid-feedback">
          Please upload a profile picture.
        </div>
      </div>
      <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" required></textarea>
        <div class="invalid-feedback">
          Please enter your address.
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary mx-5" type="submit" onclick="register()">Add User</button>
      </div>
      <!-- <br> -->
    </form>
  </center>
  <!-- add user end -->
  <!-- all users -->
  <div class="table-responsive">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>User ID</th>
          <th>Role ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>User Image</th>
          <th>Address</th>
          <th>Approval</th>
          <th>Status</th>
          <th>Create At</th>
          <th>Updated At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>1</td>
          <td>Baboo</td>
          <td>Kumar</td>
          <td>baboo@gmail.com</td>
          <td>12345</td>
          <td>Male</td>
          <td>7-8-1990</td>
          <td>profile.jpg</td>
          <td>Mithi Tharparkar</td>
          <td>Accepted</td>
          <td>Active</td>
          <td>2023-9-1</td>
          <td>2023-9-8</td>
          <td>
            <a href="">Edit</a> || <a href="">Delete</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>1</td>
          <td>Akash</td>
          <td>Kumar</td>
          <td>akash.kumar@example.com</td>
          <td>54321</td>
          <td>Male</td>
          <td>10-10-1980</td>
          <td>avatar.png</td>
          <td>Diplo</td>
          <td>Pending</td>
          <td>Inactive</td>
          <td>2023-9-2</td>
          <td>2023-9-5</td>
          <td>
            <a href="">Edit</a> || <a href="">Delete</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>2</td>
          <td>Monika</td>
          <td>Kumari</td>
          <td>moniak.com</td>
          <td>98765</td>
          <td>Female</td>
          <td>5-12-1995</td>
          <td>profile.jpg</td>
          <td>Islamkot</td>
          <td>Accepted</td>
          <td>Active</td>
          <td>2023-9-3</td>
          <td>2023-9-10</td>
          <td>
            <a href="">Edit</a> || <a href="">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
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
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
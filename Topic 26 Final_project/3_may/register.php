<!Doctype html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>Register Here</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
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
  <!-- nav start -->
  <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5DADE2">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" style="width: 50px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index_01.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/politics.php">Politics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/buisness.php">Buisness</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/health.php">Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/Sport.php">Sport</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./pages/about_us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Us</a>
          </li>
        </ul>
        <!-- <button style="background-color: #5DADE2" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Us</button> -->
        <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">Login</button>
        <!-- <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"><a class="nav-link active " aria-current="page" href="register.php">Register</a></button> -->
      </div>
    </div>
  </nav>
  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-6">Register Here</h1>
          <hr>
        </div>
      </div>
    </div>
    <form style="width:50%" class="row g-3 needs-validation border rounded shadow-lg my-5 " novalidate>
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
        <button class="btn btn-primary mx-5" type="submit" onclick="register()">Submit form</button>
      </div>
      <!-- <br> -->
    </form>
    <!-- </fieldset> -->
    <!-- Login Model Here -->
    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Here</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-12 position-relative">
                <label for="validationTooltipUsername" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                  <input type="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Please choose a unique and valid username.
                  </div>
                </div>
              </div>
              <div class="col-md-12 position-relative">
                <label for="validationTooltipPassword" class="form-label">Password</label>
                <div class="input-group has-validation">
                  <input type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                    Password Must 8 to 12 Character
                  </div>
                </div>
              </div>
              <div class="col-12">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Login Here</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- login model end -->
    <!-- Modal Contact Us -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Message Here</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send Message</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Contact Us End -->


  </center>
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

  <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
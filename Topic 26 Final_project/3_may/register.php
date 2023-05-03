<!Doctype html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
  <title>Register Here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
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
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    // (() => {
    // 		'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to

    // })()
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
            <a class="nav-link active" aria-current="page" href="index.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
              </svg>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#our_courses">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#our_team">Politics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#about_us">Buisness</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#contact_us">Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#contact_us">Sport</a>
          </li>
        </ul>
        <button style="background-color: #5DADE2" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg>
          Contact Us
        </button>
        <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin">Login</button>
        <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"><a class="nav-link active " aria-current="page" href="register.php">Register</a></button>
        <!-- <button class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropRegister">Register</button> -->
        <!-- <ul>

                </ul> -->


      </div>
    </div>
  </nav>
  <center>
    <fieldset>
      <legend>Register Here</legend>
      <form style="width:50%" class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Password</label>
          <input type="password" class="form-control" id="validationCustom01" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Gender</label>
          <input type="radio" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Upload Profile</label>
          <input type="file" class="form-control" id="validationCustom02" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Address</label>
          <textarea class="form-control" id="validationCustom02" value="" required></textarea>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" onclick="register()">Submit form</button>
        </div>
      </form>
    </fieldset>

  </center>
  <footer>
    <!-- Footer Start-->
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
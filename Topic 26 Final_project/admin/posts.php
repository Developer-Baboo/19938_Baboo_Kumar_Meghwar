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
  <!-- add user start -->

  <center>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="display-6">Add POST</h1>
          <hr>
        </div>
      </div>
    </div>
    <form style="width:50%;" class="row g-3 needs-validation border rounded shadow-lg my-5 " novalidate>
      <div class="col-md-4">
        <label for="firstName" class="form-label">POST Title</label>
        <input type="text" class="form-control" id="firstName" required>
        <div class="invalid-feedback">
          Please enter post title.
        </div>
      </div>
      <div class="col-md-8">
        <label for="address" class="form-label">POST SUMMARY</label>
        <textarea class="form-control" id="address" required></textarea>
        <div class="invalid-feedback">
          Please enter post summary.
        </div>
      </div>

      <div class="col-md-4">
        <label for="firstName" class="form-label">POST Category</label>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose POST Category
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="invalid-feedback">
          Please Choose post Category.
        </div>
      </div>
      <div class="col-md-4">
        <label for="address" class="form-label">POST Attachement</label>
        <input type="file" class="form-control" id="postattachment" required>
        <div class="invalid-feedback">
          Please upload a Post Attachement.
        </div>
      </div>
      <div class="col-md-4">
        <label for="firstName" class="form-label">Choose Blog</label>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose Blog
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="invalid-feedback">
          Please Choose any Blog.
        </div>
      </div>

      <div class="col-md-8">
        <label for="address" class="form-label">POST Description</label>
        <textarea class="form-control" id="address" required></textarea>
        <div class="invalid-feedback">
          Please enter post description.
        </div>
      </div>
      <div class="col-md-4">
        <label for="profilePic" class="form-label">Upload featured image</label>
        <input type="file" class="form-control" id="profilePic" required>
        <div class="invalid-feedback">
          Please upload a Featured Image.
        </div>
      </div>


      <div class="col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Active Post
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="post_status" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            InActive Post
          </label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
            Show Comments
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="comment_status" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Hide Comments
          </label>
        </div>
      </div>

      div
      <div class="col-12">
        <button class="btn btn-primary mx-5" type="submit" onclick="register()">ADD POST</button>
      </div>
      <!-- <br> -->
    </form>
  </center>
  <!-- add user end -->
  <!-- all users -->
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
      <!-- all end users -->
      <!-- Nav End Here -->
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
      <!-- <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>
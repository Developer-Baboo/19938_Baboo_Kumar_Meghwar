<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin'])) {
  header("location:../index.php?msg=Sorry! Only Admin can Access It !...&color=red");
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
  <fieldset>
    <legend>
      Edit Blog
    </legend>
    <form style="width:50%" class="row g-3" method="POST" action="" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">EDIT BLOG BELOW</label>
                      <input type="text" class="form-control" id="firstname" name="blog_title" required placeholder="Enter Blog Title">
                    </div>
                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">BACKGROUND IMAGE</label>
                      <input type="file" class="form-control" name="blog_background_image" id="image">
                    </div>

                    <div class="col-md-6">
                      <label for="inputState" class="form-label">BLOG STATUS</label>
                      <select id="inputState" class="form-select" name="blog_status">
                        <option value="active">ACTIVE</option>
                        <option value="Inactive">INACTIVE</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label for="posttitle" class="form-label">Post Per Blog</label>
                      <input type="number" class="form-control" id="post_per_page" name="post_blog" required placeholder="Enter Number">
                    </div>

                    <div class="modal-footer">
                      <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                      <button type="submit" class="btn btn-primary" name="add_blog">Edit Blog</button>
                    </div>
                  </form>
  </fieldset>
</center>
<?php require_once("../General/footer.php") ?>
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
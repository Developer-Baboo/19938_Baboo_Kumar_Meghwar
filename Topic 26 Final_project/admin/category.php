<?php
session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (!isset($_SESSION['Admin']['role_type']) =='Admin') {
    header("location:../index_01.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> .: Online Blogging Application :. </title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body>

    <center>
        <h1>ALL Categories</h1>
    </center>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Categories ID</th>
                    <th>Category Title</th>
                    <th scope="col">Category Description </th>
                    <th scope="col">Category Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Block Chain</td>
                    <td>Block Chain</td>
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
                    <td>2023-9-8</td>
                    <td>
                        <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Block Chain</td>
                    <td>Block Chain</td>
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
                    <td>2023-9-8</td>
                    <td>
                        <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Block Chain</td>
                    <td>Block Chain</td>
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
                    <td>2023-9-8</td>
                    <td>
                        <a href="">Edit</a> || <a href="">Delete</a>
                    </td>
                </tr>
                <tr>
                    <th>1</th>
                    <td>Block Chain</td>
                    <td>Block Chain</td>
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
            <?php require_once("../General/footer.php") ?>
            <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
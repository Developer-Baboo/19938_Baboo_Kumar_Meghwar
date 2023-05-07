<!DOCTYPE html>
<html>

<head>
    <title> .::ONLINE BLOGGING APPLICATION::. </title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="row">
        <!-- SIDE BAR START -->
        <div class="col-lg-3 col-md-3">
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
                            <li><a class="dropdown-item" href="#">Change Settings</a></li>
                            <li><a class="dropdown-item" href="#">View Profile</a></li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </main>
        </div>
        <!-- /END SIDE BAR/ -->
        <div class="col-lg-9 col-md-9">
            <center>
                <h1>ALL USERS COMMENTS</h1>
            </center>
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Comment ID</th>
                            <th>Post ID</th>
                            <th>User ID</th>
                            <th>Comment</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>Your post content is awesome</td>
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
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1</td>
                            <td>2</td>
                            <td>Thanks for sharing this information</td>
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
                            <td>2023-9-3</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>Great post!</td>
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
                            <td>2023-9-5</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2</td>
                            <td>3</td>
                            <td>Very helpful article</td>
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
                            <td>2023-9-7</td>
                        </tr>
                    </tbody>
                </table>
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
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
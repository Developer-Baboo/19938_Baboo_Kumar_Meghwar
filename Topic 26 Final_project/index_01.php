<?php
session_start();
?>
<?php
// session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (isset($_SESSION['Admin'])) {
  header("location:./admin/admin_dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        .nav-item {
            margin-right: 10px;
        }

        .nav-link {
            font-size: 50px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: red;
        }

        .search-input {
            margin-right: 100px;
        }

        #carouselExampleAutoplaying {
            margin-top: 10px;
        }
    </style>
    <title> .::Online Blogging Application::.</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <div id="message">
        <?php
        if (isset($_GET['msg'])) {
        ?>
            <center>
                <p style="color:white; font-size: 20px; padding: 10px ;background-color: <?php echo $_GET['color']; ?>">
                    <?php echo $_GET['msg']; ?>
                </p>
            </center>
        <?php
        }
        ?>
    </div>
    <!-- 1nd nav start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index_01.php"><img src="images/logo.png" style="width: 100px;"></a>
            <form class="d-flex mx-auto">
                <div class="col-sm-12 col-md-8">
                    <input class="form-control w-100 search-input" type="search" placeholder="Search news here" aria-label="Search">
                </div>
                <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                    <button class="btn btn-outline-secondary w-100" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <div class="d-flex">
                <?php if (isset($_SESSION['User']) && $_SESSION['User']['is_approved'] == 'Approved' && $_SESSION['User']['is_active'] === 'Active') {
                    // var_dump($_SESSION['User']['user_image']);
                ?>
                    <!-- User is logged in -->

                    <!-- update -->
                    <div class="dropdown" style="margin-right: 90px;">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./images/<?php echo $_SESSION['User']['user_image']; ?>" width="32px" height="32" class="rounded-circle me-2">
                            <strong style="color:black"><?php echo $_SESSION['User']['first_name'] . ' ' . $_SESSION['User']['last_name']; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="background-color: #5DADE2;">
                            <li><a class="dropdown-item" href="#"> <img src="./images/icons/setting.svg" width="10%" height="10%"> Settings</a></li>
                            <li><a class="dropdown-item" href="./user/edit_profile.php"> <img src="./images/icons/user.svg" width="10%" heigh?t="10%"> Edit Profile</a></li>
                            <li>
                                <i class="fas fa-angle-right"></i>
                                <a class="dropdown-item" href="logout.php"><img src="./images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php } else { ?>
            <!-- User is not logged in -->
            <button class="btn btn-outline-secondary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin" style="margin-right: 10px;">Login</button>
            <button class="btn btn-outline-primary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"><a class="nav-link active " aria-current="page" href="register.php">Register</a></button>
            <div class="social-media-icons mx-2">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        <?php } ?>
        </div>
        </div>
    </nav>
    <!-- 1nd nav end -->
    <!-- 2nd nav start -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5DADE2;z-index:0">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
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
                        <a class="nav-link active " aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 2nd Nav End Here -->
    <!-- Slider -->
    <div class="container mt-10">
        <div class="row">
            <div class="col-md-8">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="border-radius: 10px;" src="./images/1.jpeg" class="d-block w-100" alt="No Images" style="height:740px;">
                        </div>
                        <div class="carousel-item">
                            <img style="border-radius: 10px;" src="./images/sport/2.jpg" class="d-block w-100" alt="No Image" style="height:420px;">
                        </div>
                        <div class="carousel-item">
                            <img style="border-radius: 10px;" src="./images/buisness/3.jpg" class="d-block w-100" alt="No Image" style="height:440px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Tending Post  -->
            <div class="col-md-4">
                <div class="row">
                    <center>
                        <h4>Trending Posts</h4>
                    </center>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/sport/01.jpg" height="100px" width="100px" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/health/01.jpeg" height="100px" width="100px" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/health/1.jpg" height="100px" width="100px" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, </p>
                    </div>
                </div>
            </div>
            <!-- Trending pOst ends  -->
        </div>
    </div>
    <!-- Slider End -->
    <marquee style="color:green; font-size: 20px; background-color: white; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel dolorum cupiditate delectus </marquee>

    <!-- New Section Start-->
    <div class="container mt-10">
        <div class="row">
            <!-- Recent News Sections  -->
            <div class="col-md-6">
                <div class="row">
                    <center>
                        <h4>Recent News</h4>
                    </center>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/politics/03.jpg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/sport/02.jpg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/buisness/08.jpeg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                </div>
            </div>
            <!-- Top Stories -->
            <div class="col-md-6">
                <div class="row">
                    <center>
                        <h4>Top Stories</h4>
                    </center>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/buisness/04.jpeg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/health/08.jpg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                    <div class="col-md-4">
                        <img style="border-radius: 10px;" src="./images/sport/04.jpg" height="90%" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Model Here -->
    <div class="modal fade" id="staticBackdropLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Login Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="login_process.php" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                                <input type="email" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Password</label>
                            <div class="input-group has-validation">
                                <input name="password" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
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
                    <!-- <button name="forgot_password" id="forgot_password" class="btn btn-success" type="submit">Forgot Password</button> -->
                    <a href="forgot_password.php" class="btn btn-success">Forgot Password</a>
                    <button name="login" id="login" class="btn btn-primary" type="submit">Login Here</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login Model end -->



    <!-- Modal Contact Us -->
        <?
            if(isset($_POST['login']));
            {
                echo $_REQUEST['email'];
                =
            }

        ?>


       div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Feedback Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="login_process.php" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Name</label>
                            <div class="input-group has-validation">
                                <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                                <input type="name" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input name="email" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Password Enter Valid User Email
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Feedback</label>
                            <div class="input-group has-validation">
                                <input name="password" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please Enter Feedback in Proper Way
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="login" id="login" class="btn btn-primary" type="submit">Send Feedback</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Contact Us End -->

    <!-- Footer  -->
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
    <!-- Footer Ends -->
    <script type="text/javascript" src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        setTimeout(function() {
            var messageElement = document.getElementById('message');
            if (messageElement) {
                messageElement.style.display = 'none';
            }
        }, 1000); // 1 seconds in milliseconds
    </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <style>
        .nav-item {
            margin-right: 10px;
        }

        .nav-link {
            font-size: 50px;
            font-family: Arial, sans-serif;
            font-weight: bold;
            /* color: #FFF; */
            text-transform: uppercase;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: red;
            /* text-decoration: none; */
        }

        #carouselExampleAutoplaying {
            margin-top: 10px;
        }
    </style>
    <title> .: Online Blogging Application :. </title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <!-- 1st Nav Bar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index_01.php"><img src="../images/logo.png" style="width: 100px;"></a>
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
                            <img src="../images/<?php echo $_SESSION['User']['user_image']; ?>" width="32px" height="32" class="rounded-circle me-2">
                            <strong style="color:black"><?php echo $_SESSION['User']['first_name'] . ' ' . $_SESSION['User']['last_name']; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="background-color: #5DADE2;">
                            <li><a class="dropdown-item" href="#"> <img src="../images/icons/setting.svg" width="10%" height="10%"> Settings</a></li>
                            <li><a class="dropdown-item" href="../user/edit_profile.php"> <img src="../images/icons/user.svg" width="10%" height="10%"> Edit Profile</a></li>
                            <li>
                                <i class="fas fa-angle-right"></i>
                                <a class="dropdown-item" href="../logout.php"><img src="../images/icons/logout.svg" width="10%" height="10%"> Sign out</a>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php } else { ?>
            <!-- User is not logged in -->
            <button class="btn btn-outline-secondary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin" style="margin-right: 10px;">Login</button>
            <button class="btn btn-outline-primary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"><a class="nav-link active " aria-current="page" href="../register.php">Register</a></button>
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
    <!-- 2 nav start -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5DADE2; z-index: 0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index_01.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="./politics.php">Politics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="./buisness.php">Buisness</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="./health.php">Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="./Sport.php">Sport</a>
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
    <!-- Nav End Here -->
</body>

</html>
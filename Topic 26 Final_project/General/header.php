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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index_01.php"><img src="../images/logo.png" style="width: 100px;"></a>
            <form class="d-flex mx-auto">
                <div class="col-sm-12 col-md-8">
                    <input class="form-control w-100" type="search" placeholder="Search news here" aria-label="Search">
                </div>
                <div class="col-sm-12 col-md-4 mt-3 mt-md-0">
                    <button class="btn btn-outline-secondary w-100" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
            <div class="d-flex">
                <button class="btn btn-outline-secondary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin" style="margin-right: 10px;">Login</button>
                <button class="btn btn-outline-primary" class="btn" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdropLogin"><a class="nav-link active " aria-current="page" href="../register.php">Register</a></button>
                <div class="social-media-icons mx-2">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- 1nd nav end -->
    <!-- nav start -->
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #5DADE2">
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
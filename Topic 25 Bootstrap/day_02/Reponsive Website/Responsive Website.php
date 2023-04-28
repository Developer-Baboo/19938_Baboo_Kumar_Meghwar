<!DOCTYPE html>
<html lang="en">

<head>
  <i class="fas fa-accessible-icon "></i>
  <title>E-Commerce Website</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/M.png" alt="Logo" width="60" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./about.html">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
          </span>
        </div>
      </div>
    </nav>
    <!-- Nav Bar End -->

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/p1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/p2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./images/dd1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- carousel End -->

    <!-- CARd with icon -->
    <div class="mainCard">
      <div class="card1">
        <div>
          <i class="fa fa-truck" aria-hidden="true"></i>
        </div>
        <div>
          <h3>Free Shipping</h3>
        </div>
      </div>
      <div class="card2">
        <div>
          <i class="fa fa-headphones" aria-hidden="true"></i>
        </div>
        <div>
          <h3>24/7 Support</h3>
        </div>
      </div>
      <div class="card3">
        <div>
          <i class="fa fa-thumbs-up" aria-hidden="true"></i>
        </div>
        <div>
          <h3>Best Quality</h3>
        </div>
      </div>
    </div>
    <!-- CARd with icon End -->
    <!-- New Arrivals  -->
    <div class="newArrivals">
      <div class="heading">
        <h1>New Arrivals</h1>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/burger.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Cheese Burger</h5>
                <p class="card-text">Rs: 500</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/pizza.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Small Size Pizza</h5>
                <p class="card-text">Rs: 250</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/burger2.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Burger</h5>
                <p class="card-text">Rs: 600</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/chicken.jpg" class="card-img-top" alt="Burger">
              <div class="Hi">
                <h5 class="card-title">Chicken Tikka</h5>
                <p class="card-text">Rs: 800</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/shahi.jpg" class="card-img-top" alt="Burger">
              <div class="Hi">
                <h5 class="card-title">Shahi Tukda</h5>
                <p class="card-text">Rs: 800</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="./images/kaba.png" class="card-img-top" alt="Burger">
              <div class="Hi">
                <h5 class="card-title">Kabab</h5>
                <p class="card-text">Rs: 800</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- New Arrivals -->
    <div class="newArrivals">
      <div class="heading">
        <h1>Featured Products</h1>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/tasty roll.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Tasty Roll</h5>
                <p class="card-text">Rs: 300</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/samosas.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Samosas</h5>
                <p class="card-text">Rs: 100</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/Breyani.jpeg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Chicken Breyani</h5>
                <p class="card-text">Rs: 150</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/fires.jpeg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Chicken Fries</h5>
                <p class="card-text">Rs: 200</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/soap.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">Chicken SOA </h5>
                <p class="card-text">Rs: 200</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card">
              <img src="images/egg.jpg" class="card-img-top" alt="...">
              <div class="Hi">
                <h5 class="card-title">EGG Curry</h5>
                <p class="card-text">Rs: 800</p>
                <a href="#" class="btn btn-primary">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div>
        <p class="r">Copyright &#169; Baboo Kumar Heerani all right reserved 2021</p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
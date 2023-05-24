<?php
session_start();
// session_start();
// print_r($_SESSION['Admin']['role_type']);
// die();

if (isset($_SESSION['Admin'])) {
    header("location:./admin/admin_dashboard.php");
}
?>
<?php require_once("../General/header.php") ?>
<!-- Slider -->
<div class="container mt-10">
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="border-radius: 20px;" src="../images/politics/1.jpeg" class="d-block w-100" alt="No Images" style="height:440px;">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px;" src="../images/politics/2.jpg" class="d-block w-100" alt="No Image" style="height:440px;">
                    </div>
                    <div class="carousel-item">
                        <img style="border-radius: 20px;" src="../images/politics/3.jpg" class="d-block w-100" alt="No Image" style="height:440px;">
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
        <!-- Trending Posts -->
        <div class="col-md-4">
            <div class="row">
                <center>
                    <h4>Trending Posts</h4>
                </center>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/01.jpg" height="100px" width="100px" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/02.jpg" height="100px" width="100px" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/03.jpg" height="100px" width="100px" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
            </div>
        </div>
        <!-- Trending Posts End -->
    </div>
</div>
<marquee style="color:green; font-size: 20px; background-color: white; ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel dolorum cupiditate delectus </marquee>
<!-- Slider End -->

<!-- News Sections Start -->
<div class="container mt-10">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <center>
                    <h4>Recent News</h4>
                </center>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/04.jpg" height=" 90%" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/05.jpg" height="90%" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/06.jpg" height="90%" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <center>
                    <h4>Top Stories</h4>
                </center>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/07.jpg" height="90%" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/08.jpg" height="90%" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, libero? Expedita at accusamus vero necessitatibus ipsum, ullam adipisci eligendi veniam ipsa similique </p>
                </div>
                <div class="col-md-4">
                    <img style="border-radius: 10px;" src="../images/politics/09.jpg" height="90%" width="100%" alt="">
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

                    <form method="POST" action="../login_process.php" class="row g-3 needs-validation" novalidate>
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
                    <button name="login" id="login" class="btn btn-primary" type="submit">Login Here</button>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Feedback Here</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="../feedback_process.php" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipUsername" class="form-label">Name</label>
                            <div class="input-group has-validation">
                                <!-- <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span> -->
                                <input type="text" name="name" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 position-relative">
                            <label for="validationTooltipPassword" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <input name="email" type="email" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Password Enter Valid User Email
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="col-md-12 position-relative">
                                <label for="validationTooltipPassword" class="form-label">Feedback</label>
                                <div class="input-group has-validation">
                                    <!-- <input name="feedback" type="password" class="form-control" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required> -->
                                    <textarea class="form-control" name="feedback" id="validationTooltipPassword" aria-describedby="validationTooltipUsernamePrepend" required cols="10" rows="1"></textarea>
                                    <div class="invalid-tooltip">
                                        Please Enter Feedback in Proper Way
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="feedback_button" id="login" class="btn btn-primary" type="submit">Send Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Contact Us End -->
<?php require_once("../General/footer.php") ?>
<script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
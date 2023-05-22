<?php
session_start();
// if (isset($_SESSION['Admin'])) {
//     header("location:./admin/admin_dashboard.php");
// } else if (isset($_SESSION['User'])) {
//     header("location:index_01.php");
// }
?>


<?php
include("../require/connection.php");
if (isset($_REQUEST['edit_user'])) {
    if (isset($_FILES['upload'])) {
        $file = $_FILES['upload'];
        $file_name = "profile_image_" . time() . substr($file['name'], strpos($file['name'], "."));
        if (move_uploaded_file($file['tmp_name'], "../images/" . $file_name)) {
            $date = date('Y-m-d', strtotime($_REQUEST['dob']));
            date_default_timezone_set("Asia/Karachi");
            $updated_at = date('Y-m-d h:i:s');

            $update_time = date('Y-m-d h:i:s');
            $query = "UPDATE user SET first_name='" . $_REQUEST['first_name'] . "',last_name='" . $_REQUEST['last_name'] . "',password='" . $_REQUEST['password'] . "',gender='" . $_REQUEST['gender'] . "',date_of_birth='" . $_REQUEST['dob'] . "',user_image='" . $file_name . "',address='" . $_REQUEST['address'] . "', updated_at='" . $update_at . "' WHERE user_id='" . $_REQUEST['user_id'] . "' ";
            $result1 = mysqli_query($connection, $query);
            if ($result1) {
                header("Location: approved_users.php");
            }
        }
    }
}
?>
<!Doctype html>
<html>
<head>
    <style>
        form {
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s ease-in-out;
            border-radius: 20px;
        }

        form:hover {
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Edit User Here</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="display-6">Edit User Here</h1>
                    <hr>
                </div>
            </div>
        </div>

        <form style="width:50%; margin-bottom: 20px;" method="POST" action="#" enctype="multipart/form-data">
            <?php

            if(isset($_GET['user_id'])){
                $user_id = $_GET['user_id'];
                $query = "SELECT * from user WHERE user_id = $user_id";
                $result = mysqli_query($connection,$query);
                // var_dump($result);
                $row = mysqli_fetch_assoc($result);
                
                // var_dump($row);

            }

            ?>
            <table cellpadding="10px" cellspacing="0px" style="background: skyblue;width: 100%;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px">
                <tr>
                    <td>Firstname:<span>*</span></td>
                    <td><input value="<?php echo $row['first_name'] ?>" type="text" name="first_name" id="first_name" required placeholder="Enter Your Firstname" style="border-radius: 5px;width: 100%;  padding: 6px;"></td>
                    <td><span id="msg_first_name"></span></td>
                </tr>
                <tr>
                    <td>Lastname:<span>*</span></td>
                    <td><input value="<?php echo $row['last_name'] ?>" type="text" name="last_name" id="last_name" required placeholder="Enter Your Lastname" style="border-radius: 5px;width: 100%; padding: 6px;"></td>
                    <td><span id="msg_last_name"></span></td>

                </tr>
                <tr>
                    <td>Gender:<span>*</span></td>
                    <td><input value="<?php echo $row['gender'] ?>" type="radio" name="gender" id="male" value="Male" class="from-control"> Male
                        <input type="radio" name="gender" id="female" value="Female"> Female
                    </td>
                    <td><span id="msg_gender"></span></td>
                </tr>
                <tr>
                    <td>Password<span>*</span></td>
                    <td><input value="<?php echo $row['password'] ?>" type="password" name="password" id="password" required placeholder="Enter Your Password" style="border-radius: 5px;width: 100%;padding: 5px;"></td>
                    <td><span id="msg_password"></span></td>

                </tr>
                <tr>
                    <td>Date-Of-Birth<span>*</span></td>
                    <td><input value="<?php echo $row['date_of_birth'] ?>" type="date" name="dob" id="dob" style="border-radius: 5px;width: 100%;padding: 5px;"></td>
                    <td><span id="msg_dob"></span></td>

                </tr>
                <tr>
                    <td>Image<span>*</span></td>
                    <td><input type="file" name="upload" id="upload" accept=""></td>
                    <td><span id="msg_upload"></span></td>

                </tr>
                <tr>
                    <td>Address<span>*</span></td>
                    <td><textarea value="<?php echo $row['address'] ?>" name="address" id="address" cols="20" rows="3" style="border-radius: 5px;width: 100%;"></textarea> </td>
                    <td><span id="msg_address"></span></td>
                </tr>
                <tr>
                    <td colspan="5" align="center"><input type="submit" name="edit_user" value="Edit" class="btn btn-info" onclick="validation()"> </td>
                </tr>
            </table>
        </form>
        <!-- Modal Contact Us -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Message Here</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Contact Us End -->


    </center>
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

    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
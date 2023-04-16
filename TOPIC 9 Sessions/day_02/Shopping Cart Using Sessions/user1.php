<?php
session_start();
if (isset($_SESSION['username'])) { // check if the user is logged in
    $username = $_SESSION['username'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!Doctype html>
<html>

<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./mystyle.css">
    <style>
        p.solid {
            border-style: solid;
        }
    </style>
</head>

<body style="background-color: lightblue;font-family:Georgia, 'Times New Roman', Times, serif ">
    <!-- <div>
        <h1 style="background-color:chartreuse; padding: 10px; font-weight:bold; border:4px solid black; border-radius: 5px;text-align:center; ">Banner</h1>
    </div> -->
    <div style="border:3px solid black; font-size:30px " class="row">
        <div class="col-12">
            <center>
                <p>Banner</p>
            </center>
        </div>
    </div>
    <div style="border:3px solid black; font-size:20px  " class="row">
        <div class="col-12">
            <center>
                <p style="text-align: center;">Welcome <?php echo $_SESSION['username'] ?> to our shopping cart! Please Choose a category of items and start shopping. </p>
                <p>
                <form action="logout.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
                </p>
            </center>
        </div>
    </div>

    <!-- <div>
        <p class="solid" style="background-color:chartreuse; padding: 10px; font-weight:bold; border:4px solid black; border-radius: 5px;  "> Welcome...ho $_SESSION['username'] ?> </p>
    </div> -->
    <div class="row">
        <div style="background-color:green; margin-right:10px; " class="col-4">
            <center>
                <h2>Categories</h2>
            </center>
            <ul>
                <li><a href="./categories/cosmetics.php">Cosmetics</a></li>
                <li><a href="./categories/grocery.php">Grocery</a></li>
                <li><a href="./categories/general_frouts.php">General Fruits</a></li>
                <li><a href="./categories/general_items.php">Grocery Items</a></li>
            </ul>
        </div>

        <div style="background-color:lightgreen" class="col-8">
            <center>
                <h2>Categories</h2>
            </center>
            <div style="border:4px solid white;background-color:gray;border-radius:10px; padding:70px 10px 70px 10px; margin:10px 40px 10px 5px; float:right ">
                <a href="./categories/general_items.php">General Items</a>
            </div>

            <div style="border:4px solid white; border-radius:10px;padding:70px 30px 70px 30px;margin:10px 40px 10px 5px; background-color:gray; float:right ">
                <a href="./categories/cosmetics.php">Cosmetics</a>
            </div>
            <div style="border:4px solid white; margin:10px 40px 10px 5px; background-color:gray; border-radius:10px; float:right; padding:70px 10px 70px 10px ; ">
                <a href="./categories/general_frouts.php">General Fruits </a>
            </div>
            <div style="border:4px solid white; margin:10px 30px 10px 10px; background-color:gray; border-radius:10px; float:right; padding:70px 40px 70px 40px;">
                <a href="./categories/grocery.php">Grocery</a>
            </div>
        </div>
    </div>
    <div>
        <footer style="background-color:grey; margin:69px 0px -10px 0px ; text-align: center; padding:20px 2px 20px 2px ">
            Copyright Made: by Developer Baboo Kumar Meghwar 2023
            <div>
                <form action="checkout.php" method="post">
                    <button type="submit" name="checkout">Checkout</button>
                </form>
            </div>

        </footer>
    </div>

</body>

</html>
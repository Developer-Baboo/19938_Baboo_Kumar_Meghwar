<?php
session_start();
?>
<!Doctype html>
<html>

<head>
    <title>.::Dashboard DESIGN::.</title>
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
    <div style="border:3px solid black; font-size:30px " class="row">
        <div class="col-12">
            <center>
                <p style="text-align: left;">Welcome...<?php echo $_SESSION['username'] ?> </p>
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
                <h2>Check-cart</h2>
            </center>
            <table border="2px">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                </tr>
                <tr>
                    <td>Makup</td>
                    <td>2000</td>
                    <td>4</td>
                    <td>8000</td>
                </tr>
            </table>
        </div>
    </div>
    <div>
        <footer style="background-color:grey; margin:69px 0px -10px 0px ; text-align: center; padding:20px 2px 20px 2px ">
            Copyright Made: by Developer Baboo Kumar Meghwar 2023
            <a style="float:right" href="./checkout.php">Checkout</a>

        </footer>
    </div>

</body>

</html>
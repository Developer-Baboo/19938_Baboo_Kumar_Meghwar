<?php
session_start();
?>
<!Doctype html>
<html>

<head>
    <title>.::Dashboard DESIGN::.</title>
    <link rel="stylesheet" href="../mystyle.css">
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
                <h2>Grocery Items</h2>
            </center>
            <div style="border:4px solid white;border-radius:10px;  margin:10px 50px 10px 5px; float:right ">
                <img style="text-align:center" src="../images/f1.png" alt="" height="100px" width="200px" alt="">
                <p>Name: ABC</p>
                <p>PRICE: 123</p>
                <span>
                    <input type="number" name="quantity" placeholder="Quantity">
                    <input type="submit" value="Add" name="add">
                </span>
            </div>

            <div style="border:4px solid white; border-radius:10px;margin:10px 50px 10px 5px;float:right ">
                <img src="../images/f2.png" alt="" height="100px" width="200px" alt="">
                <p>Name: ABC</p>
                <p>PRICE: 124</p>
                <span>
                    <input type="number" name="quantity" placeholder="Quantity">
                    <input type="submit" value="Add" name="add">
                </span>
            </div>
            <div style="border:4px solid white; margin:10px 50px 10px 5px; border-radius:10px; float:right;">
                <img src="../images/f3.png" alt="" height="100px" width="200px" alt="">
                <p>Name: ABC</p>
                <p>PRICE: 125</p>
                <span>
                    <input type="number" name="quantity" placeholder="Quantity">
                    <input type="submit" value="Add" name="add">
                </span>
            </div>
            <!-- <div style="border:4px solid white; margin:10px 5px 10px 10px; background-color:gray; padding-right:-200px;  border-radius:10px; float:right;">
                <img src="../images/ee.png" alt="" height="100px" width="10px">
                <p>Name: ABC</p>
                <p>PRICE: 123</p>
                <span>
                    <input type="number" name="quantity" placeholder="Quantity">
                    <input type="submit" value="Add" name="add">
                </span>
            </div> -->
        </div>

    </div>
    <div>
        <footer style="background-color:grey; margin:20px 0px -10px 0px ; text-align: center; padding:20px 2px 20px 2px ">
            Copyright Made: by Developer Baboo Kumar Meghwar 2023
        </footer>
    </div>

</body>

</html>
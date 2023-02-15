<!DOCTYPE html>
<html>

<head>
    <title>This is Page 2</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
    }
    ?>
    <form action="./19938_Baboo_Kumar_Meghwar(page_03).php" method="POST">
        <?php
        if (isset($number)) {
            for ($a = 1; $a <= $number; $a++) {
        ?>
                <input type="text" name="name<?php echo $a; ?>" />
        <?php
            }
        }
        echo "<br>";
        ?>
        <?php
        if (isset($number)) {
            for ($a = 1; $a <= $number; $a++) {
        ?>
                <input type="radio" name="male<?php echo $a; ?>" />
                <input type="radio" name="female<?php echo $a; ?>" />
        <?php
            }
        }
        echo "<br>";
        ?>
        <?php
        if (isset($number)) {
            for ($a = 1; $a <= $number; $a++) {
        ?>
                <select name="select">
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>Bangladesh</option>
                </select>
                <!-- <input type="text" name="name
                <?php //echo $a; 
                ?>
                " /> -->
        <?php
            }
        }
        echo "<br>";
        ?>

        <input type="submit" value="Insert">

    </form>
</body>

</html>
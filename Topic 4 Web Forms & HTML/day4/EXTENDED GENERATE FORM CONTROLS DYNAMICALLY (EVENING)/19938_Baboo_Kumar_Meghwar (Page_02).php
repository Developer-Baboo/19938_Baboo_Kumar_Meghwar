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
    <center>
        <form action="./19938_Baboo_Kumar_Meghwar (Page_03).php" method="POST">
            <table border="3px">
                <?php
                if (isset($number)) {
                    for ($a = 1; $a <= $number; $a++) {
                ?>
                        <tr>
                            <td><label>Name: </label></td>
                            <td><input type="text" name="name <?php echo $a; ?>" /></td>
                        </tr>


                <?php
                    }
                }
                echo "<br>";
                ?>
                <?php
                if (isset($number)) {
                    for ($a = 1; $a <= $number; $a++) {
                ?>
                        <tr>
                            <td><label>Gender</label></td>
                            <td><input type="radio" name="gender <?php echo $a; ?>" value="male" /> Male
                            <input type="radio" name="gender <?php echo $a; ?>" value="female" /> Female
                            </td>
                            <!-- <td></td> -->
                        </tr>

                <?php
                    }
                }
                echo "<br>";
                ?>
                <?php
                if (isset($number)) {
                    for ($a = 1; $a <= $number; $a++) {
                ?>
                        <tr>
                            <td><label>Select Country</label></td>
                            <td><select name="select">
                                    <option>Pakistan</option>
                                    <option>India</option>
                                    <option>Bangladesh</option>
                                </select></td>
                        </tr>
                        <?php //echo $a; 
                        ?>
                <?php
                    }
                }
                echo "<br>";
                ?>


            </table>
            <input type="submit" value="submit">
        </form>
    </center>

</body>

</html>
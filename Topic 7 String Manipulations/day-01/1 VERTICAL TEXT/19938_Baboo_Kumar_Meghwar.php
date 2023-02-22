<!Doctype html>
<html>

<head>
    <title>Vertical Text Assignment</title>
</head>

<body>
    <form method="POST">
        <center>
            <table>
                <tr>
                    <td><label>Enter Text : </label> </td>
                    <td><input type="text" name="value"></td>
                    <td><input type="submit" value="Go!"></td>
                </tr>
            </table>
        </center>
    </form>
    <?php
    $name = $_POST['value'];
    $a = 0;
    for (; isset($name[$a]); $a++) {
    ?>
        <center><?php echo $name[$a] . "<br />";  ?></center>
    <?php

    }
    ?>
</body>

</html>
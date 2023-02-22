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
                    <td><input type="submit" name="submit" value="Go!" /> </td>
                </tr>
            </table>
        </center>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $value = $_POST['value'];
        $calculate = 0;
        // check each character in the string via loop
        for ($a = 0; isset($value[$a]); $a++) {
            if ($value[$a] === 'A' || $value[$a] === 'a') {
                $calculate = $calculate + 1;
            }
        }
        echo "Total a or A is = " . $calculate;
    }
    ?>
</body>

</html>
<!Doctype html>
<html>

<head>
    <title>Escape from text Assignment</title>
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
    $var = '';
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
        // check each character in the string via loop
        for ($a = 0; isset($value[$a]); $a++) {
            if ($value[$a] !== 'A' && $value[$a] !== 'a') {
                $var .= $value[$a];
            }
            // echo "$add";
        }
        echo "$var";
    }
    ?>
</body>

</html>
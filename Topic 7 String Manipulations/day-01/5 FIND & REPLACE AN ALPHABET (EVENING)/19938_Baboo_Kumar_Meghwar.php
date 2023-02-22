<!Doctype html>
<html>

<head>
    <title>5 find and Replace an alphabet</title>
</head>

<body>
    <form method="POST">
        <center>
            <table>
                <tr>
                    <td><label>Find:</label></td>
                    <td><input type="text" name="find"></td>
                    <td><label>Replace:</label></td>
                    <td><input type="text" name="replace"></td>
                </tr>
                <p style="text-align: center;" >
                    <center>
                        <tr>
                            <td><textarea name="value" id="value" cols="50" rows="10"></textarea></td>
                        </tr>
                    </center>
                </p>
                <tr>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            </table>
        </center>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $find = $_POST['find'];
        $replace = $_POST['replace'];
        $value = $_POST['value'];
        for ($a = 0; isset($value[$a]); $a++) {
            if ($find === $value[$a]) {
                $value[$a] = $replace;
            }
        }
        echo "$value";
    }
    ?>
</body>

</html>
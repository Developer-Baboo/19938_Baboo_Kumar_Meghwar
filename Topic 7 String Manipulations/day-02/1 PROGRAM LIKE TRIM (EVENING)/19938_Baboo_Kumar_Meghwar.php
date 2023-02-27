<!Doctype html>
<html>

<head>
    <title>Trim () String</title>
    <style>
        p {
            color: black;
            font-weight: bold;
            background-color: lightcoral;
            font-size: 20px;
            border: 2px solid red;
            padding: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 300px;
            margin-right: 300px;
        }
    </style>
</head>

<body>
    <center>
        <p>Trim () String</p>
        <hr>
        <?php
        $len = 0;
        if (isset($_POST['submit'])) {
            $str = $_POST['value'];
            for ($i = 0; isset($str[$i]); $i++) {
                if ($value[$i] === "") {
                    echo "space present";
                } else {
                    echo "space not present";
                }
                break;
            }
        ?>
            <center>
                <?php
                echo "";
                ?>
            </center>
        <?php
        }
        ?>
        <form method="POST">
            <table>
                <tr>
                    <td><input type="text" name="value"> </td>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
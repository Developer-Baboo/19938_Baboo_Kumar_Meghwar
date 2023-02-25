<!Doctype html>
<html>

<head>
    <title>Reverse String</title>
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
        <p>Reverse String</p>
        <!-- <br> -->
        <hr>
        <?php
        if (isset($_POST['submit'])) {
            $str = $_POST['value'];
            $len = 0;
            while (isset($str[$len])) {
                $len++;
            }
            $new_str = "";
            $i = $len - 1;
            while ($i >= 0) {
                $new_str .= $str[$i];
                $i--;
            }
        ?>
            <center>
                <?php
                echo "Input : $str";
                echo "<br />";
                echo "Output : $new_str";
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
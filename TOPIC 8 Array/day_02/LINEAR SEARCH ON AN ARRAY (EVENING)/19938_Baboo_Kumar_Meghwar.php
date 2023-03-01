<!DOCTYPE html>
<html>

<head>
    <style>
        .button {
            background-color: lightgreen;
            /* Green */
            border: 2 solid black;
            color: white;
            /* padding: 15px 32px; */
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }

        input[type=number] {
            border: 2px solid red;
            border-radius: 4px;
        }

        center {
            color: green;
        }
    </style>
</head>

<body>
    <center>
        <form method="POST">
            <table>
                <tr>
                    <td>
                        <input type="number" name="number" value="number" required placeholder="Enter Number">
                    </td>
                    <td>
                        <input class="button" type="submit" value="submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    $count = 0;
    $index = 0;

    $array = [1, 3, 5, 4, 6, 7, 6];
    for ($i = 0; isset($array[$i]); $i++) {
        if ($array[$i] == $number) {
            $index = $i;
?>
            <center>
                <?php
                echo "value $number found on position  $index";
                echo "<br />";
                ?>
            </center>
        <?php
            $count = $count + 1;
        }
    }
    if ($count == 0) {
        ?>
        <center>
            <?php
            echo "<br/>" . "Value not found";
            ?>
        </center>
<?php
    }
}
?>
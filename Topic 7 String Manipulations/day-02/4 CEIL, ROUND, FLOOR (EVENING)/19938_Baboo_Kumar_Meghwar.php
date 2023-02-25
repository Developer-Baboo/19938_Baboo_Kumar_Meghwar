<!DOCTYPE html>
<html>

<head>
    <title>Assignment</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <center>
        <p style="background-color: pink; font-weight: bold; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; padding: 20px; ">Ceil, Round, Floor</p>

        <br />
        <form method="POST" style="background-color:green; margin-left: 200px; margin-right: 200px;  ">
            <table>
                <tr>
                    <td>
                        <p>Enter Decimal Number</p>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>
                        <br>
                        <input required step="any" type="number" name="data" placeholder="Enter Number" maxlength="20px" \n>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select required name="function" id="">
                            <option value=""></option>
                            <option value="ceil">Ceil</option>
                            <option value="round">Round</option>
                            <option value="floor">Floor</option>
                        </select>
                    </td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td style="background-color:white; text-align: right">
                        <?php
                        if (isset($_POST['submit'])) {
                            $calculate = $_POST['data'];
                            $selected = $_POST['function'];
                            if ($selected === 'ceil') {
                                echo ("$calculate = " . ceil($calculate) . "<br>");
                            } else if ($selected === 'floor') {
                                echo ("$calculate = " . floor($calculate) . "<br>");
                            } else if ($selected === 'round') {
                                echo ("$calculate = " . round($calculate) . "<br>");
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
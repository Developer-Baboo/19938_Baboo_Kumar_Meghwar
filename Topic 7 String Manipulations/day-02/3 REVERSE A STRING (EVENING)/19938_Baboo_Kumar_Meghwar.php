<!Doctype html>
<html>

<head>
    <title>Total VOWELS, CONSONANTS & POSITIONS OF VOWELS</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            $value = $_POST['value'];
            for ($a = 0; isset($value[$a]); $a++) 
            {
                
            }
        }
        ?>
    </center>
    <center>
        <p style="text-align:center; color:white; background-color: palevioletred; padding: 10px;">REVERSE A STRING (EVENING) </p>


        <br>
        <br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><input type="text" name="string"> </td>
                    <td> <input type="submit" name="reverse" value="reverse"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
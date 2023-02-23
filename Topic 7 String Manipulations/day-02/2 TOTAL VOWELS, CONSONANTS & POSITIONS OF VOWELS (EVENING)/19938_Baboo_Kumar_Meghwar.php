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
        <p style="text-align:center; color:white; background-color: palevioletred; padding: 5px;">PROGRAM TO FIND THE TOTAL NUMBER OF VOWELS, CONSONANTSAND POSITION OF VOWELS</p>
        <br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label>Enter Text : </label></td>
                    <td><textarea name="value" id="" cols="15" rows="3"></textarea></td>
                    <td><input style="padding-right:10px; padding-left:10px; " type="submit" name="submit" value="GO!"></td>
                </tr>
            </table>
        </form>
    </center>

    <?php
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
        // $calculate = 0;
        $vowel = 0;
        $consonant = 0;
        $nothing = 0;
        // check each character in the string via loop
        for ($a = 0; isset($value[$a]); $a++) {
            if ($value[$a] === 'A' || $value[$a] === 'a' || $value[$a] === 'E' || $value[$a] === 'e' || $value[$a] === 'I' || $value[$a] === 'i' || $value[$a] === 'O' || $value[$a] === 'o' || $value[$a] === 'U' || $value[$a] === 'u') {
                $vowel = $vowel + 1;
            } else if ($value[$a] === " ") {
                $nothing++;
            } else {
                $consonant = $consonant + 1;
            }
        }
        echo "Total Vowel : $vowel";
        echo "<br />";
        echo "Total Consonant: $consonant";
        for ($a = 0; isset($value[$a]); $a++) {
            if ($value[$a] === 'A') {
                $_A = $value[$a];
                echo "<br />";
                // echo "Position of vowel A is : $_A";
                echo "Position of vowel A is : $value[$a]";
            } else if ($value[$a] === 'a') {
                $_a = $value[$a];
                echo "<br />";
                echo "Position of vowel a is : $_a";
            } else if ($value[$a] === 'E') {
                $_E = $value[$a];
                echo "<br />";
                echo "Position of vowel E is : $_E";
            } else if ($value[$a] === 'e') {
                $_e = $value[$a];
                echo "<br />";
                echo "Position of vowel e is : $_e";
            } else if ($value[$a] === 'I') {
                $_I = $value[$a];
                echo "<br />";
                echo "Position of vowel I is : $_I";
            } else if ($value[$a] === 'i') {
                $_i = $value[$a];
                echo "<br />";
                echo "Position of vowel i is : $_i";
            } else if ($value[$a] === 'O') {
                $_O = $value[$a];
                echo "<br />";
                echo "Position of vowel O is : $_O";
            } else if ($value[$a] === 'o') {
                $_o = $value[$a];
                echo "<br />";
                echo "Position of vowel o is : $_o";
            } else if ($value[$a] === 'U') {
                $_U = $value[$a];
                echo "<br />";
                echo "Position of vowel U is : $_U";
            } else if ($value[$a] === 'u') {
                $_u = $value[$a];
                echo "<br />";
                echo "Position of vowel u is : $_u";
            }
        }
    }
    ?>
</body>

</html>
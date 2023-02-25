<!Doctype html>
<html>

<head>
    <title>Assignment_Solution_</title>
</head>
<bdoy>
    <center>
        <h1>Write Something Here</h1>
    </center>
    <center>
        <table>
            <form action="" method="POST">
                <tr>
                    <td><textarea name="value" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </form>
        </table>
    </center>
</bdoy>

</html>

<?php
$count_spaces = 0;
$count_words = 0;
$count_alphabets = 0;
$search_value = " ";
$first_index = NULL;
$last_index = NULL;

if (isset($_POST['submit'])) {
    $value = $_POST['value'];
    echo "<br />";

    for ($a = 0; isset($value[$a]); $a++) {
        if ($value[$a] === " ") {
            $count_spaces  = $count_spaces + 1;
        }
    }
    $c = $a - $count_spaces;
    //count first index 
    for ($a = 0; isset($value[$a]); $a++) {
        if ($value[$a] == $search_value) {
            $first_index = $a;
            break;
        }
    }
    echo "First index: $first_index\n";
    // echo "Last index: $last_index\n";
?>
    <center>
        <?php
        echo "Sentence is : $value";
        echo "<br />";
        echo "<br />";
        echo "Total Alphabets: $c";
        echo "<br />";
        echo "<br />";
        echo "Total Words: ";
        echo "<br />";
        echo "<br />";
        echo "Total Spaces: $count_spaces";
        ?>
    </center>

<?php
}
?>
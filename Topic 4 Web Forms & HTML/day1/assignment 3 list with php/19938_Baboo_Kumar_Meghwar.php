<!DOCTYPE html>
<html>
         <head>
                    <title>Dynamic List </title>
         </head>
<body>
<?php
$type = "circle";
switch ($type) {
    case "square":
        for ($a = 1; $a <= 20; $a++) {
            if ($a % 2 == 0) {
                echo "<ul type='square'>";
                echo "<li>$a</li>";
                echo "</ul>";
            }
        }
        break;

    case "disc":
        for ($a = 1; $a <= 20; $a++) {
            if ($a % 2 != 0) {
                echo "<ul type='disc'>";
                echo "<li>$a</li>";
                echo "</ul>";
            }
        }
        break;
    case "circle":
        for ($a = 1; $a <= 20; $a++) {
            $b = $a * $a;
            echo "<ul type='circle'>";
            echo "<li>$b</li>";
            echo "</ul>";
        }
        break;
    default:
        echo "Sorry you have entered wrong input";
}
?>

</body>
</html>
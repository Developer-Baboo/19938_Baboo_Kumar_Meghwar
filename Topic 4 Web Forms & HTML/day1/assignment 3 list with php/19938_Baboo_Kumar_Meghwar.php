<!DOCTYPE html>
<html>
	<head>
		<title>List</title>
	</head>
	<body>

    <ul>
        <?php
$type = "circlec";
if ($type == "square") {
    for ($i = 2; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "<li> $i </li>";
        }

    }
} elseif ($type == "disc") {
    for ($i = 1; $i <= 20; $i++) {if ($i % 2 != 0) {
        echo "<li> $i </li>";
    }

    }
} elseif ($type == "circle") {
    for ($i = 1; $i <= 20; $i++) 
    {
        $c = $i * $i;
        echo "<li> $c </li>";
    }
} else {
    echo "Sorry! It is not a valid type";
}
?>
</ul>



	</body>
</html>
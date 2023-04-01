<?php
echo "&nbsp <br /> ********Using for Loop************ <br />";

for ($i = 1; $i <= 13; $i++) {
    if ($i % 2 != 0 && $i % 3 != 0) {
        echo "$i &nbsp";
    }

}

?>

<?php

///Using while loop
echo "&nbsp <br /> **************Using While Loop******* <br />";
$i = 1;
while ($i <= 13) {
    if ($i % 2 != 0 && $i % 3 != 0) {
        echo "$i &nbsp";
    }
    $i++;
}

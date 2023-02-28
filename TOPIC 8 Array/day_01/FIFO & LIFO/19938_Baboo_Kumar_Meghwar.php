<?php
$my_arry1 = array("The", "Pakistani", "Team", "Won", "Match");
// findout ka whether user has selected fifo or lifo
echo "<pre>";
    print_r($my_arry1);
echo "</pre>";
if (isset($_POST['submitF'])) 
{
    unset($my_arry1[0]);
    // $arr = 
    echo "<pre>";
        print_r($my_arry1);
    echo "</pre>";
}
$count = 0;
foreach ($my_arry1 as $i => $k) 
{
    $count = $count + 1;
}
if(isset($_POST['submitL'])) 
{
    unset($my_arry1[$count-1]);
    // unset($my_arry1[0]);
    echo "<pre>";
        print_r($my_arry1);
    echo "</pre>";
}
?>
<form method="POST">
    <span>
        <input type="submit" name="submitF" value="FIFO">
    </span>
    <span>
        <input type="submit" name="submitL" value="LIFO">
    </span>
</form>
<?php
$arr = [9,8,7,6,5,4,3,2,1,0,1000,200,10,20];
$optional_variable;
$b;
for ($a = 1; isset($arr[$a]); $a++)
{
    $optional_variable = $arr[$a];
    $b = $a;
    while($b>0 && $arr[$b-1]> $optional_variable){
        $arr[$b] = $arr[$b - 1];
        $b = $b - 1;
    }
    $arr[$b] = $optional_variable;
}
for ($a = 0; isset($arr[$a]);$a++){
    echo "$arr[$a]". "    ";
}
?>
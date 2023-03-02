<?php
$str = "19938 Baboo Kumar Meghwar";
$array = [];
$current_str = '';
for ($i = 0; isset($str[$i]); $i++) 
{
    if ($str[$i] == " ") 
    {
        $array[] = $current_str;
        $current_str = '';
    } 
    else 
    {
        $current_str .= $str[$i];
    }
}
$array[] = $current_str;
echo "<pre>";
print_r($array);
echo "</pre>";
?>
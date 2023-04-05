<!DOCTYPE html>
<html>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>__call Function</h1>
</body>

</html>
<?php
class Test
{
    public function __toString()
    {
        return "Sorry! You can't print object in the form of string";
    }
}
$test_1 = new Test();
echo $test_1;
?>
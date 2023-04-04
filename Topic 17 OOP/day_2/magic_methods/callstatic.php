<!DOCTYPE html>
<html>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>__callstatic Function</h1>
</body>

</html>
<?php
class Student
{
    private static function world()
    {
        echo "This is static world function.";
    }
    public static function __callStatic($method, $args)
    {
        echo "Sorry you can't accesss private method outside of the class because it is private";
    }
}
Student::hello();
?>
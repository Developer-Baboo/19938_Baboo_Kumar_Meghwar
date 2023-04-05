<!DOCTYPE html>
<html>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>__sleep Function</h1>
</body>

</html>

<?php
class Teacher
{
    public $course = "JS";
    private $first_name;
    private $last_name;
    // private 

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __sleep()
    {
        return array('first_name', 'last_name');
    }
}

$obj = new Teacher();
$obj->setName("Baboo", "Kumar");
$srl = serialize($obj);
echo $srl;


?>
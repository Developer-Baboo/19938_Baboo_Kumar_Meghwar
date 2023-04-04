<!DOCTYPE html>
<html>

<body style="background-color:lightblue ; font-weight: bold; font-family: serif; color:black;font-size:20px; border: 10px solid red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>__Invoke Function</h1>
</body>

</html>

<?php

class calculation
{
    public $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    // public function sum(){
    //     echo $this->a + $this->b;
    // }
    public function __invoke()
    {
        echo $this->a / $this->b;
    }
}

$obj = new calculation(20, 10);

$obj();
?>
<!DOCTYPE html>
<html>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>__call Function</h1>
</body>

</html>
<?php


class Customer
{
    private $first_name_of_customer;
    private $last_name_of_customer;

    private function setName($first_name, $last_name)
    {
        $this->first_name_of_customer = $first_name;
        $this->last_name_of_customer = $last_name;
    }

    public function __call($method, $args)
    {
        echo "<h1> $method is private Method you can't accessed outside of it <h1>";
        // print_r($args);
    }
}

$test = new Customer();
$test->setName("Baboo", "Kumar");


?>
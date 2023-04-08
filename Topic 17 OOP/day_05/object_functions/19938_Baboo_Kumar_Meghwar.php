<!DOCTYPE html>
<html>

<body style="background-color:lightgreen ; font-weight: bold; font-family: serif; color:black;font-size:20px; border: 10px solid green; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>CLASS/OBJECT FUNCTIONS</h1>
</body>

</html>

<?php
class Animal
{
    public function makeSound()
    {
        echo "Animal can make sound";
    }
}

class Lion extends Animal
{
    public function makeSound()
    {
        echo "roar";
    }
}

class Tiger extends Animal
{
    public function makeSound()
    {
        echo "roar";
    }
}

$get_all_classes = get_declared_classes();
if (class_exists("Lion")) {
    $parentClass = get_parent_class("Lion");
    if ($parentClass !== false) {
        echo "The parent class of Lion is: " . $parentClass;
        $parentClasses = class_parents("Lion");
        foreach ($parentClasses as $parent) {
            //echo $parent . "\n";
        }
        if (is_subclass_of("Lion", "Animal")) {
            echo "<br/>" . "Lion is a subclass of Animal\n";
        }
        $methods = get_class_methods("Lion");
        echo "<br/>" . "The methods in Lion Class are:\n";
        echo implode(", ", $methods) . "\n";
    } else {
        echo "Lion does not have a parent class\n";
    }
} else {
    echo "The class Lion does not exist\n";
}
?>
<!DOCTYPE html>
<html>
<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>Calculator Using OOP</h1>
</body>
</html>
<?php
class Calculator
{
    public $num1;
    public $num2;
    public $op;

    public function setNum1($num1)
    {
        $this->num1 = $num1;
    }
    public function getNum1()
    {
        return $this->num1;
    }

    public function setNum2($num2)
    {
        $this->num2 = $num2;
    }
    public function getNum2()
    {
        return $this->num2;
    }
    public function setOp($op)
    {
        $this->op = $op;
    }
    public function getOp()
    {
        return $this->op;
    }

    public function getCalculate()
    {
        if ($this->op=='+') {
            return $this->num1 + $this->num2;
        } elseif ($this->op == '-') {
            return $this->num1 - $this->num2;
        } elseif ($this->op == '*') {
            return $this->num1 * $this->num2;
        } elseif ($this->op == '/') {
            return $this->num1 / $this->num2;
        }
        else{
            echo "Incorrect Operator";
        }
    }
    
    public function displayOutput()
    {
        echo "************************************************************************" . "<br/>";
        echo "First Number : " . $this->getNum1() . "<br>";
        echo "Second Number: " . $this->getNum2() . "<br>";
        echo "Operator: " . $this->getop() . "<br>";
        echo "Output: " . $this->getCalculate(). "<br>";
        echo "************************************************************************"."<br/>";
    }

    public $num1_1;
    public $num2_1;
    public $op_1;

    public function setNum1_1($num1_1)
    {
        $this->num1_1 = $num1_1;
    }
    public function getNum1_1()
    {
        return $this->num1_1;
    }

    public function setNum2_1($num2_1)
    {
        $this->num2_1 = $num2_1;
    }
    public function getNum2_1()
    {
        return $this->num2_1;
    }
    public function setOp_1($op_1)
    {
        $this->op_1 = $op_1;
    }
    public function getOp_1()
    {
        return $this->op_1;
    }

    public function getCalculate_1()
    {
        if ($this->op_1 == '+') {
            return $this->num1_1 + $this->num2_1;
        } elseif ($this->op_1 == '-') {
            return $this->num1_1 - $this->num2_1;
        } elseif ($this->op_1 == '*') {
            return $this->num1_1 * $this->num2_1;
        } elseif ($this->op_1 == '/') {
            return $this->num1_1 / $this->num2_1;
        } else {
            echo "Incorrect Operator";
        }
    }

    public function displayOutput_1()
    {
        echo "First Number : " . $this->getNum1_1() . "<br>";
        echo "Second Number: " . $this->getNum2_1() . "<br>";
        echo "Operator: " . $this->getop_1() . "<br>";
        echo "Output: " . $this->getCalculate_1() . "<br>";
        echo "************************************************************************" . "<br/>";
    }



    
}
$calc = new Calculator();
$calc->setNum1(200);
$calc->setNum2(100);
$calc->setOp('/');
$calc->displayOutput();

/************************************************************************************/
$calc_1 = new Calculator();
$calc_1->setNum1_1(9);
$calc_1->setNum2_1(95);
$calc_1->setOp_1('+');
$calc_1->displayOutput_1();

?>
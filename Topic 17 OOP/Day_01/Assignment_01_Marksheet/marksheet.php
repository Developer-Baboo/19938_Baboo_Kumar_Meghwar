<!DOCTYPE html>
<html>

<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>Marksheet Using OOP</h1>
</body>

</html>
<?php

class Marksheet
{
    public $sub1;
    public $sub2;
    public $sub3;
    public $sub4;
    public $sub5;
    // public $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    public function setSub1($sub1)
    {
        $this->sub1 = $sub1;
    }
    public function setSub2($sub2)
    {
        $this->sub2 = $sub2;
    }

    public function setSub3($sub3)
    {
        $this->sub3 = $sub3;
    }

    public function setSub4($sub4)
    {
        $this->sub4 = $sub4;
    }

    public function setSub5($sub5)
    {
        $this->sub5 = $sub5;
    }

    public function getSub1()
    {
        return $this->sub1;
    }
    public function getSub2()
    {
        return $this->sub2;
    }
    public function getSub3()
    {
        return $this->sub3;
    }
    public function getSub4()
    {
        return $this->sub4;
    }
    public function getSub5()
    {
        return $this->sub5;
    }

    public function getObtainedMarks()
    {
        return $this->sub1 + $this->sub2 + $this->sub3 + $this->sub4 + $this->sub5;
    }
    public function getGrade()
    {
        $percentage = $this->getPercentage();
        if ($this->sub1 >= 40 && $this->sub2 >= 40 && $this->sub3 >= 40 && $this->sub4 >= 40 && $this->sub5 >= 40) {
            if ($percentage >= 40 && $percentage <= 60) {
                return "C";
            } elseif ($percentage >= 61 && $percentage <= 79) {
                return "B";
            } elseif ($percentage >= 80 && $percentage <= 89) {
                return "A";
            } elseif ($percentage >= 90 && $percentage <= 100) {
                return "A+";
            }
        }
        return "Failed";
    }

    public function getPercentage()
    {
        return $this->getObtainedMarks() * 100 / 500;
    }
    public function printMarksheet()
    {
        echo "Total Marks: 500" . "<br>";
        echo "Obtained Marks: " . $this->getObtainedMarks() . "<br>";
        echo "Percentage: " . $this->getPercentage() . "%" . "<br>";
        echo "Grade: " . $this->getGrade() . "<br>";
    }
}
$student = new Marksheet();

$student->setSub1(95);
$student->setSub2(95);
$student->setSub3(95);
$student->setSub4(95);
$student->setSub5(95);
$student->printMarksheet();

?>
<!DOCTYPE html>
<html>
<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>Marksheet Using OOP</h1>
</body>
</html>
<?php
class Marksheet
{
    public $name;
    public $sub1;
    public $sub2;
    public $sub3;
    public $sub4;
    public $sub5;
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

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
        echo "This is the Marksheet of : " . $this->getName() . "<br>";
        echo "Total Marks: 500" . "<br>";
        echo "Obtained Marks: " . $this->getObtainedMarks() . "<br>";
        echo "Percentage: " . $this->getPercentage() . "%" . "<br>";
        echo "Grade: " . $this->getGrade() . "<br>" . "<br>";
    }



    public $name_1;
    public $sub_1;
    public $sub_2;
    public $sub_3;
    public $sub_4;
    public $sub_5;

    public function setName_1($name_1)
    {
        $this->name_1 = $name_1;
    }
    public function getName_1()
    {
        return $this->name_1;
    }

    public function setSub_1($sub_1)
    {
        $this->sub_1 = $sub_1;
    }
    public function setSub_2($sub_2)
    {
        $this->sub_2 = $sub_2;
    }

    public function setSub_3($sub_3)
    {
        $this->sub_3 = $sub_3;
    }

    public function setSub_4($sub_4)
    {
        $this->sub_4 = $sub_4;
    }

    public function setSub_5($sub_5)
    {
        $this->sub_5 = $sub_5;
    }

    public function getSub_1()
    {
        return $this->sub_1;
    }
    public function getSub_2()
    {
        return $this->sub_2;
    }
    public function getSub_3()
    {
        return $this->sub_3;
    }
    public function getSub_4()
    {
        return $this->sub_4;
    }
    public function getSub_5()
    {
        return $this->sub_5;
    }

    public function getObtainedMarks_1()
    {
        return $this->sub_1 + $this->sub_2 + $this->sub_3 + $this->sub_4 + $this->sub_5;
    }
    public function getGrade_1()
    {
        $percentage_1 = $this->getPercentage_1();
        if ($this->sub_1 >= 40 && $this->sub_2 >= 40 && $this->sub_3 >= 40 && $this->sub_4 >= 40 && $this->sub_5 >= 40) {
            if ($percentage_1 >= 40 && $percentage_1 <= 60) {
                return "C";
            } elseif ($percentage_1 >= 61 && $percentage_1 <= 79) {
                return "B";
            } elseif ($percentage_1 >= 80 && $percentage_1 <= 89) {
                return "A";
            } elseif ($percentage_1 >= 90 && $percentage_1 <= 100) {
                return "A+";
            }
        }
        return "Failed";
    }

    public function getPercentage_1()
    {
        return $this->getObtainedMarks_1() * 100 / 500;
    }
    public function printMarksheet_1()
    {
        echo "This is the Marksheet of : " . $this->getName_1() . "<br>";
        echo "Total Marks: 500" . "<br>";
        echo "Obtained Marks: " . $this->getObtainedMarks_1() . "<br>";
        echo "Percentage: " . $this->getPercentage_1() . "%" . "<br>";
        echo "Grade: " . $this->getGrade_1() . "<br>";
    }
}
$Baboo = new Marksheet();
$Baboo->setSub1(95);
$Baboo->setSub2(95);
$Baboo->setSub3(95);
$Baboo->setSub4(95);
$Baboo->setSub5(95);
$Baboo->setName("Baboo Kumar Heerani");
$Baboo->printMarksheet();

/////////////////////////////
$Akash = new Marksheet();
$Akash->setSub_1(95);
$Akash->setSub_2(80);
$Akash->setSub_3(00);
$Akash->setSub_4(95);
$Akash->setSub_5(95);
$Akash->setName_1("Dr. Akash Parmar");
$Akash->printMarksheet_1();


?>
<!DOCTYPE html>
<html>

<head>
    <title>Resume Using OOP</title>
</head>
<body style="background-color:blue ; font-weight: bold; font-family: serif; color:white;font-size:20px; border: 10px dashed red; border-radius: 20px; padding: 30px 0px 20px 100px;">
    <h1>Resume Using OOP</h1>
</body>

</html>
<?php

class Resume
{
    public $name_1;
    public $position_1;
    public $intro_1;
    public $school_detail_1;
    public $college_detail_1;
    public $university_detail_1;
    public $phone_1;
    public $gmail_1;
    public $skill_1;
    public $language_1;

    public function setName_1($name_1)
    {
        $this->name_1 = $name_1;
    }
    public function getName_1()
    {
        return $this->name_1;
    }

    public function setPosition_1($position_1)
    {
        $this->position_1 = $position_1;
    }
    public function getPosition_1()
    {
        return $this->position_1;
    }

    public function setIntro_1($intro_1)
    {
        $this->intro_1 = $intro_1;
    }
    public function getIntro_1()
    {
        return $this->intro_1;
    }
    public function setSchoolDetail_1($school_detail_1)
    {
        $this->school_detail_1 = $school_detail_1;
    }
    public function getSchoolDetail_1()
    {
        return $this->school_detail_1;
    }
    public function setCollegeDetail_1($college_detail_1)
    {
        $this->college_detail_1 = $college_detail_1;
    }
    public function getCollegeDetail_1()
    {
        return $this->college_detail_1;
    }

    public function setUniversityDetail_1($university_detail_1)
    {
        $this->university_detail_1 = $university_detail_1;
    }
    public function getUniversityDetail_1()
    {
        return $this->university_detail_1;
    }
    public function setPhone_1($phone_1)
    {
        $this->phone_1 = $phone_1;
    }
    public function getPhone_1()
    {
        return $this->phone_1;
    }

    public function setGmail_1($gmail_1)
    {
        $this->gmail_1 = $gmail_1;
    }
    public function getGmail_1()
    {
        return $this->gmail_1;
    }

    public function setSkills_1($skill_1)
    {
        $this->skill_1 = $skill_1;
    }
    public function getSkills_1()
    {
        return $this->skill_1;
    }


    public function setLanguages_1($language_1)
    {
        $this->language_1 = $language_1;
    }
    public function getLanguages_1()
    {
        return $this->language_1;
    }

    public function View_Resume_1()
    {
        echo "Name :" . $this->getName_1() . "<br/>";
        echo "Position :" . $this->getPosition_1() . "<br/>";
        echo "Introduction :" . $this->getIntro_1() . "<br/>";
        echo "School Detail :" . $this->getSchoolDetail_1() . "<br/>";
        echo "College Detail :" . $this->getCollegeDetail_1() . "<br/>";
        echo "University Detail :" . $this->getUniversityDetail_1() . "<br/>";
        echo "Phone Number :" . $this->getPhone_1() . "<br/>";
        echo "Gamil : " . $this->getGmail_1() . "<br/>";
        echo "Skills : " . $this->getSkills_1() . "<br/>";
        echo "Languages : " . $this->getlanguages_1() . "<br/>";
    }
}



$Akash = new Resume();
$Akash->setName_1("Akash Kumar");
$Akash->setPosition_1("Java Developer");
$Akash->setIntro_1("I am fresh Graduated from Mehran and have completed 4 month of Internship");
$Akash->setSchoolDetail_1("I had completed my Matric Education From Government High School Diplo in 2016");
$Akash->setCollegeDetail_1("I had completed my College Education From Government Degree College Umerkot in 2018");
$Akash->setUniversityDetail_1("I had completed my Bechlor Degree From Mehran University Jamshoro 2019-2022");
$Akash->setPhone_1("03422449443");
$Akash->setGmail_1("akashkumar999@gmail.com");
$Akash->setSkills_1("Java,oop,sql, mysql,spring");
$Akash->setlanguages_1("URDU, SINDHI, English");
$Akash->View_Resume_1();

?>
<?php

interface TeachingProgram
{
    public function set_teaching_program($program);
    public function get_teaching_program();
}

interface shift_timing
{
    public function afternoon();
    public function night();
}

abstract class oxford_syllabus
{
    protected $year = NULL;
    protected $oxford_syllabus = NULL;

    public function set_year($year)
    {
        $this->year = $year;
    }

    public function get_year()
    {
        return $this->year;
    }

    public function set_oxford_syllabus($oxford_syllabus)
    {
        $this->oxford_syllabus = $oxford_syllabus;
    }

    public function get_oxford_syllabus()
    {
        return $this->oxford_syllabus;
    }

    public abstract function show_oxford_syllabus_description();
}


class Spark_Tuition_Center extends oxford_syllabus implements TeachingProgram, shift_timing
{
    protected $teaching_program = NULL;

    public function set_teaching_program($program)
    {
        $this->teaching_program = $program;
    }

    public function get_teaching_program()
    {
        return $this->teaching_program;
    }

    public function afternoon()
    {
        return "<p style='color:grey'><b> After Noon Shift Timing: </b> 01:00 PM - 02:30 PM </p>";
    }

    public function night()
    {
        return "<p style='color:blue'><b>Night Shift Time</b> 07:00 PM - 08:00 PM </p>";
    }


    public function show_oxford_syllabus_description()
    {
?>
        <div align="center" style="background-color:aquamarine ; border:10px solid black; border-radius: 20px; margin:20px; color:indigo ; padding:20px">
            <p><b>Teaching Program Property :</b> <?php echo $this->teaching_program; ?></p>
            <p><b>Teaching Program Method :</b> <?php echo $this->get_teaching_program(); ?></p>
            <p><b>After Noon Shift Timing :</b> <?php echo $this->afternoon(); ?></p>
            <p><b>Night Shift Timing :</b> <?php echo $this->night(); ?></p>
            <br />
            <hr />
            <br />
            <p><b>Year Name Property:</b> <?php echo $this->year; ?></p>
            <p><b>Year Name Method:</b> <?php echo $this->get_year(); ?></p>
            <p><b>Oxford Syallabus Name Property:</b> <?php echo $this->oxford_syllabus; ?></p>
            <p><b>Oxford Syllabus Name Method:</b> <?php echo $this->get_oxford_syllabus(); ?></p>
        </div>
<?php
    }
}

$spark = new Spark_Tuition_Center;
$spark->set_teaching_program("PHYSICS and CHEMISTRY ");
$spark->set_year("PHYSICS and CHEMISTRY May-December 2K23");
$spark->set_oxford_syllabus("PHYSICS and CHEMISTRY 9th class");
$spark->show_oxford_syllabus_description();

?>
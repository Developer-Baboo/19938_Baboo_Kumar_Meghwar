<?php 

	/*abstract class Reports{
		public $reports = NULL;
	}
	$obj = new Reports;*/ //Error - Can't Create Object Of Abstract Class

	/*abstract class Reports{
		public $reports = NULL;
	
		public function attendanc_report(){
			return "<p style='color:red'><b>HIST :</b> Attendance Reports<p>";
		}

		protected function assignment_report(){
			return "<p style='color:blue'><b>HIST :</b> Assignment Reports<p>";
		}

		public abstract function test_report();
	}
	
	class HIST extends Reports
	{
		
		protected $batch = NULL;
		protected $course = NULL;

		public function test_report(){
			return "<p style='color:green'><b>HIST :</b> Test Reports<p>";
		}

		public function assignment_report(){
			return "<p style='color:darkred'><b>HIST :</b> Assignment Reports<p>";
		}


		public function set_batch($batch){
			$this->batch = $batch;
		}

		public function get_batch(){
			return $this->batch;
		}

		public function set_course($course){
			$this->course = $course;
		}
		
		public function get_course(){
			return $this->course;
		}

		public function show_cource_information(){
			?>
			<div align="center" style="background-color:lightcoral;color:darkgreen; padding:10px">
				<p><b>Batch :</b> <?php  echo $this->batch; ?></p>
				<p><b>Course :</b> <?php  echo $this->get_course(); ?></p>
				<h1><b>Reports :</h1>
				<?php 
					echo $this->attendanc_report();
					echo $this->assignment_report();
					echo $this->test_report();
				?>	
			</div>
			<?php
		}

	}*/

	/*$hist = new HIST;
	$hist->set_batch("PHP BASIC FEB-MAY 2K23");
	$hist->set_course("PHP BASIC Web Development");
	echo "<p>Batch: ".$hist->get_batch()."</p>";
	echo "<p>Course: ".$hist->get_course()."</p>";
	echo $hist->attendanc_report();
	echo $hist->assignment_report();
	echo $hist->test_report();
	echo $hist->show_cource_information();*/

	abstract class Person{
		protected $first_name = NULL;
		protected $last_name = NULL;
	
		public function set_first_name($first_name){
			$this->first_name = $first_name;
		}

		public function get_first_name(){
			return $this->first_name;
		}

		public function set_last_name($last_name){
			$this->last_name = $last_name;
		}

		public function get_last_name(){
			return $this->last_name;
		}

		public abstract function salary();
	}

	class Employees extends Person{
			
		protected $salary = NULL;	

		public function __construct($first_name, $last_name, $salary){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->salary = $salary;
		}

		public function set_salary($salary){
			$this->salary = $salary;
		}

		public function get_salary(){
			return $this->salary;
		}

		public function salary(){
			return "<p style='color:red'><b>Employee Salary : </b>".$this->get_salary()."</p>";
		}
	}

	class Contractor extends Person
	{
		protected $hourly_rate 	= NULL;	
		protected $worked_hours = NULL;	

		public function __construct($first_name, $last_name, $hourly_rate, $worked_hours){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->hourly_rate = $hourly_rate;
			$this->worked_hours = $worked_hours;
		}		
		
		public function set_hourly_rate($hourly_rate){
			$this->hourly_rate = $hourly_rate;
		}

		public function get_hourly_rate(){
			return $this->hourly_rate;
		}

		public function set_worked_hours($worked_hours){
			$this->worked_hours = $worked_hours;
		}

		public function get_worked_hours(){
			return $this->worked_hours;
		}

		public function salary(){
			return "<p style='color:red'><b>Contractor Salary : </b>".($this->hourly_rate * $this->get_worked_hours())."</p>";
		}


	}

	$employee = new Employees("Haider", "Khan", 25000);
	echo "<h1>Employee 1</h1>";
	echo "<p><b>FullName:</b> ".$employee->get_first_name()." ".$employee->get_last_name()."</p>";
	echo "<p><b>Salary:</b> ".$employee->get_salary()."</p>";
	echo $employee->salary();

	echo "<hr/>";
	$employee->set_first_name("Hamza");
	$employee->set_last_name("Khan");
	$employee->set_salary(30000);
	echo "<h1>Employee 2</h1>";
	echo "<p><b>FullName:</b> ".$employee->get_first_name()." ".$employee->get_last_name()."</p>";
	echo "<p><b>Salary:</b> ".$employee->get_salary()."</p>";
	echo $employee->salary();
	echo "<hr/>";

	$contractor = new Contractor("Ali", "Shaikh", 500, 10);
	echo "<h1>Contractor 1</h1>";
	echo "<p><b>FullName:</b> ".$contractor->get_first_name()." ".$contractor->get_last_name()."</p>";
	echo $contractor->salary();

	echo "<hr/>";
	echo "<h1>Contractor 2</h1>";
	$contractor->set_first_name("Hamza");
	$contractor->set_last_name("Khan");
	echo "<p><b>FullName:</b> ".$contractor->get_first_name()." ".$contractor->get_last_name()."</p>";
	$contractor->set_worked_hours(5);
	$contractor->set_hourly_rate(1000);
	echo $contractor->salary();





?>
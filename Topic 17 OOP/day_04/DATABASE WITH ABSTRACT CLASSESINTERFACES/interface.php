<?php 

	/*interface TrainingProgram{
		public $training_program = NULL;
	}*/ // Error - We Can Not Declare Properties In Interface 

	
	/*interface TrainingProgram{
		// private function set_training_program($program);
		// protected function set_training_program($program);
	}*/ //Error - Method Must Be Public

	/*interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program(){

		}
	}*/ //Error - Can't Define Body Of Methods

	/*interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program();
	}

	$obj = new TrainingProgram;*/ //Error - Can't Create Object Of Interface

	/*interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program();
	}

	class HIST implements TrainingProgram{

	}*/ // Error - Class Must Have Interface Methods Body

	/*interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program();
	}

	class HIST implements TrainingProgram{
		protected $training_program = NULL;

		public function set_training_program($program){
			$this->training_program = $program;
		}

		public function get_training_program(){
			return $this->training_program;
		}

	}*/

	// $hist = new HIST;
	/*echo "<pre>";
	var_dump($hist);*/
	// $hist->set_training_program("PHP BASIC");
	// echo "TrainingProgram : ".$hist->get_training_program();
	// echo "TrainingProgram Property: ".$hist->training_program; //Error

	interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program();
	}

	interface Shift{
		public function morning();
		public function evening();
	}


	class HIST implements TrainingProgram, Shift{
		protected $training_program = NULL;
		
		public function morning(){
			return "<p style='color:red'><b>Morning Shift Time</b> 09:00 AM - 01:30 PM </p>";
		}
		
		public function evening(){
			return "<p style='color:blue'><b>Evening Shift Time</b> 01:30 PM - 06:30 PM </p>";
		}

		public function set_training_program($program){
			$this->training_program = $program;
		}

		public function get_training_program(){
			return $this->training_program;
		}

		public function show_course_description(){
			?>
			<div align="center" style="background-color:lightcoral;color:darkgreen; padding:10px">
				<p><b>TrainingProgram Propert :</b> <?php  echo $this->training_program; ?></p>
				<p><b>TrainingProgram Method :</b> <?php  echo $this->get_training_program(); ?></p>
				<p><b>Morning Shift :</b> <?php  echo $this->morning(); ?></p>
				<p><b>Evening Shift :</b> <?php  echo $this->evening(); ?></p>
			</div>
			<?php
		}

	}

	$hist = new HIST;
	$hist->set_training_program("PHP Basic With MYSQLI");
	echo "TrainingProgram : ".$hist->get_training_program();
	echo $hist->morning();
	echo $hist->evening();
	$hist->show_course_description();














?>
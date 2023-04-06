<?php 

	interface TrainingProgram{
		public function set_training_program($program);
		public function get_training_program();
	}

	interface Shift{
		public function morning();
		public function evening();
	}

	abstract class Course{
		protected $batch = NULL;
		protected $course = NULL;

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

		public abstract function show_course_description();
	}


	class HIST extends Course implements TrainingProgram, Shift{
		protected $training_program = NULL;
		
		public function set_training_program($program){
			$this->training_program = $program;
		}

		public function get_training_program(){
			return $this->training_program;
		}

		public function morning(){
			return "<p style='color:red'><b>Morning Shift Time</b> 09:00 AM - 01:30 PM </p>";
		}
		
		public function evening(){
			return "<p style='color:blue'><b>Evening Shift Time</b> 01:30 PM - 06:30 PM </p>";
		}


		public function show_course_description(){
			?>
			<div align="center" style="background-color:lightcoral;color:darkgreen; padding:10px">
				<p><b>TrainingProgram Propert :</b> <?php  echo $this->training_program; ?></p>
				<p><b>TrainingProgram Method :</b> <?php  echo $this->get_training_program(); ?></p>
				<p><b>Morning Shift :</b> <?php  echo $this->morning(); ?></p>
				<p><b>Evening Shift :</b> <?php  echo $this->evening(); ?></p>
				<hr/>
				<p><b>Batch Name Property:</b> <?php  echo $this->batch; ?></p>
				<p><b>Batch Name Method:</b> <?php  echo $this->get_batch(); ?></p>
				<p><b>Course Name Property:</b> <?php  echo $this->course; ?></p>
				<p><b>Course Name Method:</b> <?php  echo $this->get_course(); ?></p>
			</div>
			<?php
		}
	}

	$hist = new HIST;
	$hist->set_training_program("PHP Basic With MYSQLI");
	$hist->set_batch("PHP Basic FEB-MAY 2K23");
	$hist->set_course("PHP Basic Web Development");

	$hist->show_course_description();





?>
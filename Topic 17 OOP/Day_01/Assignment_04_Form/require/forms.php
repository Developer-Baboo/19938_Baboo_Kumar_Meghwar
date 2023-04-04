<?php 

	class Forms{
		public $action = NULL;
		public $method = "GET";

		public function set_action($action){
			$this->action = $action;
		}

		public function get_action(){
			return $this->action;
		}

		public function set_method($method){
			$this->method = $method;
		}
		
		public function get_method(){
			return $this->method;
		}
	
		public function login_form(){
		?>
		<div align="center">
			<fieldset>
				<legend>Login Here</legend>
				<form action="<?php echo $this->action; ?>" method="<?php echo $this->get_method(); ?>" 
					>
					<table>
						<tr>
							<th>
								Email: <span style="color:red">*</span>
							</th>
							<td>
								<input type="email" name="email" placeholder="Enter Your Email" />
							</td>
						</tr>
						<tr>
							<th>
								Password: <span style="color:red">*</span>
							</th>
							<td>
								<input type="password" name="password" placeholder="Enter Your Password" />
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<br/>
								<input type="submit" name="login" value="Login" />
								&nbsp;
								<input type="reset" name="reset" value="Cancle" />
							</td>
						</tr>
					</table>
				</form>
			</fieldset>	
		</div>
		<?php	
		}


	}








?>
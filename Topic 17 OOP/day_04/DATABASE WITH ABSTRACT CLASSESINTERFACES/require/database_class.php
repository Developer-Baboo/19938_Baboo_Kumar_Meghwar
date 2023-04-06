<?php 
	require_once("database_driver.php");
	require_once("database_setting.php");
	
	class Database implements DatabaseDriver{

		public $hostname 	= NULL;
		public $username 	= NULL;
		public $password 	= NULL;
		public $database 	= NULL;
		public $connection 	= NULL;
		public $query 		= NULL;
		public $result 		= NULL;

		public function connection_open($hostname,$username, $password, $database){
			$this->hostname = $hostname;		
			$this->username = $username;		
			$this->password = $password;		
			$this->database = $database;		
		
			mysqli_report(FALSE);
			$this->connection = mysqli_connect($this->hostname, $this->username,$this->password, $this->database);

			if(mysqli_connect_errno()){
				echo "<p style='color:red'>Database Connection Problem <b>Errro No:</b> ".mysqli_connect_errno()." Errro Message: ".mysqli_connect_error()."</p>";
			}

		}


		public function execute($query){
			$this->query = $query;
			$this->result =  mysqli_query($this->connection, $this->query);

			return $this->result;
		}

		public function connection_close(){
			mysqli_close($this->connection);
		}

	}

	$database_obj = new Database;
	$database_obj->connection_open($hostname, $username, $password, $database);

	$selectQuery = "
				SELECT U.`full_name`, U.`gender`, U.`user_email`,
				U.`is_active`, R.`role_type` FROM users U 
				INNER JOIN user_role UR
				ON U.`user_id` = UR.`user_id`
				INNER JOIN roles R 
				ON R.`role_id` = UR.`role_id`;
				";
	$result = $database_obj ->execute($selectQuery);
	// var_dump($result);


	if($result -> num_rows > 0)
	{
	?><center>
		<h1>User Data</h1>
		<table border="2" cellpadding="8px">
			<thead>
					<th>Full Name</th>
					<th>Gender</th>
					<th>User Email</th>
					<th>Is Active</th>
					<th>Role Type</th>
			</thead>
			<tbody>
			<?php
				while($row = mysqli_fetch_assoc($result)){ ?>
				<tr>
					<td><?php echo $row['full_name']?></td>
					<td><?php echo $row['gender']?></td>
					<td><?php echo $row['user_email']?></td>
					<td><?php echo $row['is_active']?></td>
					<td><?php echo $row['role_type']?></td>
				</tr>
			<?php }?> 
			</tbody>		
		</table>
		<center>
	<?php
	}

?>
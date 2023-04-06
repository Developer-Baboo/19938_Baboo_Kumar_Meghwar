<?php 

	interface DatabaseDriver{
		public function connection_open($hostname, $username, $password, $database);
		public function execute($query);
		public function connection_close();
	}







?>
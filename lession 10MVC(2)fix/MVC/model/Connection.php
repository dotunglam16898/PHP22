<?php
class Connection{
	public $connection;

	function __construct(){

		
		$servername= "localhost";
		$username ="root";
		$password="";
		$dbname="php_blog5";

		$this->connection = new mysqli($servername,$username,$password,$dbname);
		$this->connection->set_charset("utf8");

		

		if ($this->connection->connect_error) {
			
			die("Connection failed");
		}
	}
}

?>
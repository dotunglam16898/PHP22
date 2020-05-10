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
class Post extends Connection{
	public $connection;
	public $talbe = "posts";
	function __construct(){
		
		$connect = new Connection();
		$this->connection= $connect->connection;
	}
	public function where($columns,$value = null){
		if (is_array($columns)) {
			$where = '';
			foreach ($columns as $column => $value) {
				$where .= "$column = '$value' ";
				$where .= " AND ";
			}
			$where = rtrim($where, " AND ");
		}else{
			$where = "$columns = '$value' ";
		}
		$query = "SELECT * FROM " . "posts" . " WHERE " . $where;
        // die($query);
		$result = $this->connection->query($query);
		$posts = array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}
		
		return $posts;
	}
}
?>
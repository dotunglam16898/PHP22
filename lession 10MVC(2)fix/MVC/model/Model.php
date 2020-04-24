<?php
require_once('model/Connection.php');

class Model{
	public $connection;
	protected $table;
	function __construct(){
		
		$connect= new Connection();
		$this->connection= $connect->connection;
	}

	// public function all(){
	// 	//echo "all";
	// 	$query = "SELECT * FROM categories";

	// 	$result = $this->connection->query($query);

	// 	$categories = array();

	// 	while ($row = $result->fetch_assoc()) {
	// 		$categories[] = $row;
	// 	}
	// 	return $categories;

	// }
	public function all(){
		$query = "SELECT * FROM ". $this->table;
		$result = $this->connection->query($query);
		$categories = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	// public function getId($id){
	// 	$query = "SELECT * FROM categories WHERE id=".$id;

	// 	$result = $this->connection->query($query);
	// 	$category = $result->fetch_assoc();

	// 	return $category;

	// }
	public function getId($id){
		$query = "SELECT * FROM . $this->table WHERE id=" . $id;
		$result= $this->connection->query($query);
		$data= $result->fetch_assoc();
		return $data;

	}

	// public function update($data,$id){
	// 	$query = "UPDATE categories SET name='".$data['name']."', description='".$data['description']."' WHERE id= ".$id;
	// 	$status= $this->connection->query($query);
	// 	return $status;
	// }
	public function update($data,$id){
		$query = "UPDATE $this->table SET ";
		
		foreach ($data as $key => $value) {
			$query .=$key ." = " . "'" . $value . "'" . ",";
		}
		$query = substr_replace($query, "", -1);
		$query .="WHERE id =".$id;
		// die($query);
		$result = $this->connection->query($query);
		return $result;
	}

	// public function delete($id){
	// 	$query = "DELETE from categories WHERE id= ".$id;
	// 	$status= $this->connection->query($query);
	// 	return $status;

	// }
	public function delete($id){
		$query = "DELETE FROM $this->table WHERE id=".$id;
		$status= $this->connection->query($query);
		return $status;
	}

	// public function insert($data){
	// 	$query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
	// 	$status = $this->connection->query($query);
	// 	return $status;
	// }
	function insert($data){
		$query = "INSERT INTO $this->table (";
		foreach ($data as $key => $value) {
			$query .= $key . ",";
		}
		$query = substr_replace($query,")",-1);
		$query .= "VALUES (";
		foreach ($data as $key => $value) {
			$query .= "'" . $value . "'" . "," ;	

		}
		$query = substr_replace($query,")",-1);
		$result= $this->connection->query($query);
		return $result;
	}
}

?>
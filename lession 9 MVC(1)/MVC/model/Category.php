<?php

class Category {
	
	public $connection;
	function __construct(){

		//echo "Category model";
		$servername= "localhost";
		$username ="root";
		$password="";
		$dbname="php_blog5";

		$conn= new mysqli($servername,$username,$password,$dbname);
		mysqli_query($conn,"SET NAMES 'UTF8'");

		if ($conn->connect_errno) {
			echo "Failed to connect".$conn->connect_error;
			exit();
		}
		$this->connection= $conn;
	}
	public function all(){
		//echo "all";
		$query = "SELECT * FROM categories";

		$result = $this->connection->query($query);

		$categories = array();

		while ($row = $result->fetch_assoc()) {
			$categories[] = $row;
		}
		return $categories;

	}

	public function getId($id){
		$query = "SELECT * FROM categories WHERE id=".$id;

		$result = $this->connection->query($query);
		$category = $result->fetch_assoc();
		
		return $category;

	}

	public function update($data,$id){
		$query = "UPDATE categories SET name='".$data['name']."', description='".$data['description']."' WHERE id= ".$id;
		$status= $this->connection->query($query);
		return $status;
	}

	public function delete($id){
		$query = "DELETE from categories WHERE id= ".$id;
		$status= $this->connection->query($query);
		return $status;

	}

	public function insert($data){
		$query = "INSERT INTO categories (name, description) VALUES ('".$data['name']."','".$data['description']."')";
		$status = $this->connection->query($query);
		return $status;
	}

}



?>
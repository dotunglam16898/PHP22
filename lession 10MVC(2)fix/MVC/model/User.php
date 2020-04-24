<?php
require('model/Model.php');


class User extends Model{
	protected $table= 'users';
	
	// public $connection;
	// function __construct(){

	// 	//echo "Category model";
	// 	$servername= "localhost";
	// 	$username ="root";
	// 	$password="";
	// 	$dbname="php_blog5";

	// 	$conn= new mysqli($servername,$username,$password,$dbname);
	// 	mysqli_query($conn,"SET NAMES 'UTF8'");

	// 	if ($conn->connect_errno) {
	// 		echo "Failed to connect".$conn->connect_error;
	// 		exit();
	// 	}
	// 	$this->connection= $conn;
	// }
	// public function all(){
	// 	//echo "all";
	// 	$query = "SELECT * FROM users";

	// 	$result = $this->connection->query($query);

	// 	$users = array();

	// 	while ($row = $result->fetch_assoc()) {
	// 		$users[] = $row;
	// 	}
	// 	return $users;

	// }

	// public function getId($id){
	// 	$query = "SELECT * FROM users WHERE id=".$id;
	// 	$result = $this->connection->query($query);
	// 	$user = $result->fetch_assoc();

	// 	return $user;


	// }

	// public function delete($id){
	// 	$query = "DELETE from users WHERE id= ".$id;
	// 	$status= $this->connection->query($query);
	// 	return $status;
	// }

	// public function insert($data){
	// 	$query= "INSERT INTO users(name,email,avatar) VALUES('".$data['name']."', '".$data['email']."' , '".$data['avatar']."')";
	// 	$status = $this->connection->query($query);
	// 	return $status;
	// }

	// public function update($data,$id){
	// 	$query= "UPDATE users SET name='".$data['name']."', email='".$data['email']."' , avatar='".$data['avatar']."' WHERE id='".$id."'";

	// 	$status= $this->connection->query($query);
	// 	return $status;
		

	// }
}

?>
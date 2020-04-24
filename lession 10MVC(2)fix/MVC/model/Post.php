<?php 

class Post{
	public $table;
	public $connection;
	function __construct(){
		
		$servername ='localhost';
		$username ='root';
		$pass='';
		$dbname = 'php_blog5';

		$conn = new mysqli($servername,$username,$pass,$dbname);
		mysqli_query($conn,"SET NAMES 'UTF8'");

	//Kiểm tra kết nối:
		if ($conn->connect_errno) {
			echo "Kết nối không thành công !" .$conn->connect_errno;
		}else{
	// echo "Kết nối thành công!";
		}
		$this->connection=$conn;

	}
	public function all(){
		//Câu lệnh truy vấn:
		$query = "SELECT * FROM posts" ;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);

		$posts =array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}
		return $posts;

	}
	public function add($data){
		$query = "INSERT INTO posts (";
		foreach ($data as $key => $value) {
			$query .= $key .",";
		}
		$query = substr_replace($query,")",-1);
		$query .=" VALUES (";
		foreach ($data as $key => $value) {
			$query .= "'" . $value . "'" . ",";
		}
		$query = substr_replace($query,")",-1);
		// die($query);
		$result =$this->connection->query($query);
		return $result;
	}

	public function update($data){
		$query = "UPDATE posts SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;
	}
	public function getById($id){
		$query = "SELECT * FROM posts WHERE id = ".$id;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);
		$post =$result->fetch_assoc();
		return $post;
	}
	public function Delete($id){
		$query = "DELETE FROM posts WHERE id = $id";
		// die($query);
		$result = $this->connection->query($query);
		return $result;
	}
	public function getPost($id){
	//Câu lệnh hiển thị dữ liệu:
		$query = "SELECT * FROM posts WHERE id = $id ";

	//Thực thi câu lệnh:
		$result = $this->connection->query($query);

	//Trả về 1 bản ghi:
		$post = $result->fetch_assoc();


	//USER:

		if ($post['user_id']) {
	//Viết câu lệnh thêm dữ liệu:
			$user_query = "SELECT * FROM users WHERE id = " .$post['user_id'];
	//Thực thi câu lệnh:
			$user_result = $this->connection->query($user_query);
	//Trả về 1 bản ghi:
			$user = $user_result->fetch_assoc(  );
			$post['user']= $user;
		}

	//CATEGORY:
		if ($post['category_id']) {
	//Viết câu lệnh thêm dữ liệu:
			$category_query = "SELECT * FROM categories WHERE id = ".$post['category_id'];
	//Thực thi câu lệnh:
			$category_result = $this->connection->query($category_query);
	//Trả về 1 bản ghi:
			$category = $category_result->fetch_assoc();
			$post['category']= $category;
		}else{
			echo "NO!";
		}
		return $post;
	}
}

?>
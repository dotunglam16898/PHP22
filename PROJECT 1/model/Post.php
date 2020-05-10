<?php 

require_once 'model/Category.php';
require_once 'model/User.php';
require_once 'model/Model.php';
class Post extends Model{
	protected $table = 'posts';



	public function getPost($id){
	//Câu l?nh hi?n th? d? li?u:
		$query = "SELECT * FROM posts WHERE id = $id ";

	//Th?c thi câu l?nh:
		$result = $this->connection->query($query);

	//Tr? v? 1 b?n ghi:
		$post = $result->fetch_assoc();


	//USER:
		if ($post['user_id']) {
	//Vi?t câu l?nh thêm d? li?u:
			$user_query = "SELECT * FROM users WHERE id = " .$post['user_id'];
	//Th?c thi câu l?nh:
			$user_result = $this->connection->query($user_query);
	//Tr? v? 1 b?n ghi:
			$user = $user_result->fetch_assoc(  );
			$post['user']= $user;
		}

	//CATEGORY:
		if ($post['category_id']) {
	//Vi?t câu l?nh thêm d? li?u:
			$category_query = "SELECT * FROM categories WHERE id = ".$post['category_id'];
	//Th?c thi câu l?nh:
			$category_result = $this->connection->query($category_query);
	//Tr? v? 1 b?n ghi:
			$category = $category_result->fetch_assoc();
			$post['category']= $category;
		}else{
			echo "NO!";
		}
		return $post;
	}


	// public function insert($data){



	
	// 	$data['thumbnail'] = $target_file;
	
	// 	$query = "INSERT INTO posts (";
	// 	foreach ($data as $key => $value) {
	// 		$query .= $key . ",";
	// 	}
	// 	$query = substr_replace($query,")",-1);
	// 	$query .= "VALUES (";
	// 	foreach ($data as $key => $value) {
	// 		$query .= "'" . $value . "'" . "," ;	

	// 	}
	// 	$query = substr_replace($query,")",-1);
	// 	$result= $this->connection->query($query);
	// 	return $result;
	// }


	// public function update($data){

	// 	if (isset($_POST['name'])) {
	// 		$target_dir= "./Upload/";
	// 		$file_info= $_FILES['thumbnail'];


	// 		$target_file = $target_dir.basename($file_info['name']);
	//  // link sẽ upload file lên


	// 		if (move_uploaded_file($file_info['tmp_name'],$target_file)) {


	// 		}else{
	// 			echo "Upload file khong thanh cong";

	// 		}


	// 	}
	// 	$data['thumbnail'] = $target_file;





	// 	$query = "UPDATE posts SET ";
	// 	foreach ($data as $key => $value) {
	// 		$query .= $key . "='" .$value ."',";
	// 	}
	// 	$query = substr_replace($query,"",-1);
	// 	$query .= " WHERE id = '".$data['id']."'";
	// 	$result = $this->connection->query($query);
	// 	return $result;

	// }
}
?>


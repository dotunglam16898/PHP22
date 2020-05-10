<?php


require_once 'model/Model.php';

class Category extends Model {
	
	// public $connection;
	protected $table = 'categories';



	public function insert($data){



		if (isset($_POST['name'])) {
			$target_dir= "./Upload/";
			$file_info= $_FILES['thumbnail'];


			$target_file = $target_dir.basename($file_info['name']);
	 // link sẽ upload file lên


			if (move_uploaded_file($file_info['tmp_name'],$target_file)) {


			}else{
				echo "Upload file khong thanh cong";

			}


		}
		$data['thumbnail'] = $target_file;
		
		$query = "INSERT INTO categories (";
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


	public function update($data){

		if (isset($_POST['name'])) {
			$target_dir= "./Upload/";
			$file_info= $_FILES['thumbnail'];


			$target_file = $target_dir.basename($file_info['name']);
	 // link sẽ upload file lên


			if (move_uploaded_file($file_info['tmp_name'],$target_file)) {


			}else{
				echo "Upload file khong thanh cong";

			}


		}
		$data['thumbnail'] = $target_file;





		$query = "UPDATE categories SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;

	}
}


?>
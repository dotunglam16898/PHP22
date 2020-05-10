<?php
require_once('model/Connection.php');

class Model extends Connection{
	public $connection;
	protected $table;
	private $query = [
			"SELECT" => "",
			"WHERE" => "",
			"ORDERBY" => "",
			"LIMIT" => "",
			"LIMITPAGE" => "",
			"GET" => "",
			"JOIN" => "",
	];

	function __construct(){
		
		$connect= new Connection();
		$this->connection= $connect->connection;
	}
	
	public function all(){
		$query = "SELECT * FROM ". $this->table;
		$result = $this->connection->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	public function getId($id){
		$query = "SELECT * FROM . $this->table WHERE id=" . $id;
		$result= $this->connection->query($query);
		$data= $result->fetch_assoc();
		return $data;

	}

	
	// public function update($data){
	// 	$query = "UPDATE $this->table SET ";

	// 	foreach ($data as $key => $value) {
	// 		$query .=$key ." = " . "'" . $value . "'" . ",";
	// 	}
	// 	$query = substr_replace($query, "", -1);
	// 	$query .="WHERE id =".$id;
	// 	// die($query);
	// 	$result = $this->connection->query($query);
	// 	return $result;
	// }
	public function update($data){
		$query = "UPDATE $this->table SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;

	}


	
	public function delete($id){
		$query = "DELETE FROM $this->table WHERE id=".$id;
		$status= $this->connection->query($query);
		return $status;
	}

	
	public function insert($data){
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
		$query = "SELECT * FROM " . $this->table . " WHERE " . $where;
		$result = $this->connection->query($query);
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		
		return $data;
	}
	// code cua t
	public function select($columns = []){
			if (empty($columns)) {
				$this->query["SELECT"] = "*";
			}else{
				foreach ($columns as $key => $value) {
					$this->query["SELECT"] .= $value . ",";
				}
				$this->query["SELECT"] = substr_replace($this->query["SELECT"], "", -1);
			}
			return $this;
		}

		public function where1($conditions = []){
			foreach ($conditions as $key => $condition) {
				if (is_array($condition)) {
					$this->query['WHERE'] .= implode(" ", $condition) . " and ";
				}else{
					$this->query['WHERE'] .= $key . " = " . "'" . $condition . "'" . " and ";
				}
			}
			$this->query['WHERE'] = substr($this->query['WHERE'], 0, -4);
			
			return $this;
		}

		public function limit($int){
			$this->query['LIMIT'] .= $int;
			return $this;
		}

		public function orderby($column){
			$this->query['ORDERBY'] .= $column . " " . "DESC";
			return $this;
		}

		public function get(){
			$query = "";
			if ($this->query["SELECT"] == "" || $this->query["SELECT"] == "*") {
				$query .= "SELECT * ";
			}else{
				$query .= "SELECT " . $this->query["SELECT"];
			}
			$query .= " FROM " . $this->table;
			if ($this->query['WHERE'] != "") {
				$query .= " WHERE " . $this->query['WHERE'];
			}
			if ($this->query['ORDERBY'] != "") {
				$query .= " ORDER BY " . $this->query['ORDERBY'];
			}
			// if ($this->query['JOIN'] != "") {
			// 	$query .= " INNER JOIN " . $this->query['ORDERBY'];
			// }
			if ($this->query['LIMIT'] != "") {
				$query .= " LIMIT " . $this->query['LIMIT'];
			}
			// if ($this->query['LIMITPAGE'] != "") {
			// 	$query .= " LIMIT " . $this->query['LIMITPAGE'];
			// }
			 // die($query);
			$result = $this->connection->query($query);
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
}

?>
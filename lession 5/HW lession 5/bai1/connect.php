<?php
$servername ="localhost";
$username = "root";
$password="";
$dbname="php_blog2";

$conn= new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");
// //cau lenh truy van
// $query = "SELECT * FROM users";
// //thuc thi cau lenh
// $result= $conn->query($query);
// //tao 1 mang de chua du lieu
// $users= array();
if ($conn->connect_errno) {
	echo "Failed to connect".$conn->connect_error;
	exit();
}else{
	//echo "Success";
}




?>



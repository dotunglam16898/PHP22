<?php
$servername= "localhost";
$username ="root";
$password="";
$dbname="php_blog2";

$conn= new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");

if ($conn->connect_errno) {
	echo "Failed to connect".$conn->connect_error;
	exit();
}else{
	//echo "Success";
}

?>
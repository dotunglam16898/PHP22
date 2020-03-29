<?php
require_once('connect.php');

$data=$_POST;
$query="INSERT INTO categories(name,slug,description,created_at) VALUES('".$data['name']."', '".$data['slug']."', '".$data['description']."', '".$data['created_at']."')";
$status= $conn->query($query);
header("Location:categories.php");

?>
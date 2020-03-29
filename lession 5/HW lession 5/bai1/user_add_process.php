<?php
require_once('connect.php');

$data= $_POST;
//print_r($data);

$query= "INSERT INTO users(name,email) VALUES('".$data['name']."', '".$data['email']."')";
$status = $conn->query($query);

header("Location: users.php");


?>
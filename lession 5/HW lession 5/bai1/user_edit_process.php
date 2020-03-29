<?php
$id= $_POST['id'];
require_once('connect.php');
$data= $_POST;
$query= "UPDATE users SET name='".$data['name']."', email='".$data['email']."' WHERE id='".$id."'";
$status= $conn->query($query);

header("Location:users.php");

?>
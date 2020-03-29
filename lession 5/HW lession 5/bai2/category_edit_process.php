<?php
require_once('connect.php');
$id=$_POST['id'];
$data=$_POST;
$query= "UPDATE categories SET name='".$data['name']."', slug='".$data['slug']."', description='".$data['description']."', created_at='".$data['created_at']."' WHERE id='".$id."'  ";
$status= $conn->query($query);
header("Location:categories.php");
?>
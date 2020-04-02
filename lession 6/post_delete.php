<?php
$id=$_GET['id'];
require_once "connect.php";

$query = "DELETE from posts WHERE id= $id";
$status= $conn->query($query);
header("Location: posts.php");



?>
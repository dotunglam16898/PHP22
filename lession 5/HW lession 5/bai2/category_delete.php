<?php
require_once('connect.php');
$id=$_GET['id'];
$query="DELETE FROM categories WHERE id=".$id;
$status= $conn->query($query);

header("Location:categories.php");

?>
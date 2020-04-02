<?php

require'connect.php';
require'upload.php';
$data= $_POST;
// print_r($data);
// die();
$query="INSERT INTO posts(title,description,content,thumbnail,user_id,category_id) VALUES('".$data['title']."', '".$data['description']."', '".$data['content']."','".$target_file."', '".$data['user_id']."', '".$data['category_id']."')";
$status= $conn->query($query);
// echo $query;
// die();

// echo "<pre>";
// print_r($target_file);
// echo "</pre>";
header("Location: posts.php");




?>
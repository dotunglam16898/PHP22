<?php
function getCategories($conn){
	$query = "SELECT * FROM categories";
//2.2 Thuc thi cau lenh
	$result = $conn->query($query);
//var_dump($result);

//BUOC 3:
//tao 1 mang de chua du lieu
	$categories = array();

	while ($row = $result->fetch_assoc()) {
		$categories [] = $row;
	}
	return $categories;
}
function getPost($conn,$id){
	$post_query="SELECT*FROM posts WHERE id=".$id;
	$post_result=$conn->query($post_query);

	$post=$post_result->fetch_assoc();


//user
	if ($post['user_id']) {
		$user_query="SELECT*FROM users WHERE id=".$post['user_id'];
		$user_result=$conn->query($user_query);

		$user=$user_result->fetch_assoc();
		$post['user']=$user;
	}else{
		echo "no";
	}

//CATEGORY
	if ($post['category_id']) {
		$category_query="SELECT*FROM categories WHERE id=".$post['category_id'];
		$category_result=$conn->query($category_query);

		$category=$category_result->fetch_assoc();
		$post['category']=$category;
	}else{
		echo "no";
	}
	return $post;
}

function getUsers($conn){
	$users_query = "SELECT * FROM users";
//2.2 Thuc thi cau lenh
	$users_result = $conn->query($users_query);
//var_dump($result);

//BUOC 3:
//tao 1 mang de chua du lieu
	$users = array();

	while ($row = $users_result->fetch_assoc()) {
		$users[] = $row;
	}
	return $users;
}


?>
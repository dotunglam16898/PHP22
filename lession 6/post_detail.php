<?php
$id=$_GET['id'];
require_once('connect.php');
//$post['content']= htmlspecialchars($_POST['content']);


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
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POTS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	


	<div class="container">
		<h3 class="text-center">--- INFO POST---</h3>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>TITLE</th>
				
				<th>USER</th>
				<th>DANH MUC</th>
				<th>CONTENT</th>
				

			</thead>
			
				<tr>
					<td><?php echo $post['id'];?></td>
					<td><?php echo $post['title'];?></td>
					
					<td><?php echo $post['user']['name']?></td>
					<td><?php echo $post['category']['name']?></td>
					<td><?php echo $post['content']?></td>
					

					
				</tr>
		
		</table>
		<a href="posts.php" class="btn btn-primary">quay lai</a> 
	</div>

</body>
</html>
<?php
require_once('connect.php');
$id=$_GET['id'];
// echo $id;
$query = "SELECT * FROM categories WHERE id=".$id;
$result= $conn->query($query);
//tra ve 1 ban ghi
$category= $result->fetch_assoc();


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DevMind - Education And Technology Group</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">DevMind - Education And Technology Group</h3>
		<h3 align="center">Edit Category</h3>
		<hr>
		
		<form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $category['name'] ?>">
			</div>
			<div class="form-group">
				<label for="">Slug</label>
				<input type="text" class="form-control" id="" placeholder="" name="slug" value="<?php echo $category['slug'] ?>">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" id="" placeholder="" name="description" value="<?php echo $category['description'] ?>">
			</div>
			<div class="form-group">
				<label for="">Created at</label>
				<input type="date" class="form-control" id="" placeholder="" name="created_at" value="<?php echo $category['created_at'] ?>">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
			<a href="categories.php" class="btn btn-primary">quay lai</a> 
		</form>
	</div>
</body>
</html>
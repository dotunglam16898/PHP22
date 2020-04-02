<?php
require_once('connect.php');
$query= "SELECT * FROM categories";

$result= $conn->query($query);

$categories=array();
while ($row=$result->fetch_assoc()) {
	$categories[]= $row;
}

//---------------------------------------------------------

$query="SELECT *FROM users";
//thuc thi cau lenh
$result= $conn->query($query);
//Tao 1 mang chua du lieu
$users=array();
while ($row=$result->fetch_assoc()) {
	$users[]= $row;
}



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

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
	
</head>
<body>
	<div class="container">
		<h3 align="center">DevMind - Education And Technology Group</h3>
		<h3 align="center">Add New Pots</h3>
		<hr>
		<form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" id="" placeholder="" name="title">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" class="form-control" id="" placeholder="" name="description">
			</div>
			<div class="form-group">
				<label for="">Thumbnail</label>
				<input type="file" class="form-control" id="thumbnail" placeholder="" name="thumbnail">
			</div>
			<div class="form-group">
				<label for="">Noi dung</label>
				<textarea class="form-control" id="summernote" placeholder="" name="content"></textarea>
			</div>
			<div class="form-group">
				<label for="">Danh muc</label>
				<select class="form-control" name="category_id">
					<?php foreach ($categories as $category ) { ?>
						<option value="<?php echo $category['id'];?>"><?php echo $category['name']; ?>   </option>
					<?php	} ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">User</label>
				<select class="form-control" name="user_id">
					<?php foreach ($users as $user ) { ?>
						<option value="<?php echo $user['id'];?>">   <?php echo $user['name']; ?>   </option>
					<?php	} ?>
				</select>
			</div>
			<button name="submit" type="submit" class="btn btn-primary" >Create</button>
		</form>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script >
	$(document).ready(function() {
		$('#summernote').summernote()
	});
</script>
</html>
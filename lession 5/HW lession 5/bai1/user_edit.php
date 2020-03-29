<?php 

require_once ('connect.php');
$id = $_GET['id'];

echo $id;

// Viết câu lệnh để thêm dữ liệu
$query = "SELECT * FROM users WHERE id = ". $id;

// Thực thi câu lệnh
$result = $conn->query($query);
    // Trả về 1 bản ghi
$user = $result->fetch_assoc();
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
		<h3 align="center">Edit User</h3>
		<hr>
		
		<form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name'] ?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email'] ?>">
			</div>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
</body>
</html>
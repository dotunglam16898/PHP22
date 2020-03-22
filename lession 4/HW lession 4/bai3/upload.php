<?php
session_start();

if (isset($_POST['submit'])) {
	$target_dir= "uploads/";
	$file_info= $_FILES['ANH_SP'];

	$target_file = $target_dir.basename($file_info['name']);


	if (move_uploaded_file($file_info['tmp_name'],$target_file)) {
		echo "File :" . basename($file_info['name']). " Đã được upload!!!!";

	}else{
		echo "Upload file khong thanh cong";

	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>UPLOAD DOCUMENTS</legend>

			<!-- <div class="form-group">
				<label for="">Tên tài liệu</label>
				<input type="text" class="form-control" id="" placeholder="" name="Ten_tailieu">
			</div> -->

			<div class="form-group">
				<label for="">Image</label>
				<!-- <input type="text" class="form-control" id="" placeholder="Nhập vào họ và tên" name="name"> -->
				<input type="file" name="ANH_SP" id="" class="form-control">
			</div>  
			<button type="submit" class="btn btn-primary" value="upload image" name="submit">Upload</button>
			<a href="index.php" title=""><button type="button" class="btn btn-primary">Quay lai</button></a>
		</form>
		
	</body>
	</html>
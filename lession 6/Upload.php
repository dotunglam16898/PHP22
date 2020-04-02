<?php
// if (isset($_POST['submit'])) {
// 	$target_dir = "Upload/";
// 	$file_info = $_FILES['thumbnail'];

// 	$target_file = $target_dir.basename($file_info['name']);

// 	if (move_uploaded_file($file_info['tmp_name'] , $target_file)) {
		
// 	}else{
// 		echo "Upload ko thanh cong";
// 	}
// }
// echo "<pre>";
// print_r($target_file);
// echo "</pre>";

if (isset($_POST['submit'])) {
	$target_dir= "Upload/";
	$file_info= $_FILES['thumbnail'];

	$target_file = $target_dir.basename($file_info['name']);


	if (move_uploaded_file($file_info['tmp_name'],$target_file)) {
		// echo "File :" . basename($file_info['name']). " Đã được upload!!!!";

	}else{
		echo "Upload file khong thanh cong";

	}

}
// echo "<pre>";
// print_r($target_file);
// echo "</pre>";

?>
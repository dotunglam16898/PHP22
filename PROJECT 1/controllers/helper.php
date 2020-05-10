<?php 
class Helper{
	public function file_upload($target_dir,$input_name,$max_size,$formats_allowed_array){
		$target_file = $target_dir . "/" . basename($_FILES[$input_name]["name"]);
		$uploadOK = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$error_arr = array();

		//check if file already exist
		if (file_exists($target_file)) {
			$error_arr[] = "Sorry, the files already exist";
			$uploadOK = 0;
		}

		//check size file
		if ($_FILES[$input_name]["size"] > $max_size) {
			$error_arr[] = "Sorry, your file is too large";
			$uploadOK = 0;
		}

		//check Allow certain file format

		if (!in_array($imageFileType, $formats_allowed_array)) {
			$error_arr[] = "Sorry, only " . implode(array_values($formats_allowed_array), ',') . " File are allowed.";
			$uploadOK = 0;
		}

		if ($uploadOK == 0) {
			$error_arr[] = "Sorry, your file was not uploaded";
		}else{
			if (move_uploaded_file($_FILES[$input_name]['tmp_name'], $target_file)) {
				return "/".$_FILES[$input_name]['name'];
			}
			else{
				$error_arr[] = "Sorry, there was an error uploading your file";
			}
		}
		return $error_arr;
	}
	public function to_slug($str) {
		$str = trim(mb_strtolower($str));
		$str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
		$str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
		$str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
		$str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
		$str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
		$str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
		$str = preg_replace('/(đ)/', 'd', $str);
		$str = preg_replace('/[^a-z0-9-\s]/', '', $str);
		$str = preg_replace('/([\s]+)/', '-', $str);
		return $str . "-" . time();
	}
}
?>
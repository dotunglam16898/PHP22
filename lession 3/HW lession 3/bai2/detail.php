<?php 
	session_start();
	$msv=$_GET['msv'];
	$std= $_SESSION['student'];
	$data=array();
	foreach ($std as $key => $value) {
		if($key==$msv){
			$data=$value;
		}
	}

	 echo"Mã sinh viên: ".$data['MSV']."<br>";
	 echo"Họ và tên: ".$data['NAME']."<br>";  
	 echo"Số điện thoại: ".$data['PHONE']."<br>" ; 
	 echo"Email: ".$data['EMAIL']."<br>" ;
	 echo"Giới tính: ".$data['GENDER']."<br>"  ;
	 echo"Địa chỉ: ".$data['ADDRESS']."<br>" ; 
	
?>



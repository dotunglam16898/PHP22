<?php
echo "<legend><h3><center>ZENT GROUP-PHP-Thực hành về gửi dữ liệu dùng POST</center></h3></legend>";
echo "<hr></hr>";
echo "<center><h4>THÔNG TIN SINH VIÊN</h4></center>";
echo "Mã sinh viên :" .$_POST['id']."<br>";
echo "Họ và tên :" .$_POST['name']."<br>";
echo "Số điện thoại :" .$_POST['phone']."<br>";
echo "Email :" .$_POST['email']."<br>";

if (isset($_POST['gender'])) {
	$gender= $_POST['gender'];
	echo "Giới tính:".$gender."<br>";
}


echo "Địa chỉ :" .$_POST['address'];

?>
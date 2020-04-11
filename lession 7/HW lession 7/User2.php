<?php
class User{
	var $name;
	var $email;
	var $password;
	var $avatar;

	public function inTT(){
		echo "<br>------THÔNG TIN NGƯỜI DÙNG------";
		echo "<br>-Họ và tên :" .$this->name;
		echo "<br>-Email:" .$this->email;
		echo "<br>-Mật khẩu : " .$this->password;
		echo "<br>-Ảnh đại diện :" .$this->avatar;
		echo "<br>";
	}
}

$user1= new User();
$user1->name="Đỗ Tùng Lâm";
$user1->email="ddotunglam@gmail.com";
$user1->password="12344";
$user1->avatar="anh.png";
$user1->inTT();

$user2= new User();
$user2->name="Giang Đức Duy";
$user2->email="duygiang@gmail.com";
$user2->password="12344345";
$user2->avatar="anh2.png";
$user2->inTT();

$user3= new User();
$user3->name="Đặng Tuấn Anh";
$user3->email="tuananhlg97@gmail.com";
$user3->password="099999";
$user3->avatar="anh6.png";
$user3->inTT();


?>
<?php
session_start();
$MaSP=$_GET['msp'];

if ($_SESSION['products'][$MaSP]['SoLuong']  > 1) {
	$_SESSION['products'][$MaSP]['SoLuong'] -=1;
}else{
	unset($_SESSION['products'][$MaSP]);
}
header('location: cart_detail.php');
?>
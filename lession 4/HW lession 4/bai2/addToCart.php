<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require"products.php";
// session_destroy(); //xoa toan bo session

if (isset($_GET['msp'])) {
	$msp=$_GET['msp'];

	if (isset($_SESSION['products'][$msp])) {
		$_SESSION['products'][$msp]['SoLuong'] +=1;

		
	}else{
		$cart_product= $products[$msp];
		$cart_product['SoLuong']=1;
		$cart_product['time']=date('d/m/y h:s:i');
		$_SESSION['products'][$msp] = $cart_product;
	}
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
}
header('Location: cart_detail.php');
?>
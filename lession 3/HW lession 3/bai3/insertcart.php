<?php
session_start();
$_SESSION['products']=$products;

$MaSP= $_GET['MaSP'];

// Kiem tra xem da co trong gio hang chua
	if(isset($_SESSION['cart'][$MaSP])){
		// San pham da co trong gio hang
		$_SESSION['cart'][$MaSP][2]++;
	}else{
		// Buoc 2: Lay san pham co ma gui qua tu session
		$product = $products[$MaSP];
		$product[2] = 1;
		// Buoc 3: 
		$_SESSION['cart'][$MaSP] = $product;
	}


header('Location:cart.php');


?>
<?php
session_start();
$masp=$_GET['MaSP'];
unset($_SESSION['cart'][$masp]);
header('location:cart.php');

?>
<?php
session_start();

$data=array(
'MSV' => $_POST['msv'],
'NAME' => $_POST['user'],
'PHONE' => $_POST['phone'],
'GENDER' => $_POST['gender'],
'EMAIL' => $_POST['email'],
'ADDRESS' => $_POST['address']



);
// if(isset($_POST['submit'])){
// 	$data = array(
// 	'MSV'=>$_POST['id'],
// 	'NAME'=>$_POST['user'],
// 	'PHONE'=>$_POST['phone'],
// 	'EMAIL'=> $_POST['email'],
// 	'GENDER'=> $_POST['gender'],
// 	'ADDRESS'=> $_POST['address'],
// 	);


// }

// $_SESSION['student']['MSV']=$data;
$_SESSION['student'][$_POST['msv']]=$data;
header('Location: list.php');
?>
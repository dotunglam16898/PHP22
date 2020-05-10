<?php
// $mod = $_GET['mod'];  
// 						///lession%2010MVC(2)fix/MVC/index.php?mod=category&act=list
// $act = $_GET['act'];

// $class_name= ucfirst($mod)."Controller"; //ucfirst de viet hoa chu cai dau 
// $path= __DIR__ . "/controllers/".$class_name. ".php";  //DIR la duong dan tuyet doi
// //echo"$path";
// if (!file_exists($path)) {
// 	echo "File $path khong ton tai ";
// 	exit();
// }
// require_once($path);
// $controller_obj= new $class_name();

// if (!method_exists($controller_obj,$act)) {
// 	echo "Method $act() ko ton tai";
// 	exit();
// }
// $controller_obj->$act();

session_start();
$mod = "home";
$act = "index";

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}
if (isset($_GET['act'])) {
	$act = $_GET['act'];
}
// $mod = $_GET['mod'];
// $act = $_GET['act'];



$class_name = ucfirst($mod) . "Controller";
$path = __DIR__ . "/controllers/" . $class_name .".php";
if (!file_exists($path)) {
	//Ði?u ki?n không có file:
	echo "file $path không t?n t?i";
	exit();
}
require_once($path);
$controller_obj = new $class_name();
if (!method_exists($controller_obj,$act)) {
	//Ði?u ki?n không có method:	
	echo "Method không t?n t?i";
}
$controller_obj->$act();

?>









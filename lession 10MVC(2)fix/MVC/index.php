<?php
$mod = $_GET['mod'];  
						///lession%2010MVC(2)fix/MVC/index.php?mod=category&act=list
$act = $_GET['act'];

$class_name= ucfirst($mod)."Controller"; //ucfirst de viet hoa chu cai dau 
$path= __DIR__ . "/controllers/".$class_name. ".php";  //DIR la duong dan tuyet doi
//echo"$path";
if (!file_exists($path)) {
	echo "File $path khong ton tai ";
	exit();
}
require_once($path);
$controller_obj= new $class_name();

if (!method_exists($controller_obj,$act)) {
	echo "Method $act() ko ton tai";
	exit();
}
$controller_obj->$act();

?>
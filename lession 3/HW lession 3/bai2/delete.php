<?php
	
	session_start();
	$msv=$_GET['msv'];
	$std= $_SESSION['student'];
	
	foreach ($std as $key => $value) {
		if($key==$msv){
			unset($_SESSION['student'][$msv]);
		}
	}
	header('Location:list.php');	 
 ?>
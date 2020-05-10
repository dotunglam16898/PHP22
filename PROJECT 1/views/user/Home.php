<?php
if (isset($_SESSION['name'])) {
	echo $_SESSION['name'] . "Da dang nhap thanh cong";
}else{
	echo "Dang nhap that bai";
}


?>
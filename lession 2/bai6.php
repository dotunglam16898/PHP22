<?php
$chuoi = 'ZenttneZ';

if (kiem_tra_chuoi_palindrome($chuoi)) {
	echo "Đây là chuỗi Palindrome !";
}else{
	echo "Đây không phải chuỗi Palindrome !";
}

function kiem_tra_chuoi_palindrome($chuoi)   
{  
	if ($chuoi == strrev($chuoi))// đảo chuỗi và so sánh vs chuỗi ban đầu  
		return 1;  
	else  
		return 0;  
}  
?>
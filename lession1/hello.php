<?php
// echo "Hello word !<br>";

// echo "Hello zent group<br>";
// echo "Do tung lam";


// $name="xin chao zent group<br>";
// $ten="Do tung lam ";
// echo "hello ". $ten."!!!!!!" ;
// echo $name;

// $name="zent group";
// echo "<b><h1>Xin chao</h1></b>". $name ."!!!!!!";

// $name="Zent group";
// $slogan="where your code begins";
// echo "Slogan $name-$slogan <br>";
// echo 'Slogan '.$name.'-'.$slogan."<br>";
// echo "<b>Slogan zent-$slogan</b> <br>";

// define('USER', 'Do tung lam'); //HANG SO
// define('PASS','123456');

// echo USER;
// echo PASS;

// echo 1; //KIEU DU LIEU
// echo 'xin chao ';

// echo 1.2;

// echo true;

// echo false;

// $a=[1,2,3,4,56565,777];
// echo 10+8 . "<br>";
// echo 10-8 . "<br>";
// echo 10*8 . "<br>";
// echo 10/2 . "<br>";
// echo 10%8 . "<br>";

//x=b-a
// $a=5;
// $b=10;
// $x=$b-$a;
// echo "x=". $x;

// $a=5; //SO SANH
// // echo $a==5;
// echo $a>7;

// $a=5;
// $a++;
// //$a=$a+1;


// $b=10;
// $a+=$b;
// echo $a;

//CAU TRUC DIEU KHIEN RE NHANH
// $numb=7;
// if ($numb % 2 ==0) {
// 	echo $numb. " la so chan";
// } else {
// 	echo $numb. " ko la so chan";
// }

// $numb=0;
// if ($numb >0) {
// 	echo "Số".$numb."là số dương";
// 	if ($numb %2 ==0) {
// 		echo "Số".$numb."là số dương chẵn";

// 	}else{
// 		echo "Số ".$numb."là số dương lẻ";
// 	}
// } else if($numb<0){
// 	echo "Số ".$numb."là số âm";
// 	if ($numb%2==0) {
// 		echo "Số ".$numb."là số âm chẵn";

// 	}else{
// 		echo "Số ".$numb."là số âm lẻ";
// 	}

// }else{
// 	echo "Số ".$numb."là số không";

// }

//Cấu trúc điều khiển lồng nhau
//c1
// $numb=0;
// if ($numb==2) {
// 	echo "Hôm nay là thứ hai";
	
// }else if($numb==3){
// 	echo "Hôm nay là thứ ba";
// }else if ($numb==4) {
// 	echo "Hôm nay là thứ tư";
	
// }else if ($numb==6) {
// 	echo "Hôm nay là thứ sáu";
	
// }else if($numb==8){
// 	echo "Hôm nay là chủ nhật";

// }else{
// 	echo "Không hợp lệ";
// }

//c2
// $numb=4;
// switch ($numb) {
// 	case 2:{
// 		echo "Hôm nay là thú hai";
// 	}break;
// 	case 3:{
// 		echo "Hôm nay la thứ ba";
// 	}break;
// 	case 4:{
// 		echo "Hôm nay là thứ tư";
// 	}break;
// 	case 5:{
// 		echo "Hôm nay là thứ năm";
// 	}break;
// 	case 6:{
// 		echo "Hôm nay là chủ nhật";
// 	}break;
// 	default:{
// 		echo "Không hợp lệ";
// 	}break;
// }

//VÒNG LẶP
//C1:VÒNG LẶP FOR
for ($i=0; $i <=10 ; $i++) { 
	echo "<br> Anh xin lỗi !";
}
//C2:WHILE
$i=1;
while ( $i<= 10) {
	echo "<br> Anh xin lỗi e !!";
	$i++;
}
//C3:Do..while
$i=1;
do{
	echo "<br>Đỗ tung lâm";
	$i++;
}while ( $i<= 10);
	







?>
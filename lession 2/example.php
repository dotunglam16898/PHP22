<?php
//MẢNG 1 CHIỀU

// $arr_name=array();

// //GÁN GTRI CHO MẢNG
// //CÁCH 1:
// $arr_name=array('Zent','be all you can be');

// var_dump($arr_name);
// print_r($arr_name);
// echo  "<pre>";
// 	print_r($arr_name);
// echo "</pre>";

// //CÁCH 2
// $arr_name=array(
// 	0 => 'zent',
// 	1 => 'be all you can be'

// );
// //In mảng
// var_dump($arr_name);

// //CÁCH 3
//  $arr_name = array(); 

//     $arr_name[] = 'Zent Group';
//     $arr_name[] = 'Be all you can be';
//     $arr_name[] = 2;
//  //In mag
//  var_dump($arr_name);

//  //CACH 4
//  $arr_name = array(); 

//     $arr_name[0] = 'Zent Group';
//     $arr_name[1] = 'Be all you can be';
//     $arr_name[2] = 2;

//     // In mảng 

//     echo  "<pre>";
//        print_r($arr_name);
//     echo "</pre>";

//CÁCH 5:KHAI BÁO MẢNG KO TUẦN TỰ

// $user=array();

// $user['name']='Do tung lam';
// $user['age']='21';
// $user['address']='Ha noi';
// $user['sex']='Nam';

// echo "<pre>";
// print_r($user);
// echo "</pre>";


//CÁCH ĐỌC GIÁ TRỊ CHO MẢNG
$arr_name=array();
$arr_name[0]='zent';
$arr_name[1]='be all you can be';
$arr_name[2]=3;
//đọc giá trị từng phần tử bằng index c1
// echo "<br> Phần tử thứ 0 :".$arr_name[0];
// echo "<br> Phần tử thứ 1 :".$arr_name[1];
// echo "<br> Phần tử thứ 2 :".$arr_name[2];

//C2:
// foreach ($arr_name as $key => $value) { //sử dụng khi muốn in hết các phần tử trong mảng
// 	echo "<br> Phan tu thu ".$key.":".$value;
// }

// //C3:
//  for($i = 0 ; $i < count($arr_name) ; $i++){ //sử dụng khi muốn in 1 số lượng phần tử nhất định
//        echo  "<br> Phần tử thứ ".$i." : " . $arr_name[$i];
//     }


//MẢNG 2 CHIỀU
$arr_name=array();
$arr_name[0][0]='zent';
$arr_name[0][1]='group';
$arr_name[1][0]='be all you can be';
$arr_name[1][1]='2 years';
//in mang
// echo"<pre>";
// print_r($arr_name);
// echo "</pre>";

// echo "<br> Phần tử thứ 0,0 :".$arr_name[0][0];
// echo "<br> Phần tử thứ 0,1 :".$arr_name[0][1];
// echo "<br> Phần tử thứ 1,0 :".$arr_name[1][0];
// echo "<br> Phan tu thu 1,1 :".$arr_name[1][1];

//In mang
// foreach ($arr_name as $key1 => $value1) {
// 	echo '-----------'."<br>";
// 	foreach ($value1 as $key2 => $value2) {
// 		echo $value2."<br>";
// 	}
// }

//KHAI BAO MANG 2 CHIEU NANG CAO
$info=array();

$info[]=array(
'ID'=> '01229',
'NAME'=>'Do tung lam',
'EMAIL'=>'lam@gmail.com',
'PHONE'=>'09293993939',

);

$info[]=array(
'ID'=> '01233',
'NAME'=>'Giang duc duy',
'EMAIL'=>'duy@gmail.com',
'PHONE'=>'092933939',

);

$info[]=array(
'ID'=> '01455',
'NAME'=>'Dang Tuan anh',
'EMAIL'=>'TAlg@gmail.com',
'PHONE'=>'0923944139',

);
//Doc thong tin cua mang
foreach ($info as $key => $student) {
	echo "Thông tin sinh viên thứ :" .($key+1);
	echo "<br>";
	echo "<br>Mã sinh viên :".$student['ID'];
	echo "<br>Họ và tên :".$student['NAME'];
	echo "<br>EMAIL :".$student['EMAIL'];
	echo "<br>Số điện thoại :".$student['PHONE'];

}

?>
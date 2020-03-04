<?php
$number=1;

//C1:
/*if (kiem_tra_chan_le($number)) {
	echo "So chan";
}else {
	echo "So le";
}

function kiem_tra_chan_le($number){
	if ($number%2==0) {
		return true;
	}else return false;
}*/

//C2
// kiem_tra($number); //$number la input output la so chan le


// function kiem_tra($number){
// 	if ($number%2==0) {
// 		echo "Day la so chan!";
// 	}else {
// 		echo "Day la so le";
// 	}
// }

//TRUYỀN BIẾN VÀO HÀM

/*echo tinhtong(4,7,1);
function tinhtong($a,$b,$c){
	$tong=$a+$b+$c;
	return "Tổng là:".$tong;
}

echo tinhtong(4,7);
function tinhtong($a,$b,$c=0){
	
	return $a+$b+$c;;
}*/

//BIẾN TOÀN CỤC VÀ CỤC BỘ
/*$bien_toan_cuc=12;
kiem_tra();

function kiem_tra(){
	//biến cục bộ
	$bien_cuc_bo=13;

	//lấy biến toàn cục
	global $bien_toan_cuc;

	if ($bien_cuc_bo%$bien_toan_cuc) {
		//return true;
		echo "dung";
	}else{
		//return false
		echo "sai";;
	}

}*/

// function kiemtra(){ //BIẾN TĨNH STATIC
// 	static $a=0;
// 	$a++;
// 	echo $a;
// }
// kiemtra();
// kiemtra();
// kiemtra();

//CÁC HÀM THƯỜNG DÙNG

//ham in_array
// $name =array('lam','duy','manh','zent');
// var_dump(in_array('lam',$name));
// var_dump(in_array('ta',$name));

// //ham array_search
// $index=array_search('lam',$name);
// if ($index !== FALSE) {
// 	echo "Vi tri phan tu la:" .$index;
// }else{
// 	echo "ko tim thay phan tu";
// }

// //ham array_key_exists
// $info = array(
// 	'ID'   =>  '20092671',
// 	'NAME'   =>  'Do tung lam',
// 	'PHONE'   =>  '012346567899',
// 	'EMAIL'   =>  'lam@gmail.com',

// );
// if(array_key_exists('ID',$info)){
//           echo "ID: " . $info['ID'];
//     }else{
//           echo "Không tồn tại key";
//     }


date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date('d/m/Y - H:i:s');
?>
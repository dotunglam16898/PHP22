<?php
$a=0;
$b=2;



if ($a==0) {
	if ($b==0) {
		echo "Phương trình có vô số nghiệm";
	}else{
		echo "Phương trình vô nghiệm";
	}
}else{
	$x=-$b/$a;
	echo "phương trình có nghiệm là: ".$x;
}

?>
<?php
$a=0;
$b=4;
$c=2;

if($a==0){
	if($b==0){
		if ($c==0) {
			echo "Phương trình có vô số nghiệm";
		}else{
			echo "Phương trình vô nghiệm";
		}
	}else{
		$x=-$c/$b;
		echo "Nghiệm phương trình là: ".$x ;
	}
}else{
	$delta=$b*$b - 4*$a*$c;
	if ($delta<0) {
		echo "Phương trình vô nghiệm";
	}else if ($delta>0) {
		$x1=(-$b + sqrt($delta)) / (2*$a);
		$x2=(-$b - sqrt($delta)) / (2*$a);
		echo "phương trình có nghiệm x1= ".$x1."<br>";
		echo "phương trình có nghiệm x2= ".$x2;
	}else{
		$x=-$b/(2*$a);
		echo "Phương trình có nghiệm kép x= ".$x;
	}
}

?>
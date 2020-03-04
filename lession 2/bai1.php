<?php
$arr=array(1,4,2,6,9,100,45,8,20);

$max=null;
for ($i=0; $i < count($arr) ; $i++) { 
	if ($max==null) {
		$max=$arr[i];
		# code...
	}else{
		if ($arr[i]>$max) {
			$max==$arr[i];
		}
	}
}
echo "So lon nhat la:" .$max;
?>
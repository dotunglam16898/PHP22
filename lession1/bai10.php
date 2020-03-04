<?php
$s = 0;
$giaithua = 1;
$n = 10;
for ($i = 1; $i <= $n; $i++) { 
	$giaithua *= $i;
	$s += ($i/$giaithua);
}
echo "Tổng S = " . $s;

?>
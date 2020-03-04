<?php
for ($i=0; $i <=7 ; $i++) { 
	for ($j=7; $j >=0 ; $j--) { 
		if ($j>=$i) {
			echo "*";
		}else{
			echo "&nbsp";
		}
	}
	echo "<br>";
}

?>
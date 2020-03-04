<?php


for ($i=1; $i <= 7; $i++) { 
		for ($j=1; $j <= 7; $j++) { 
			if ($j >= $i) {
				echo "#";
			}else{
				echo "&nbsp&nbsp";
			}
		}
		echo " <br>";
	}
?>
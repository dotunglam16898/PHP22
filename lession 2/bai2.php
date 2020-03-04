<?php

$arr_name=array(1,4,2,6,9,100,4);
    

    // for($i = 6 ; $i <= count($arr_name) ; $i--){
    //    echo " " . $arr_name[$i];
    // }
$data=array_reverse($arr_name);
echo "<pre>";
    print_r($data);
echo "</pre>";

?>
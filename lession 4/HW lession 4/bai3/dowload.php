<?php



$fpath = "Screenshot (1).png"; // tên file muốn dowload
$fopen = fopen($fpath,"rb");
header("Content-Type:application/octet-stream");
header("Content-Length:".filesize($fpath));
header("Content-Disposition:attachment; filename=".$fpath);
$fread = fpassthru($fopen);
fclose($fopen);



?>
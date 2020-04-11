<?php
class Category{
	var $name;
	var $url;
	var $danhmuccha;
	var $image;
	var $description;

	public function inTT(){
		echo "<br>-------THÔNG TIN DANH MỤC-------";
		echo "<br>-Tên danh mục:" . $this->name;
		echo "<br>-Đường dẫn:" . $this->url;
		echo "<br>-Danh mục cha:" . $this->danhmuccha;
		echo "<br>-Hình ảnh:" . $this->image;
		echo "<br>-Mô tả:" . $this->description;
		echo "<br>";
	}
}

$category1= new Category();
$category1->name="Thời sự";
$category1->url="vnexpress.vn";
$category1->danhmuccha="Null";
$category1->image="anh.jpg";
$category1->description="Mô tả về thời sự trong nước";
$category1->inTT();

$category2= new Category();
$category2->name="Thể thao";
$category2->url="vnexpress.vn";
$category2->danhmuccha="Null";
$category2->image="anh2.jpg";
$category2->description="Mô tả về Thể thao";
$category2->inTT();

$category3= new Category();
$category3->name="Văn hóa";
$category3->url="vnexpress.vn";
$category3->danhmuccha="Null";
$category3->image="anh3.jpg";
$category3->description="Mô tả về văn hóa";


$category3->inTT();
?>
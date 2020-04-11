<?php
class Post {
	var $title;
	var $url;
	var $description;
	var $content;

	function inTT() {
		echo "<br>------THÔNG TIN BÀI VIẾT--------";
		echo "<br>-Tiêu đề : ". $this->title;
		echo "<br>-Đường dẫn :". $this->url;
		echo "<br>-Mô tả :". $this->description;
		echo "<br>-Nội dung :". $this->content;
		echo "<br>";

	}
}

$post1 = new Post();
$post1->title="Đại dịch Corona";
$post1->url="vnexpress.vn";
$post1->description="Như vậy, buổi sáng không có ca nhiễm mới, buổi tối thêm 4 ca, tổng số bệnh nhân lên 249.";

$post1->content="Ca thứ 19 liên quan Buddha Bar & Grill được ghi nhận là , nam, 28 tuổi, trú tại phường 1, quận Bình Thạnh, TP HCM. Người này là quản lý dây chuyền tại công ty giày Gia Định chi nhánh tại số xã Thạnh Phú, huyện Vĩnh Cửu, tỉnh Đồng Nai.";

$post1->inTT();

$post2 = new Post();
$post2->title="Thể thao";
$post2->url="vnexpress.vn";
$post2->description="HLV Park: ‘Tôi muốn nâng cấp đội tuyển Việt Nam'";

$post2->content="Chia sẻ với VnExpress chiều 7/4, HLV Park Hang-seo cho biết trong đợt nghỉ vì Covid-19, ông đã tìm ra thêm ba sơ đồ có thể phù hợp với đội tuyển Việt Nam.";

$post2->inTT();

$post3 = new Post();
$post3->title="Văn hóa";
$post3->url="vnexpress.vn";
$post3->description="Biển mây trong bình minh";

$post3->content="Đỉnh Hòn Bồ, đỉnh Lang Biang, đỉnh Pinhatt, đồi Radar hay đồi Robin là những nơi “săn mây” lý tưởng ở Đà Lạt.";

$post3->inTT();




?>
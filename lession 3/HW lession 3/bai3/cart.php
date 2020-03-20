<?php
session_start();
if (isset($_SESSION['cart'])) {
	$products= $_SESSION['cart'];
}else{
	$products=array();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zent Mart</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<a href="index.php" title="">Home</a>
		<table class="table">
			<caption>THÔNG TIN GIỎ HÀNG</caption>
			<thead>
				<tr>
					<th>STT</th>
					<th>MÃ SẢN PHẨM</th>
					<th>TÊN SẢN PHẨM</th>
					<th>ĐƠN GIÁ</th>
					<th>SỐ LƯỢNG</th>
					<th>THÀNH TIỀN</th>
					<th>HÀNH ĐỘNG</th>
					<!-- <th>Thời gian cập nhật</th> -->
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				$tong_tien = 0;
				foreach ($products as $key => $product){
					$i++;
					$tong_tien += $product[2]*$product[1];
					?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $key ?></td>
						<td><?= $product[0]  ?></td>
						<td align="center"><?= number_format($product[1])  ?></td>
						<!-- <td><a href="add2cart.php?MaSP=<?= $key ?>" title="" class="btn btn-success">+</a><?= $product  ?>
						<a href="remove.php?MaSP=<?= $key ?>" title="" class="btn btn-danger">-</a>
					</td> -->
					<td align="center"><?= number_format($product[2]*$product[1])?></td>
					<td><a href="delete2.php?MaSP=<?= $key ?>" title="" class="btn btn-success">Delete</a></td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="5" align="center"><h3>Tổng tiền</h3></td>
				<td colspan="1" align="center"><h3><?= number_format($tong_tien) ?></h3></td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>
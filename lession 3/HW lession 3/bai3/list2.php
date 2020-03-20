<?php
session_start();
$products= array(
	'SP1' => array('Iphone 4',1000000,10),
	'SP02' => array('IP 4',2000000,10),
	'SP03' => array('IP 5',3500000,10),
	'SP04' => array('IP 6',6000000,10),
	'SP05' => array('IP SE',4500000,10),
	'SP06' => array('IP 7',12000000,10),
	'SP07' => array('IP 8',160000000,10)


);
$_SESSION['products']=$products;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Market</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<a href="cart.php" title="">Xem giỏ hàng</a>
		<table class="table">
			<caption>DANH SÁCH SẢN PHẨM</caption>
			<thead>
				<tr>
					<th>STT</th>
					<th>MÃ SẢN PHẨM</th>
					<th>TÊN SẢN PHẨM</th>
					<th>ĐƠN GIÁ</th>
					<th>SỐ LƯỢNG</th>
					<th>HÀNH ĐỘNG</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$i=0;
				foreach ($products as $key => $product ){
					$i++;
				
					 ?>
					
					<tr>
						<td><?php echo "$i"; ?></td>
						<td><?=$key?></td>
						<td><?=$product[0]?></td>
						<td><?= number_format($product[1])  ?></td>
						<td><?= $product[2]  ?></td>
						<td><a href="insertcart.php?MaSP=<?= $key ?>" title="" class="btn btn-success">Add to cart</a></td>


					</tr>
					  <?php 
						}

					  ?>

				</tbody>
			</table>
		</div>
	</body>
	</html>

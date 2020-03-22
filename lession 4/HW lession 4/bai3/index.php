<?php
session_start();
$products = array(
	'01' => array(
		'No' => '01',
		'Name' => 'Toán rời rạc'
		

	),

	'02' => array(
		'No' => '02',
		'Name' => 'Cấu trúc dữ liệu'


	)
	
);
$_SESSION['documents']=$products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">

		<h2><center>---Documents----</center></h2>
		<a class="btn btn-success" href="upload.php" title="">upload document</a>
		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Dowload</th>
						<th>#</th>

					</tr>
				</thead>
				<tbody>
					<?php   foreach ($products as $key => $product) {  ?>
						<tr>
							<td><?php echo $product['No'] ?></td>
							<td><?php echo $product['Name']?></td>
							<td>
								<a href="dowload.php" title=""><button type="button" class="btn btn-primary">Dowload</button></a>
							</td>
							<td>
								<a href="remove.php" title=""><button type="button" class="btn btn-danger">remove</button></a>
							</td>
						</tr>

					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
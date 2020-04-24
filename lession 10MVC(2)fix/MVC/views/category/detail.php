


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POTS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	


	<div class="container">
		<h3 class="text-center">--- INFO CATEGORY---</h3>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				
				<th>DESCRIPTION</th>
				
				<!-- <th>CONTENT</th> -->
				

			</thead>
			
			<tr>
				<td><?php echo $category['id'];?></td>
				

				<td><?php echo $category['name']?></td>
				<td><?php echo $category['description']?></td>
				<!-- <td><?php echo htmlspecialchars_decode($post['content'])?></td> -->
				<!-- <td><?php echo $category['thumbnail']?></td> -->



			</tr>

		</table>
		<a href="index.php?mod=category&act=list" class="btn btn-primary">quay lai</a> 
	</div>

</body>
</html>



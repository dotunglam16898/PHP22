<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>USERS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	


	<div class="container">
		<h3 class="text-center">--- INFO USER---</h3>
		
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Avatar</th>

				
				<th>Email</th>
				
				

			</thead>
			
				<tr>
					<td><?php echo $user['id'];?></td>
					<td><?php echo $user['name'];?></td>
					<td><?php echo $user['avatar'];?></td>
					
					<td><?php echo $user['email']?></td>
					
					

					
				</tr>
		
		</table>
		<a href="index.php?mod=user&act=list_user" class="btn btn-primary">quay lai</a> 
	</div>

</body>
</html>
<?php 
//BUOC 1
//1.1 CAU HINH
require_once 'connect.php';

//BUOC 2
//2.1 Cau lenh truy van
$query = "SELECT * FROM posts";
//2.2 Thuc thi cau lenh
$result = $conn->query($query);
//var_dump($result);

//BUOC 3:
//tao 1 mang de chua du lieu
$posts = array();

while ($row = $result->fetch_assoc()) {
	$posts[] = $row;
}
//var_dump($categories);

//BUOC 4:
foreach ($posts as $item) {
	// echo "<pre>";
	// print_r($item);
	// echo "</pre>";
}
?>


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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- posts ---</h3>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>

                <th>Description</th>
                <th>Content</th>

                <th>Thumnail</th>
                <!-- <th>View count</th> -->
                <th>Action</th>
            </thead>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td><?php echo $post['id'];?></td>
                    <td><?php echo $post['title'];?></td>
                    <td><?php echo $post['description'];?></td>
                    <td><?php echo $post['content'];?></td>

                    <td>
                       <img src=" <?php echo $post['thumbnail']  ?>">
                   </td>
                   
                   <td>
                    <a href="post_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
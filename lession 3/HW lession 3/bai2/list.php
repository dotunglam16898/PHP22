<?php
session_start();

    if (isset($_SESSION['student'])) {
       $students =  $_SESSION['student'];
    }else{
         $students = array( );
    }

?>




<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Zent Group</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <a href="add.php" class="btn btn-primary">Thêm mới</a>
            <table class="table ">
                <caption><h2>DANH SÁCH SINH VIÊN</h2></caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sinh viên</th>
                        <th>Họ tên</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=0;
                    foreach ($students as $student){
                        $i++;
                        ?>
                        <tr>
                         <td><?php echo "$i"; ?></td>
                         <td><?php echo $student['MSV'];?></td>
                         <td><?php echo $student['NAME'];?></td>
                         <td>
                             <a href="detail.php?msv=<?=$student['MSV']?>" class="btn btn-success">Detail</a>
                             <a href="delete.php?msv=<?=$student['MSV']?>" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                 <?php } ?>
             </tbody>
         </table>
     </div>
 </body>
 </html>
<?php

?>

<!-- /PROJECT%201/?mod=home&act=viewPost -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Lâm Đỗ</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
<!-- load stylesheets -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
<link rel="stylesheet" href="views/frontend/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
<link rel="stylesheet" href="views/frontend/css/templatemo-style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">                                  <!-- Templatemo style -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>

    <div class="tm-header">
        <div class="container-fluid">
            <div class="tm-header-inner">
             <a href="/PROJECT%201/index.php?mod=home&act=index" class="navbar-brand tm-site-name">Classic</a>

             <!-- navbar -->
             <nav class="navbar tm-main-nav">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>

                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item ">
                            <a href="/PROJECT%201/index.php?mod=home&act=index" class="nav-link">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a href="/PROJECT%201/index.php?mod=home&act=vlog" class="nav-link">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a href="/PROJECT%201/index.php?mod=home&act=contact" class="nav-link">LIÊN HỆ</a>
                        </li>
                        <li class="nav-item">
                            <a href="/PROJECT%201/index.php?mod=auth&act=login" class="nav-link">ĐĂNG NHẬP</a>
                        </li>
                    </ul>                        
                </div>

            </nav>  

        </div>                                  
    </div>            
</div>

<div class="tm-blog-img-container">

</div>

<section class="tm-section">
    <div class="container-fluid">
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
            <h3 class="tm-gold-text tm-title " >Bài viết có lượt xem nhiều</h3>

        </div> -->
        <div class="row wow slideInLeft " data-wow-duration="2s" >
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                <h2 class="tm-gold-text tm-title " >Bài viết mới nhất</h2>
                <p class="tm-subtitle"> </p>
            </div>
        </div>
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="tm-blog-post">
                  <?php foreach($posts as $post) { ?>

                      <div class="media tm-related-post wow bounceInUp" data-wow-duration="4s">
                          <div class="media-left media-middle">
                            <a href="#">
                             <!--  <img class="media-object" src="" > -->
                             <!-- <img style="width: 100px; height: 100px;" src="img/tm-home-img.jpg" > -->
                             <!--  <img src="Upload<?php echo $post['thumbnail'] ?>" alt="Image" class="tm-margin-b-20 img-fluid " >  -->
                             <img src="Upload<?php echo $post['thumbnail'] ?>" style="width: 100px; height: 100px;">
                         </a>
                     </div>
                     <div class="media-body">
                        <a href="/PROJECT%201/views/frontend/detail_blog.php?id=<?php echo $post['id']?>"><h4 class="media-heading tm-gold-text tm-margin-b-15"><?php echo $post['title'] ?></h4></a>
                        <p class="tm-small-font tm-media-description"><?php echo $post['description']?></p>
                        <br>

                        <span class="fw-400 mr-3 small-2" style="padding: 34px">
                            <b> <i class="fas fa-clock" style="font-size: 13px"></i> <?php  echo $post['created_at']?></b>
                            <i class="fas fa-heart pr-2 text-danger fs-20"></i> 0 lượt thích
                        </span >


                    </div>


                <?php } ?> 






            </div>


            <h2 class="tm-gold-text tm-title " style="padding-top: 133px">Có thể bạn quan tâm</h2>
            <div class="row tm-margin-t-big">
               <!--  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">



               </div> -->

               <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                <div class="tm-content-box">
                    <img src="views/frontend/img/HSthoicovid.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">Trường học thở phào khi bỏ giãn cách lớp học
                    </h4>
                    <p class="tm-margin-b-20"></p>
                    <a href="/PROJECT%201/views/frontend/detail_blog.php?id=27" class="tm-btn text-uppercase">CHI TIẾT</a>    
                </div>  

            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="tm-content-box">
                    <img src="views/frontend/img/rua.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">Làm rõ nguồn gốc 127 con rùa nuôi nhốt trong nhà 1 hộ dân
                    </h4>
                    <p class="tm-margin-b-20"></p>
                    <a href="/PROJECT%201/views/frontend/detail_blog.php?id=31" class="tm-btn text-uppercase">CHI TIẾT</a>    
                </div>  

            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="tm-content-box">
                    <img src="views/frontend/img/trump2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                    <h4 class="tm-margin-b-20 tm-gold-text">Ông Trump nói COVID-19 tệ hơn Trân Châu Cảng, khủng bố 11-9
                    </h4>
                    <p class="tm-margin-b-20"></p>
                    <a href="/PROJECT%201/views/frontend/detail_blog.php?id=32" class="tm-btn text-uppercase">CHI TIẾT</a>    
                </div>  


            </div>   

        </div>

    </div>

    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

        <div class="tm-aside-container">


        </div>


    </aside>

</div>

</div>
</section>

<footer class="tm-footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                <div class="tm-footer-content-box">
                 <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Giới thiệu bản thân</h3>
                 <div class="tm-gray-bg">
                    <p>Họ và tên : Đỗ Tùng Lâm </p>
                    <p>Ngày sinh: 16/8/1998</p>
                    <p>Giới tính: Nam</p>
                    <p>Sở thích: xem phim,nghe nhạc,chơi game,đá bóng</p>
                    <p>Học tại trường Đại học kinh tế kỹ thuật công nghiệp</p>
                    <p>Link facebook: https://www.facebook.com/profile.php?id=100026430622330</p>
                    <!-- <p><strong>Danny Egg (Executive)</strong></p>  --> 

                </div>    
            </div>

        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="tm-footer-content-box tm-footer-links-container">

               <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Liên kết nhanh</h3>
               <nav>
                <ul class="nav">
                    <li><a href="?mod=home&act=index" class="tm-footer-link">Trang chủ</li>
                        <li><a href="?mod=home&act=vlog" class="tm-footer-link">Blog</a></li>

                        <li><a href="?mod=home&act=contact" class="tm-footer-link">Liên hệ</a></li>
                        <li><a href="?mod=auth&act=login" class="tm-footer-link">Đăng nhập</a></li>
                        <!-- <li><a href="#" class="tm-footer-link">Text Link Color #CCCC66</a></li> -->
                    </ul>
                </nav>

            </div>

        </div>

                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">


                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Giới thiệu về ZENT</h3>
                            <p class="tm-margin-b-30">ZENT EDUCATION được thành lập với triết lý “Không cứ phải là thần đồng, không cứ phải là giàu có chỉ cần có phương pháp giáo dục đúng đắn, tích cực mọi đứa trẻ đều sẽ trở thành nhân tài” được viết trong cuốn sách nổi tiếng “Em phải đến Harvard học kinh tế”. Với mục tiêu mọi sinh viên, nhất là sinh chuyên nhóm ngành CNTT, Toán Tin, Điện tử viễn thông dù học “trường top” hay “trường thường” đều có cơ hội việc làm rộng mở, Zent đã được thành lập với sứ mệnh đưa phương pháp giáo dục “Project based Learning” và “Learning by Doing” vào giảng dạy để giúp các em sinh viên có thể học một cách thực tế nhất qua các project.</p><hr class="tm-margin-b-30">
                            
                            <a href="http://zent.edu.vn/" class="tm-btn tm-btn-gray text-uppercase">Read More</a>

                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">

                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Ảnh đẹp</h3>
                            <div class="tm-margin-b-30">
                                <img src="views/frontend/img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="views/frontend/img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="views/frontend/img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="views/frontend/img/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="views/frontend/img/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="views/frontend/img/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                            </div>
                            <p class="tm-margin-b-20">Một số bức ảnh đẹp chụp về phong cảnh các nước</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2016 Lâm Đỗ</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="views/frontend/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="views/frontend/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

    </body>
    </html>
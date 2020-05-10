<?php
$servername = "localhost"; 

$username = "root";   

$password = "";    

$dbname = "php_blog5";  
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");
$id=$_GET['id'];




$post_query="SELECT*FROM posts WHERE id=".$id;

$post_result=$conn->query($post_query);

$post=$post_result->fetch_assoc();
// echo "<pre>";
// echo print_r($post);
// echo "</pre>";
// die();

//user
if ($post['user_id']) {
    $user_query="SELECT*FROM users WHERE id=".$post['user_id'];
    $user_result=$conn->query($user_query);

    $user=$user_result->fetch_assoc();
    $post['user']=$user;
}else{
    echo "no";
}

//CATEGORY
if ($post['category_id']) {
    $category_query="SELECT*FROM categories WHERE id=".$post['category_id'];
    $category_result=$conn->query($category_query);

    $category=$category_result->fetch_assoc();
    $post['category']=$category;
}else{
    echo "no";
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Blog Page</title>
<!--
Classic Template
http://www.templatemo.com/tm-488-classic
-->
<!-- load stylesheets -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
<link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
<link rel="stylesheet" href="css/templatemo-style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">                                  <!-- Templatemo style -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>
    <section class="tm-section">
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
</section>
<section class="tm-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <div class="tm-blog-post">
                    <h3 class="tm-gold-text"><?php echo $post['title'] ?></h3>
                    <br>
                    <!-- <img src="img/tm-img-1010x336-1.jpg" alt="Image" class="img-fluid tm-img-post"> -->

                    <p><?php echo htmlspecialchars_decode($post['content']) ?></p>

                    <b><p>Bài viết bởi : <?php echo $post['user']['name'] ?></p></b>
                    <i class="fas fa-clock" style="font-size: 13px"></i> <?php  echo $post['created_at']?>
                    <span class="fw-400 mr-3 small-2" style="padding: 34px">
                        <i class="fas fa-eye" style="font-size: 13px;"></i><?php echo $post['view_count']?> lượt xem
                        <i class="fas fa-heart pr-2 text-danger fs-20"></i> 0 lượt thích
                    </span>
                    <b><p>Danh mục: <?php echo $post['category']['name']?></p></b>


                </div>

                <!-- comment fb -->
                <div class="section bg-gray" style="padding-top: 50px; padding-bottom: 50px">
                    <div class="fb-share-button ml-2 fb_iframe_widget" data-href="http://zent.edu.vn//courses/lap-trinh-php-mysql" data-layout="button_count" data-size="large" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1336769589844418&amp;container_width=0&amp;href=http%3A%2F%2Fzent.edu.vn%2F%2Fcourses%2Flap-trinh-php-mysql&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;size=large"><span style="vertical-align: bottom; width: 98px; height: 28px;"><iframe name="f1207fbc68168dc" width="1000px" height="1000px" data-testid="fb:share_button Facebook Social Plugin" title="fb:share_button Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/share_button.php?app_id=1336769589844418&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df2bb37806368084%26domain%3Dzent.edu.vn%26origin%3Dhttp%253A%252F%252Fzent.edu.vn%252Ff36f85d4b69afc%26relation%3Dparent.parent&amp;container_width=0&amp;href=http%3A%2F%2Fzent.edu.vn%2F%2Fcourses%2Flap-trinh-php-mysql&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;size=large" style="border: none; visibility: visible; width: 98px; height: 28px;" class=""></iframe></span></div>
                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop" data-href="https://portal.zent.edu.vn/courses/lap-trinh-php-mysql" data-width="1000px" data-numposts="5" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=1336769589844418&amp;container_width=825&amp;height=100&amp;href=https%3A%2F%2Fportal.zent.edu.vn%2Fcourses%2Flap-trinh-php-mysql&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v4.0" style="width: 100%;"><span style="vertical-align: bottom; width: 100%; height: 178px;"><iframe name="f33a2f8b24a8be8" width="1000px" height="100px" data-testid="fb:comments Facebook Social Plugin" title="fb:comments Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/comments.php?app_id=1336769589844418&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Dfdb2928bd435a4%26domain%3Dzent.edu.vn%26origin%3Dhttp%253A%252F%252Fzent.edu.vn%252Ff36f85d4b69afc%26relation%3Dparent.parent&amp;container_width=825&amp;height=100&amp;href=https%3A%2F%2Fportal.zent.edu.vn%2Fcourses%2Flap-trinh-php-mysql&amp;locale=vi_VN&amp;numposts=5&amp;sdk=joey&amp;version=v4.0" style="border: none; visibility: visible; width: 100%; height: 178px;" class=""></iframe></span></div>
                </div>



                <div class="row tm-margin-t-big">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                            <!-- <div class="tm-content-box">
                                <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">Chiều 2/5, Việt Nam không có ca mắc COVID-19 mới, hơn 30 nghìn người đang cách ly
                                </h4>
                                <p class="tm-margin-b-20"></p>
                                <a href="/PROJECT%201/views/frontend/detail_blog.php?id=16" class="tm-btn text-uppercase">Detail</a>    
                            </div>   -->

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                           <!--  <div class="tm-content-box">
                                <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                scelerisque porttitor pharetra</p>
                                <a href="#" class="tm-btn text-uppercase">Read More</a>    
                            </div>   -->

                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<!-- 
                            <div class="tm-content-box">
                                <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                                <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                scelerisque porttitor pharetra</p>
                                <a href="#" class="tm-btn text-uppercase">Detail</a>    
                            </div>   -->

                        </div>    
                    </div>

                </div>

                <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                    <div class="tm-aside-container">
                        <h3 class="tm-gold-text tm-title">
                            Liên kết khác
                        </h3>
                        <nav>
                            <ul class="nav">
                                <!-- <li><a href="" class="tm-text-link">Tin trong nước</a></li>
                                <li><a href="#" class="tm-text-link">Tin nước ngoài</a></li>
                                <li><a href="#" class="tm-text-link">Văn hóa xã hội</a></li>
                                <li><a href="#" class="tm-text-link">Thể thao</a></li>
                                <li><a href="#" class="tm-text-link">Du lịch</a></li>
                                <li><a href="#" class="tm-text-link">Ẩm thực</a></li>
                                <li><a href="#" class="tm-text-link">Công nghệ</a></li> -->
                                <li><a href=" /PROJECT%201/?mod=home&act=viewPost" class="tm-text-link">Bài viết xem nhiều</a></li>

                                <li><a href="/PROJECT%201/?mod=home&act=newPost" class="tm-text-link">Bài viết mới nhất</a></li>
                                <li><a href="https://getbootstrap.com/" class="tm-text-link">Link tham khảo</a></li>
                                <li><a href="http://zent.edu.vn/courses/lap-trinh-php-mysql" class="tm-text-link">Khóa học của tôi</a></li>
                                <li><a href="https://github.com/dotunglam16898/LamDo2/tree/master/project" class="tm-text-link">Project khác </a></li>
                            </ul>
                        </nav>

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
                        </div>    
                    </div>

                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="tm-footer-content-box tm-footer-links-container">

                        <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Liên kết nhanh</h3>
                        <nav>
                            <ul class="nav">
                                <li><a href="?mod=home&act=index" class="tm-footer-link">Trang chủ</li>
                                    <li><a href="#" class="tm-footer-link">Vlog</a></li>

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
                                <img src="img/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="img/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="img/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="img/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="img/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="img/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                            </div>
                            <p class="tm-margin-b-20">Một số bức ảnh đẹp chụp về phong cảnh các nước</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>
                        
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright 2020 Lâm Đỗ</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

    </body>
    </html>
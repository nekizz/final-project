<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">
<head>
    <title>Blog Details Left Sidebar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CPlayfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>


<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
    <!--================= PAGE-COVER ================-->

    <?php include('includes/header.php') ?>
    <!--================= PAGE-COVER ================-->
    <section class="page-cover" id="cover-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Blog chi tiết</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
<br>
    <!--==== INNERPAGE-WRAPPER =====-->
    <section class="innerpage-wrapper" style="margin-top: -100px;">
        <div id="blog-details" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from blog where id_blog=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
    foreach($results as $result)
        {   ?>

                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        <div class="space-right">

                            <div class="blog-post">
                                <div class="main-img blog-post-img">
                                    <img src="images/blog/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="blog-post-image" />
                                    <div class="main-mask blog-post-info">
                                        <ul class="list-inline list-unstyled blog-post-info">
                                            <li><span><i class="fa fa-calendar"></i></span><?php echo htmlentities($result->ngaydang);?></li>
                                            <li><span><i class="fa fa-user"></i></span>Tác giả: <a href="#"><?php echo htmlentities($result->nguoiviet);?></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="blog-post-detail">
                                    <h2 class="blog-post-title"><?php echo htmlentities($result->chude);?></h2>
                                    <?php echo ($result->noidung);?>
                                    <br>
                                     <p>Tác giả: <?php echo htmlentities($result->nguoiviet);?></p>
                                </div>
                            </div>

                            <div id="comment-form">
                                <div class="innerpage-heading">
                                    <h1>Bình luận</h1>
                                </div>

                                <form>
                                    <div class="fb-comments" data-href="http://localhost:8888/doan/star/blog-detail.php?pkgid=<?php echo $_GET['pkgid'] ?>" data-numposts="5" data-width="800px"></div>
                            </form>
                        </div>
<?php }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-bottom: -60px;">
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script></div>
<!--======================= FOOTER =====================-->
<?php include('includes/footer.php');?>
<?php include('includes/signup.php');?>         
<?php include('includes/signin.php');?>         
<?php include('includes/write-us.php');?>           

<script src="js/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom-navigation.js"></script>
<script src="js/custom-flex.js"></script>
<script src="js/custom-owl.js"></script>
<script src="js/custom-date-picker.js"></script>
<script src="js/custom-video.js"></script>

</body>
</html>
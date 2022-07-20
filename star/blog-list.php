<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">
    <head>
        <title>Blog</title>
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
        
        <!--====== LOADER =====-->
        <div class="loader"></div>
        
        
        <!--======== SEARCH-OVERLAY =========-->       
        <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form action="search.php" method="get">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="hidden" class="form-control" placeholder="Nơi xuất phát" name="search" id="search">
                            <input type="hidden" class="form-control" placeholder="Điểm đến" name="search1" >
                            <input type="hidden" class="form-control dpd1" placeholder="Ngày đi" name="search2">
                            <input type="hidden" class="form-control dpd2" placeholder="Ngày về" name="search3">
                            <input type="text" class="form-control dpd1" placeholder="Nhập tên tour..." name="search4">
                            <span class="input-group-btn"><button name="submit" type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
        <!--============= TOP-BAR ===========-->
        <?php include('includes/header.php') ?>
        <!--================= PAGE-COVER ================-->
        <section class="page-cover" id="cover-blog-listing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Danh sách blog</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="blog-listings" class="innerpage-section-padding">
        		<div class="container">
        			<div class="row">
                    	
                        
                    	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                        	<div class="space-right">
                             <?php $sql = "SELECT * from blog ";
                          $query = $dbh->prepare($sql);
                          $query->execute();
                          $results=$query->fetchAll(PDO::FETCH_OBJ);

                          if($query->rowCount() >0)
                          {
                            foreach($results as $result)
                                {   ?>
                                <div class="main-block blog-post blog-list">
                                    <div class="main-img blog-post-img">
                                        <a href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>">
                                        	<img src="images/blog/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="blog-post-image" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-inline list-unstyled blog-post-info">
                                                <li><span><i class="fa fa-calendar"></i></span><?php echo htmlentities($result->ngaydang);?></li>
                                                <li><span><i class="fa fa-user"></i></span>Đăng bởi: <a><?php echo htmlentities($result->nguoiviet);?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="blog-post-detail">
                                       <h2 class="blog-post-title"><a href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>"><?php echo htmlentities($result->chude);?></a></h2>
                                        <p><?php echo htmlentities($result->tomtat);?></p>
                                        <a href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>" class="btn btn-orange">Xem thêm</a>
                                    </div>
                                </div>
                                 <?php }} ?>
                                <div class="pages">
                                    <ol class="pagination">
                                        <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                   
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                                    </ol>
                                </div>
                            
                            </div>
                        </div>

                    </div>
        		</div>
        	</div>
        </section>
    
        <!--======================= FOOTER =======================-->
     	<?php include('includes/footer.php');?>
		
			<?php include('includes/signup.php');?>			
			
			<?php include('includes/signin.php');?>			
			
			<?php include('includes/write-us.php');?>			
		
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom-navigation.js"></script>
       
	</body>
</html>
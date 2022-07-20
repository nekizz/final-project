<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<html lang="en">
<head>
    <title>Tour trong nước</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
 
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" id="cpswitch" href="css/orange.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!--link bootstraps font awsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>

    <!--====== LOADER =====-->
    <div class="loader"></div>
    
    
    <!--======== SEARCH-OVERLAY =========-->       
    <div class="overlay">
        <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
        <div class="overlay-content">
            <div class="form-center">
                <form>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." required />
                            <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--============= TOP-BAR ===========-->
    <?php include('includes/header.php') ?>

    <!--================== PAGE-COVER =================-->
   <section class="page-cover" id="cover-tour-grid-list" style="height: 270px;">
  <div class="container" style="    margin-top: -30px;" >
    <div class="row">
      <div class="col-sm-12" >
        <h1 class="page-title">Tour trong nước</h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Trang chủ</a></li>
          <li class="active">Danh sách</li>
        </ul>
      </div><!-- end columns -->
    </div>
  </div>
  <div class="search-tabs" id="search-tabs-1">
    <div class="container">
      <div class="row">
        <div class="col-sm-12" style="bottom: -71px;">


          <div class="tab-content">

            <div id="tour" class="tab-pane in active">
              <form action="search.php" method="get" name="timkiem">
                <div class="row">

                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div class="row">

                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <label style="color: #000;">Nơi xuất phát</label>
                        <div class="form-group left-icon">
                          <input type="text" class="form-control" placeholder="Nơi xuất phát" name="search" id="search">
                          <i class="fa fa-map-marker"></i>
                        </div>
                      </div>

                      <div class="col-xs-12 col-sm-6 col-md-6">
                         <label style="color: #000;">Điểm đến:</label>
                        <div class="form-group left-icon">
                          <input type="text" class="form-control" placeholder="Điểm đến" name="search1" >
                          <i class="fa fa-map-marker"></i>
                        </div>
                      </div>

                    </div>                      
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div class="row">

                      <div class="col-xs-6 col-sm-6 col-md-6">
                         <label style="color: #000;">Ngày đi:</label>
                        <div class="form-group left-icon">
                          <input type="date" class="form-control dpd1" placeholder="Ngày đi" name="search2">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>

                      <div class="col-xs-6 col-sm-6 col-md-6">
                         <label style="color: #000;">Ngày về:</label>
                        <div class="form-group left-icon">
                          <input type="date" class="form-control dpd2" placeholder="Ngày về" name="search3">
                          <i class="fa fa-calendar"></i>
                        </div>
                      </div>

                    </div>                    
                  </div>

                 <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                  <label style="color: #000;">Tên tour:</label>
                  <div class="form-group left-icon">
                    <input type="text" class="form-control dpd1" placeholder="Tên tour" name="search4">
                    <i class="fa fa-suitcase "></i>
                  </div>
                </div>

                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
                    <button name="submit" class="btn btn-orange" style="margin-top: 25px;">Tìm kiếm</button>
                  </div>

                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="tour-listing" class="innerpage-section-padding">
            <div class="container">
                <div class="row">     
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">
                       <?php $sql = "SELECT * from goidulich where nuocngoai= 0 order by ngayxuatphat";
                       $query = $dbh->prepare($sql);
                       $query->execute();
                       $results=$query->fetchAll(PDO::FETCH_OBJ);

                       if($query->rowCount() >0)
                       {
                        foreach($results as $result)
                            {   ?>
                                <div class="list-block main-block t-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img t-list-img">
                                            <a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>">
                                                <img src="images/tour/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="tour-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price" style="margin-left: 25px;"><?php echo number_format($result->giagoi);?> VND<span class="pkg"></span></li>
                                                    <li class="rating">
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star orange"></i></span>
                                                        <span><i class="fa fa-star lightgrey"></i></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="list-info t-list-info">
                                            <h3 class="block-title"><a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>"><?php echo htmlentities($result->tengoi);?></a></h3>
                                            <br>
                                            <div style="float: left;">
                                            <p><i class="fas fa-plane-departure"></i> Khởi hành: <?php echo date("d-m-Y", strtotime($result->ngayxuatphat)); ?></p>
                                            <p><i class="fas fa-plane-arrival"></i> Kết thúc:<?php echo date("d-m-Y", strtotime($result->ngayve)); ?></p>
                                            </div>
                                            <div style="float: right;">
                                                  <p><i class="fas fa-map-marked-alt"></i> Điểm đến: <?php echo htmlentities($result->vitri);?></p>
                                            <p style="width: 222px;"> <i class="fas fa-map-marker-alt"></i> Điểm xuất phát: <?php echo htmlentities($result->noixuatphat);?></p>
                                            
                                            </div>
                                            <a style="margin-top: 30px;margin-bottom: -10px;" href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>" class="btn btn-orange btn-lg">Xem thêm</a>
                                        </div>
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
        </section>
        
        <!--======================= FOOTER =====================-->
        <?php include('includes/footer.php') ?>
        <script>
            $(document).ready(function(){
                $('.online-support').hide();
                $('.support-icon-right h3').click(function(e){
                    e.stopPropagation();
                    $('.online-support').slideToggle();
                });
                $('.online-support').click(function(e){
                    e.stopPropagation();
                });
                $(document).click(function(){
                    $('.online-support').slideUp();
                });
            });
        </script>

        <span style="font-size: 14px; color: rgb(87, 87, 87); font-family: ProximaNovaSemiBold, 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 30px;"></span>

        <style>
            .support-icon-right {
                background: #F0F3EF;
                position: fixed;
                right: 0;
                bottom: 0;
                z-index: 9;
                overflow: hidden;
                width: 250px;
                color: #fff!important;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                -ms-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }

            .support-icon-right h3 {
                text-transform: uppercase;
                font-weight: bold;
                font-size: 13px!important;
                font-family: Arial;
                color: #fff!important;
                margin: 0!important;
                background-color: #5CB85C;
                cursor: pointer;
            }

            .support-icon-right i {
                background-color: #D9534F;
                padding: 15px 15px 12px 15px;
                margin-right: 15px;
            }
            .online-support {
                display: none;
            }
             a.btn:link, a.btn:visited
            {
                color:white;
                text-decoration:none;
            }
            
            a.btn:hover
            {
                color:white;
                font-weight:bold;
                background: blue;
            }
            
            a.btn:active
            {
                background:yellow;
            }
            @media (min-width: 992px)
            .col-md-6 {
            </style>
            
            <?php include('includes/signup.php');?>        
            <?php include('includes/signin.php');?>    
            <?php include('includes/write-us.php');?>           
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-ui.min.js"></script> 
            <script src="js/bootstrap.min.js"></script>
            <script src="js/custom-navigation.js"></script>
            <script src="js/custom-price-slider.js"></script>
           
        </body>
        </html>

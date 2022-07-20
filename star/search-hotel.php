<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Khách sạn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" id="cpswitch" href="css/orange.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
  <link rel="stylesheet" href="css/datepicker.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
</head>
<body>

  <?php include('includes/header.php');?>


  <section class="page-cover" id="cover-tour-grid-list" style="height: 270px;">
    <div class="container" style="margin-top: -30px;">
      <div class="row">
        <div class="col-sm-12" >
          <h1 class="page-title">Danh sách khách sạn</h1>
          <ul class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li class="active">Tìm kiếm</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="search-tabs" id="search-tabs-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12" style="bottom: -71px;">

            <div class="tab-content">

              <div id="tour" class="tab-pane in active">
                <form action="search-hotel.php" method="get" name="timkiem">
                  <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                      <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6">
                          <label style="color: #000;">Ngày vào:</label>
                          <div class="form-group left-icon">
                            <input type="date" class="form-control" placeholder="Ngày vào" name="search" id="search">
                            <i class="fa fa-calendar"></i>
                          </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">
                          <label style="color: #000;">Ngày ra:</label>
                          <div class="form-group left-icon">
                            <input type="date" class="form-control" placeholder="Ngày ra" name="search1" >
                            <i class="fa fa-calendar"></i>
                          </div>
                        </div>

                      </div>                      
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                      <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <label style="color: #000;">Người lớn:</label>
                          <div class="form-group left-icon">
                            <input type="text" class="form-control dpd1" placeholder="Người lớn" name="search2">
                            <i class="fa fa-user"></i>

                          </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <label style="color: #000;">Trẻ em:</label>
                          <div class="form-group left-icon">
                            <input type="text" class="form-control dpd2" placeholder="Trẻ em" name="search3">
                            <i class="fa fa-user"></i>
                          </div>
                        </div>

                      </div>                    
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                      <label style="color: #000;">Vị trí:</label>
                      <div class="form-group left-icon">
                        <input type="text" class="form-control dpd1" placeholder="Vị trí" name="search4">
                        <i class="fa fa-map-marker"></i>
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


  <section class="innerpage-wrapper">
    <div id="hotel-listing" class="innerpage-section-padding">
      <div class="container">
        <div class="row">         
          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side" style="margin-left: 130px;">
            <div class="list-block main-block h-list-block">
             <?php
             $conn=mysqli_connect('localhost','root','') or die('Khong The Ket Noi Voi May Chu');
             $strSQL=mysqli_select_db($conn,'starvel');
             mysqli_query($conn,"SET NAMES 'utf8'");
             $sql = "SELECT * FROM khachsan  ";
             $result = $conn->query($sql);
             if (isset( $_GET['submit'])) {
              $search = $_GET['search'];
              $search1 = $_GET['search1'];
              $search2 = $_GET['search2'];
              $search3 = $_GET['search3'];
              $search4 = $_GET['search4'];

              $query = "SELECT * FROM khachsan WHERE (ngayvao like '%$search%') && (ngayra like '%$search1%') && (nguoilon like '%$search2%') && (treem like '%$search3%') && (vitri like '%$search4%')";

              $sql = mysqli_query($conn, $query);
              $num = mysqli_num_rows($sql);
              ?> <p style="margin-top: -84px; margin-bottom: 45px; font-size: 20px; color: #ff7600; ">
                <?php   echo "Có ".$num." kết quả tìm kiếm" ; ?></p><?php   
                if ($num > 0) {

                 foreach( $sql as $row ) { 
                  ?>


                  <div class="list-content">

                    <div class="main-img list-img h-list-img" style="width: 369px; height: 260px; margin-bottom: 20px;">
                      <a href="hotel-detail.php?ksid=<?php echo ("{$row['id_ks']}");?>">
                        <img src="images/khachsan/<?php echo ("{$row['hinhanh']}");?>" />
                      </a>
                      <div class="main-mask">
                        <ul class="list-unstyled list-inline offer-price-1">
                          <li class="price"><?php echo number_format("{$row['gia']}");?> VND<span class="divider"></span><span class="pkg">/Phòng</span></li>
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

                    <div class="list-info h-list-info" style="margin-bottom: 19px; height: 261px;">
                      <h3 class="block-title"><a href="hotel-detail.php?ksid=<?php echo number_format("{$row['id_ks']}");?> "><?php echo htmlentities($result->tenks);?></a></h3> <br>
                      <p class="block-minor"><i class="glyphicon glyphicon-map-marker"></i> Địa điểm: <?php echo ("{$row['vitri']}");?> </p>
                      <p class="block-minor"><i class="glyphicon glyphicon-copy"></i> Ngày vào:  <?php echo date ("d-m-Y", strtotime("{$row['ngayvao']}"));?> </p>
                      <p class="block-minor"><i class="glyphicon glyphicon-paste"></i> Ngày ra:  <?php echo date ("d-m-Y", strtotime("{$row['ngayra']}"));?> </p>
                      <p>Phòng dành cho <?php echo number_format("{$row['nguoilon']}");?>  người lớn và <?php echo ("{$row['treem']}");?>  trẻ em</p>
                      <a href="hotel-detail.php?ksid=<?php echo number_format("{$row['id_ks']}");?> " class="btn btn-orange btn-lg">Xem thêm</a>
                    </div>
                  <?php }} ?>
                </div>

              </div>

              <div id="phantrang">
                <?php
                for($t=1; $t<=$sotrang; $t++){
                  echo "Trang $t - ";
                }
                ?>
              </div>
              <div class="pages">
                <ol class="pagination">
                  <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                  <li class="active"><a href="#">1</a></li>
                  <?php 
                }
                ?>
                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
              </ol>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
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
    .list-block .list-info a
    {
      font-size: 18px;
    }


    .btn-ogrange:link,  .btn-ogrange:visited
    {
      color:white;
      text-decoration:none;
    }

    .btn-orange:hover
    {
      color:white;
      font-weight:bold;
      background: blue;
    }

    .btn-ogrange:active
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



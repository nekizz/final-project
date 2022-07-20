<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit10']))
{
    $pid=intval($_GET['ksid']);
    $useremail=$_SESSION['login'];
    $sophong=$_POST['sophong'];
    $comment=$_POST['comment'];
    $status=0;
    $sql="INSERT INTO hoadon(id_ks,email_nguoidung,sophong,ghichu,trangthai) VALUES(:pid,:useremail,:sophong,:comment,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pid',$pid,PDO::PARAM_STR);
    $query->bindParam(':useremail',$useremail,PDO::PARAM_STR);$query->bindParam(':sophong',$sophong,PDO::PARAM_STR);
    $query->bindParam(':comment',$comment,PDO::PARAM_STR);
    $query->bindParam(':status',$status,PDO::PARAM_STR);
    $query->execute();

    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
        $msg="Đặt thành công Bạn vui lòng đặt cọc 50% giá trị đến stk: xxxxx - ngân hàng VietComBank - Phạm Đức Duy  Hoặc đến văn phòng vé check-in trong 24h sau khi đặt tour. Nếu không hệ thống tự hủy!!!";
    }
    else 
    {
        $error="Đã xảy ra lỗi. vui lòng thử lại.";
    }

}
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



    <section class="page-cover" id="cover-hotel-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Đặt khách sạn</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Trang chủ</a></li>
                        <li class="active">Đặt phòng</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <!--===== INNERPAGE-WRAPPER ====-->
    <?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
    else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
    <?php 
    $pid=intval($_GET['ksid']);
    $sql = "SELECT * from khachsan where id_ks=:pid";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':pid', $pid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
        foreach($results as $result)
            {   ?>

                <section class="innerpage-wrapper">
                 <div id="hotel-details" class="innerpage-section-padding">
                    <div class="container">
                        <div class="row">           

                            <div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

                                <div class="side-bar-block booking-form-block">
                                 <h2 class="selected-price" style="font-size: 21px;"><?php echo number_format($result->gia);?>VND<span style="font-size: 16px;">/Phòng</span></h2>

                                 <div class="booking-form">
                                     <h3><?php echo htmlentities($result->tenks);?></h3>
 
                                     <form name="book" method="post" onsubmit = "return validateForm()">
                                        <div class="row">
                                            <p style="color: black; font-size: 18px; margin-bottom: -26px;">Ngày vào:</p>
                                            <div class="form-group" style="color: #808285; text-align: center; font-size: 21px;border: 1px solid #e6e7e8; background: #f6f6f6; width: 150px; left: 81px; height: 32px;">
                                                <?php echo htmlentities($result->ngayvao);?>
                                            </div>
                                            <p style="color: black; font-size: 18px; margin-bottom: -28px;">Ngày ra:</p>
                                            <div class="form-group" style="color: #808285; text-align: center; font-size: 21px; border: 1px solid #e6e7e8; background: #f6f6f6; width: 150px; left: 81px; height: 32px;">
                                               <?php echo htmlentities($result->ngayra);?>

                                           </div>


                                           <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                            <div class="form-group right-icon" style="margin: 8px -6px 4px; width: 230px;">
                                                <?php echo htmlentities($result->sogiuong);?> Giường |  <?php echo htmlentities($result->nguoilon);?> Người lớn  | <?php echo htmlentities($result->treem);?> Trẻ em 
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l" style="margin-top: 30px;"> 

                                            <div class="form-group right-icon"> 
                                        <p style="margin-block-end: -48px; margin-inline-start: -80px;">Số phòng: </p><input type="number" class="form-control" name="sophong" id="sophong" style="width: 102px; margin-top: 20px;" placeholder="Số phòng" value="<?php echo isset($_POST['sophong']) ? $_POST['sophong'] : ''?>" required/>
                                          </div>   
                                      </div>

                                  </div>
                                  <div class="form-group">
                                    <input style="font-size: 18px;
                                    color: #faa61a;" name="tinh" type="submit" value="Tổng tiền" class="form-control">
                                </div>
                                <?php 

                                $d = $_POST["sophong"];

                                $d = $d*($result->gia);

                                function tinh($d)
                                {

                                    $e =(int)$d;
                                    return $e;
                                }
                                ?>
                                <div style="font-size: 23px;border: 1px solid #e6e7e8;text-align: center;margin-bottom: 13px;background: #faa61a; color: #fff;"> <?php echo number_format(tinh($d))  ." đ"; ?></div>   

                                <div class="form-group right-icon">
                                    <select class="form-control">
                                        <option selected>Thanh toán</option>
                                        <option>Credit Card</option>
                                        <option>Paypal</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="form-group right-icon">
                                 <label>Ghi chú: </label> <input type="text" name="comment" placeholder="Ghi chú" class="form-control" style="width: 215px;height: 35px;">
                             </div>

                             <?php if($_SESSION['login'])
                             {?>
                                <button type="submit" name="submit10" class="btn btn-block btn-orange">Xác nhận đặt</button>
                            <?php } else {?>
                                <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Đặt</a>
                            <?php } ?>
                        </form>

                    </div>
                </div> 

                <div class="side-bar-block support-block" style="margin-top: -40px">
                    <h3>Hỗ trợ</h3>
                    <p>Để có cơ sở góp phần đảm bảo quyền lợi cho khách hàng, giúp khách hàng soạn thảo được các văn bản pháp lý, các công văn chính xác theo quy định của pháp luật.</p>
                    <div class="support-contact">
                        <span><i class="fa fa-phone"></i></span>
                        <p>+1 123 1234567</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                <div class="detail-slider">
                    <div class="feature-slider" style="    height: 450px; width: 880px;" >
                        <div><img src="images/khachsan/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="feature-img" style="    height: 450px; width: 880px;"/></div>
                    </div>
                </div>
                <div class="available-blocks" id="available-rooms">
                 <h2>Giới thiệu chi tiết: </h2>

             </div>
             <p>Vị trí: <?php echo htmlentities($result->vitri);?></p>
             <p>Địa điểm cụ thể: <?php echo htmlentities($result->vitricuthe);?></p>
             <p style="padding-top: 1%"><?php echo ($result->chitiet);?></p>   
         </div>
     </div>
 </div>
</section>
<?php }} ?>

<?php include('includes/footer.php') ?>


<span style="font-size: 14px; color: rgb(87, 87, 87); font-family: ProximaNovaSemiBold, 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 30px;"></span>


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
    .btn:link, .btn:visited
    {
        color:white;
        text-decoration:none;
    }

    .btn:hover
    {
        color:white;
        font-weight:bold;
        background: blue;
    }

    .btn:active
    {
        background:yellow;
    }
    @media (min-width: 992px)
    .col-md-6 {
    </style>

     <script type = "text/javascript">
         function validateForm()  {
             var u = document.getElementById("sophong").value;
 
             if(u <= 0) {
                 alert("Số phòng phải lớn hơn 0");
                 return false;
             }
          
             return true;
         }
      </script>
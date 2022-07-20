<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{	
	header('location:index.php');
}
else{
	if(isset($_POST['submit6']))
	{
		$name=$_POST['name'];
		$ngaysinh=$_POST['ngaysinh'];
		$mobileno=$_POST['mobileno'];
		$diachi=$_POST['diachi'];
		$email=$_SESSION['login'];
		$sql="update nguoidung set hoten=:name, ngaysinh=:ngaysinh, sdt_nd=:mobileno, diachi=:diachi where id_email=:email";
		$query = $dbh->prepare($sql);
		$query->bindParam(':name',$name,PDO::PARAM_STR);
		$query->bindParam(':ngaysinh',$ngaysinh,PDO::PARAM_STR);
		$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
		$query->bindParam(':diachi',$diachi,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->execute();
		$msg="Đã thay đổi";
	}
	?>
	<html lang="en">
	<head>
		<title>Hồ sơ</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="icon" href="images/favicon.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link rel="stylesheet" hre="css/bootstrap.min.css">
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

		<body>

			<?php include('includes/header.php') ?>        
			<!--========== PAGE-COVER =========-->
			<section class="page-cover dashboard">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="page-title">Tài koản của tôi</h1>
							<ul class="breadcrumb">
								<li><a href="index.php">Trang chủ</a></li>
								<li class="active">Hồ sơ</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!--===== INNERPAGE-WRAPPER ====-->
			<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
			else if($msg){?><div class="succWrap" style="background: #ffa4a4;"><strong style="color: green;"> Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
			<?php 
			$useremail=$_SESSION['login'];
			$sql = "SELECT * from nguoidung where id_email=:useremail";
			$query = $dbh -> prepare($sql);
			$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
				foreach($results as $result)
					{	?>

						<section class="innerpage-wrapper">
							<div id="dashboard" class="innerpage-section-padding">
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="dashboard-heading">
												<h2>Thông tin<span> người dùng</span></h2>
												<p>Xin chào <?php echo htmlentities($result->hoten);?></p>
												<p>Dưới đây là những thông tin về bạn</p>
											</div>

											<div class="dashboard-wrapper">
												<div class="row">

													<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
														<ul class="nav nav-tabs nav-stacked text-center">
															<li><a href="issuetickets.php"><span><i class="fa fa-question-circle"></i></span>Trợ giúp</a></li>
															<li  class="active"><a><span><i class="fa fa-user"></i></span>Hồ sơ</a></li>
															<li><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Đặt tour</a></li>
															<li><a href="password.php"><span><i class="fa fa-lock"></i></span>Mật khẩu</a></li>
															<li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>card</a></li>
														</ul>
													</div>

													<div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
														<h2 class="dash-content-title">Hồ sơ</h2>
														<div class="panel panel-default">
															<div class="panel-heading"><h4>Thông tin</h4></div> 
															<div class="panel-body">
																<div class="row">
																	<div class="col-sm-5 col-md-4 user-img">
																		<img src="images/add.jpg" class="img-responsive" alt="user-img" />
																	</div>

																	<div class="col-sm-7 col-md-8  user-detail">
																		<ul class="list-unstyled">
																			<li><span>Email:</span> <?php echo htmlentities($result->id_email);?></li>
																			<li><span>Họ tên:</span> <?php echo htmlentities($result->hoten);?></li>
																			<li><span>Ngày sinh:</span> <?php echo htmlentities($result->ngaysinh);?></li>
																			<li><span>Điện thoại:</span> <?php echo htmlentities($result->sdt_nd);?></li>
																			<li><span>Địa chỉ:</span> <?php echo htmlentities($result->diachi);?></li>
																		</ul>
																		<button class="btn" data-toggle="modal" data-target="#edit-profile">Thay đổi</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>

						<!--======================= UPDATE =======================-->
						
						<div id="edit-profile" class="modal custom-modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h3 class="modal-title">Chỉnh sửa</h3>
									</div>

									<div class="modal-body">
										<form action="profile.php" method="post">
											<b>Cập nhật</b>
											<input type="email" class="form-control" name="email" value="<?php echo htmlentities($result->id_email);?>" id="email" readonly>
										</p> 
										<div class="form-group">
											<label>Họ tên</label>
											<input name="name" value="<?php echo htmlentities($result->hoten);?>" type="text" class="form-control" placeholder="Họ tên"/>
										</div>

										<div class="form-group">
											<label>Ngày sinh</label>
											<input name="ngaysinh" value="<?php echo htmlentities($result->ngaysinh);?>" type="text" class="form-control" placeholder="Ngày sinh"/>
										</div>

										<div class="form-group">
											<label>Số điện thoại</label>
											<input name="mobileno" type="text" value="<?php echo htmlentities($result->sdt_nd);?>" class="form-control" placeholder="Điện thoại" />
										</div>

										<div class="form-group">
											<label>Địa chỉ</label>
											<input name="diachi" type="text" value="<?php echo htmlentities($result->diachi);?>" class="form-control" placeholder="Địa chỉ" />
										</div>
										
										<button type="submit" name="submit6" class="btn btn-orange">Cập nhật</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				<?php }} ?>

				<?php include('includes/footer.php');?>

				<?php include('includes/signup.php');?>			

				<?php include('includes/signin.php');?>			

				<?php include('includes/write-us.php');?>			

				<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/custom-navigation.js"></script>

			</body>
			</html>
			<?php } ?>

			<style type="text/css">
				.dashboard-nav .nav-tabs li.active a:link, .dashboard-nav .nav-tabs li.active a:visited
            {
                color:white;
                text-decoration:none;
            }
            
           .dashboard-nav .nav-tabs li.active a:hover
            {
                color:white;
                font-weight:bold;
                background: #faa61a;
            }
            
           .dashboard-nav .nav-tabs li.active a:active
            {
                background:#faa61a;
            }
            p, ul, a, .btn, span, input, select, textarea, label, table, .meta h2, blockquote, small, .newsletter h2, .cruise-offer-text h3, .package h2, .welcome-message h2, #hot-tour h3, #hot-tour h2, #message-banner h2, .member-name h3, #error-text h2, .company-name, #coming-soon-text h2, .booking-form-block .selected-price, #dashboard h2, #dashboard h3, #dashboard h4, #web-name, .tvl-insurance-info .innerpage-heading h1, .big-heading h2, .traveler-info h3, .list-group-heading { font-family: initial;
}
			</style>
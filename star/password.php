<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
{	
	header('location:index.php');
}
else{
	if(isset($_POST['submit5']))
	{
		$password=md5($_POST['password']);
		$newpassword=md5($_POST['newpassword']);
		$email=$_SESSION['login'];
		$sql ="SELECT matkhau FROM nguoidung WHERE id_email=:email and matkhau=:password";
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':email', $email, PDO::PARAM_STR);
		$query-> bindParam(':password', $password, PDO::PARAM_STR);
		$query-> execute();
		$results = $query -> fetchAll(PDO::FETCH_OBJ);
		if($query -> rowCount() > 0)
		{
			$con="update nguoidung set matkhau=:newpassword where id_email=:email";
			$chngpwd1 = $dbh->prepare($con);
			$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
			$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
			$chngpwd1->execute();
			$msg="Thay đổi mật khẩu thành công";
		}
		else {
			$error=  "Nhập sai mật khẩu cũ";	
		}
	}

	?>
	<html lang="en">
	<head>
		<title>starvel</title>
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

		<body>

			<?php include('includes/header.php') ?>        
			<!--========== PAGE-COVER =========-->
			<section class="page-cover dashboard">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="page-title">Tài khoản của tôi</h1>
							<ul class="breadcrumb">
								<li><a href="index.php">Trang chủ</a></li>
								<li class="active">Mật khẩu</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!--===== INNERPAGE-WRAPPER ====-->
			<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
			else if($msg){?><div class="succWrap"><strong>Thành công</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
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
												<p>Dưới đây là phần thay đổi mật khẩu</p>
											</div>

											<div class="dashboard-wrapper">
												<div class="row">

													<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
														<ul class="nav nav-tabs nav-stacked text-center">
															<li><a href="issuetickets.php"><span><i class="fa fa-question-circle"></i></span>Trợ giúp</a></li>
															<li><a href="profile.php"><span><i class="fa fa-user"></i></span>Hồ sơ</a></li>
															<li><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Đặt tour</a></li>
															<li   class="active"><a href="password.php"><span><i class="fa fa-lock"></i></span>Mật khẩu</a></li>
															<li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>card</a></li>
														</ul>
													</div>

													<div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
														<h2 class="dash-content-title">Mật khẩu</h2>
														<div class="panel panel-default">
															<div class="panel-heading"><h4>Thay đổi mật khẩu</h4></div>
															<div class="panel-body">
																<div class="row">
																	<div class="col-sm-5 col-md-4 user-img">


																		<div class="privacy">
																			<div class="container">
																				<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"></h3>
																				<form name="chngpwd" method="post" onSubmit="return valid();">
																					<?php if($error){?><div class="errorWrap"><strong>Lỗi: </strong> <b style="color: red;"><?php echo htmlentities($error); ?> </b></div><?php } 
																					else if($msg){?><div class="succWrap"><strong>Thành công</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
																					<p style="width: 350px;">

																						<b>Nhập mật khẩu cũ</b>  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mật khẩu cũ" required="">
																					</p> 

																					<p style="width: 350px;">
																						<b>Nhập mật khẩu mới</b>
																						<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Mật khẩu mới" required="">
																					</p>

																					<p style="width: 350px;">
																						<b>Nhập lại mật khẩu mới</b>
																						<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Mật khẩu mới" required="">
																					</p>

																					<p style="width: 350px;">
																						<button type="submit" name="submit5" class="btn-primary btn">Thay đổi</button>
																					</p>
																				</form>

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
								</div>
							</section>

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
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
			$error="Nhập sai mật khẩu cũ";	
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
								<li class="active">Trợ giúp</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!--===== INNERPAGE-WRAPPER ====-->
			<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
			else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
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
												<p>Phần trợ giúp của bạn sẽ được hiển thị ở đây</p>
											</div>

											<div class="dashboard-wrapper">
												<div class="row">

													<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
														<ul class="nav nav-tabs nav-stacked text-center">
															<li class="active"><a href="issuetickets.php"><span><i class="fa fa-question-circle"></i></span>Trợ giúp</a></li>
															<li><a href="profile.php"><span><i class="fa fa-user"></i></span>Hồ sơ</a></li>
															<li><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Đặt tour</a></li>
															<li><a href="password.php"><span><i class="fa fa-lock"></i></span>Mật khẩu</a></li>
															<li><a href="cards.php"><span><i class="fa fa-credit-card"></i></span>card</a></li>
														</ul>
													</div>

													<div class="col-xs-12 col-sm-10 col-md-10 dashboard-content user-profile">
														<h2 class="dash-content-title">Trợ giúp</h2>
														<div class="panel panel-default" style="width: 108.7%;">
															<div class="panel-heading"></div>
															<div class="panel-body">
																<div class="row">
																	<div class="col-sm-5 col-md-4 user-img">


																		<div class="privacy">
																			<div class="container">

																				<form name="chngpwd" method="post" onSubmit="return valid();">
																					<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
																					else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
																					<p>

																						<table border="1" width="83%" class="table table-striped table-dark" style="margin-top: -15px; border: none; width: 90%;  margin-left: -56px;">
																							<thead class="thead-dark">
																								<tr>
																									<th style="text-align: center;">STT</th>
																									<th style="text-align: center;">Mã số</th>
																									<th style="text-align: center;">Vấn đề</th>	
																									<th style="text-align: center;">Nội dung</th>
																									<th style="text-align: center;">Giải đáp</th>
																									<th style="text-align: center;">Đã gửi</th>
																									<th style="text-align: center;">Trả lời</th>

																								</tr>
																							</thead>
																							<tbody>
																								<?php 

																								$uemail=$_SESSION['login'];;
																								$sql = "SELECT * from trogiup where emailgui=:uemail";
																								$query = $dbh->prepare($sql);
																								$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
																								$query->execute();
																								$results=$query->fetchAll(PDO::FETCH_OBJ);
																								$cnt=1;
																								if($query->rowCount() > 0)
																								{
																									foreach($results as $result)
																										{	?>
																											<tr align="center">
																												<th ><?php echo htmlentities($cnt);?></td>
																													<td width="100">#MS-<?php echo htmlentities($result->id_trogiup);?></td>
																													<td width="100"><?php echo htmlentities($result->chude);?></td>
																													<td width="300"><?php echo htmlentities($result->noidung);?></td>
																													<td><?php echo htmlentities($result->traloi);?></td>
																													<td width="100"><?php echo date("d-m-Y", strtotime($result->ngaygui)); ?></td>
																													<td width="100"><?php echo date("d-m-Y", strtotime($result->ngaytraloi)); ?></td>
																												</tr>
																												<?php $cnt=$cnt+1; }} ?>
																											</table>

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
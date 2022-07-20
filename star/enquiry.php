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
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];	
	$mobileno=$_POST['mobileno'];
	$subject=$_POST['subject'];	
	$description=$_POST['description'];
	$sql="INSERT INTO  gopy(hoten,id_email,sdt,chude,noidung) VALUES(:fname,:email,:mobileno,:subject,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':fname',$fname,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
	$query->bindParam(':subject',$subject,PDO::PARAM_STR);
	$query->bindParam(':description',$description,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		$msg="Gửi thành công";
	}
	else 
	{
		$error="Đã xảy ra lỗi. Vui lòng thử lại";
	}

}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Starvel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Tourism Management System In PHP" />
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.css" rel="stylesheet">
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<style>
		.errorWrap {
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #dd3d36;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		}
		.succWrap{
			padding: 10px;
			margin: 0 0 20px 0;
			background: #fff;
			border-left: 4px solid #5cb85c;
			-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
			box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
		}
	</style>
</head>
<body>

	<div class="top-header">
		<?php include('includes/header.php');?>
		<section class="page-cover" id="cover-cruise-grid-list" style="background: url('images/cover-tour-grid-list.jpg') 50% 84%;">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Phản hồi</h1>
						<ul class="breadcrumb">
							<li><a href="#">Trang chủ</a></li>
							<li class="active">Phản hồi</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<br>
		<div class="privacy">
			<div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

				<div class="side-bar-block filter-block" style="background: url(images/bl2.jpeg); width: 305px; height: 400px;" >
					<h3>Du lịch Nhật Bản</h3>
					<p>Tham quan đất nước mặt trời mọc với hoa anh đào</p>

				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-12">
						<div class="side-bar-block main-block ad-block">
							<div class="main-img ad-img">
								<a href="#">
									<img src="images/rr.jpg" class="img-responsive" alt="car-ad" />
									<div class="ad-mask">
										<div class="ad-text">
											<span>Du lịch</span>
											<h2>Xe</h2>
											<span>Sang</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-12">    
						<div class="side-bar-block support-block">
							<h3>Hỗ trợ</h3>
							<p>Để có cơ sở góp phần đảm bảo quyền lợi cho khách hàng, giúp khách hàng soạn thảo được các văn bản pháp lý, các công văn chính xác theo quy định của pháp luật.</p>
							<div class="support-contact">
								<span><i class="fa fa-phone"></i></span>
								<p>+84 973536796</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Phản hồi</h3>
				<form name="enquiry" method="post" style="box-shadow: 0px 0px 10px -4px #000;
				margin-bottom: 2em;
				padding: 4em;
				margin-left: 260px;
				margin-top: 50px;
				">
				<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<p style="width: 450px; margin-left: 135px;">

					<b>Họ tên</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Nhập họ tên" required="">
				</p> 
				<p style="width: 450px; margin-left: 135px;">
					<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email của bạn" required="">
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<b>Điện thoại</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="nhập số điện thoại" required="">
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<b>Chủ đề</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Nhập chủ đề" required="">
				</p> 
				<p style="width: 450px; margin-left: 135px;">
					<b>Nội dung</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Nhập nội dung" required=""></textarea> 
				</p> 

				<p style="width: 450px; margin-left: 135px;">
					<button type="submit" name="submit1" class="btn-primary btn">Gửi</button>
				</p>
			</form>


		</div>
	</div>
	<br>
	<?php include('includes/footer.php');?>
	<?php include('includes/signup.php');?>			
	<?php include('includes/signin.php');?>			
	<?php include('includes/write-us.php');?>
</body>
</html>
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
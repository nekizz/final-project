<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<?php include('includes/thognke.php') ?>
<!DOCTYPE HTML>
<html>
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

</head>
<body>
	<?php include('includes/header.php');?>


	<section class="flexslider-container" id="flexslider-container-1">

		<div class="flexslider slider" id="slider-1">
			<ul class="slides">

				<li class="item-1" style="background:           linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/y.jpg) 50% 0%;
				background-size:cover;
				height:100%;">
				<div class=" meta">         
					<div class="container">
						<h2>Khám phá</h2>
						<h1>Thế giới</h1>
						<a href="tour-nuocngoai.php" class="btn btn-default">Xem thêm</a>
					</div> 
				</div>
			</li>

			<li class="item-2" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/autra.jpg) 50% 0%;
			background-size:cover;
			height:100%;">
			<div class=" meta">         
				<div class="container">
					<h2>Khám phá</h2>
					<h1>Australia</h1>
					<a href="tour-nuocngoai.php?cbid=5" class="btn btn-default">Xem thêm</a>
				</div>
			</div>
		</li>

	</ul>
</div>

<div class="search-tabs" id="search-tabs-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">


				<div class="tab-content">

					<div id="tour" class="tab-pane in active">
						<form action="search.php" method="get" name="timkiem">
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
									<div class="row">

										<div class="col-xs-12 col-sm-6 col-md-6">
											<label>Nơi xuất phát</label>
											<div class="form-group left-icon">
												<input type="text" class="form-control" placeholder="Nơi xuất phát" name="search" >
												<i class="fa fa-map-marker"></i>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6 col-md-6">
											<label>Điểm đến:</label>
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
											<label>Khởi hành:</label>
											<div class="form-group left-icon">
												<input type="date" class="form-control dpd1" placeholder="Ngày đi" name="search2">
												<i class="fa fa-calendar"></i>
											</div>
										</div>

										<div class="col-xs-6 col-sm-6 col-md-6">
											<label>Kết thúc:</label>
											<div class="form-group left-icon">
												<input type="date" class="form-control dpd2" placeholder="Ngày về" name="search3">
												<i class="fa fa-calendar"></i>
											</div>
										</div>

									</div>                    
								</div>

								<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
									<label>Tên tour:</label>
									<div class="form-group left-icon">
										<input type="text" class="form-control dpd1" placeholder="Tên tour" name="search4">
										<i class="fa fa-suitcase "></i>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 search-btn">
									<button name="submit" class="btn btn-orange" style="margin-bottom: -65px;">Tìm kiếm</button>
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

<br/><br/><br/><br/>	<br/><br/>	


</div>
</div>

<div class="container" style="
margin-bottom: -120px;
">
<div class="rupes" >
	<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
		<div class="rup-left" style="
		float: left;
		margin-right: 20px;
		">
		<a href="offers.html"><i class="fa fa-usd"  style="    font-size: 5em;
		color: #1f8dd6;"></i></a>
	</div>
	<div class="rup-rgt" >
		<h3 style="font-size: 20px;
		color: #34ad00;
		font-weight: 700;">Giá thành hợp lí</h3>
		<h4><a href="offers.html">Phù hợp với nhu cầu</a></h4>

	</div>
	<div class="clearfix"></div>
</div>
<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
	<div class="rup-left" style="
	float: left;
	margin-right: 20px;
	">
	<a href="offers.html"><i class="fa fa-h-square" style="    font-size: 5em;
	color: #1f8dd6;"></i></a>
</div>
<div class="rup-rgt">
	<h3 style="font-size: 20px;
	color: #34ad00;
	font-weight: 700;">Giảm giá lên tới 70%</h3>
	<h4><a href="offers.html">Khi có chương trình khuyến mãi</a></h4>

</div>
<div class="clearfix"></div>
</div>
<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
	<div class="rup-left" style="
	float: left;
	margin-right: 20px;
	">
	<a href="offers.html"><i class="fa fa-mobile" style="    font-size: 5em;
	color: #1f8dd6;"></i></a>
</div>
<div class="rup-rgt">
	<h3 style="font-size: 20px;
	color: #34ad00;
	font-weight: 700;">Tiện lợi nhanh chóng</h3>
	<h4><a href="offers.html">Thông minh và đầy đủ</a></h4>

</div>
<div class="clearfix"></div>
</div>

</div>
</div>
<!--=============== TOUR OFFERS ===============-->
<section id="tour-offers" class="section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-heading">
					<h2>Tour</h2>
					<hr class="heading-line" />
				</div>
				<div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
					<?php $sql = "SELECT * from goidulich order by rand()";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
						foreach($results as $result)
							{	?>
								<div class="item">
									<div class="main-block tour-block">
										<div class="main-img">
											<a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>">
												<img src="images/tour/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="tour-img" style="width: 360px; height: 240px;"/>
											</a>
										</div>
										<div class="offer-price-2">
											<ul class="list-unstyled">
												<li class="price"><?php echo number_format($result->giagoi);?> VNĐ<h4 style="float: right; margin-left: -160px; margin-right: 40px;"> <?php echo htmlentities($result->loaigoi);?> <?php echo htmlentities($result->nguoilon);?></h4><a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
											</ul>
										</div>
										<div class="main-info tour-info">
											<div class="main-title tour-title" style="height: 130px;">
												<a style="font-size: 15px;" href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>"> <?php echo htmlentities($result->tengoi);?></a>
												<p><?php echo htmlentities($result->vitri);?></p>
												<div class="rating">
													<span><i class="fa fa-star orange"></i></span>
													<span><i class="fa fa-star orange"></i></span>
													<span><i class="fa fa-star orange"></i></span>
													<span><i class="fa fa-star orange"></i></span>
													<span><i class="fa fa-star grey"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php }} ?>
						</div>

						<div class="view-all text-center">
							<a href="tour-list.php" class="btn btn-orange">Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=============== features  ===============-->
		<section id="best-features" class="banner-padding black-features">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="b-feature-block">
							<span><i class="fa fa-dollar"></i></span>
							<h3>Giả cả hợp lý</h3>
							<p>Cà rốt Lorem cho hai chạy câu chuyện bình đẳng trong lucilius đầu tiên lợi ích. Tôi muốn nó đã được chọn.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="b-feature-block">
							<span><i class="fa fa-lock"></i></span>
							<h3>An toàn và bảo mật</h3>
							<p>Cà rốt ipsum Lorem cho hai chạy câu chuyện bình đẳng trong lucilius đầu tiên lợi ích. Tôi muốn nó đã được chọn.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="b-feature-block">
							<span><i class="fa fa-thumbs-up"></i></span>
							<h3>Đảm bảo chất lượng</h3>
							<p>Cà rốt ipsum Lorem cho hai chạy câu chuyện bình đẳng trong lucilius đầu tiên lợi ích. Tôi muốn nó đã được chọn.</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="b-feature-block">
							<span><i class="fa fa-bars"></i></span>
							<h3>Nhiều lựa chọn</h3>
							<p>Cà rốt ipsum Lorem cho hai chạy câu chuyện bình đẳng trong lucilius đầu tiên lợi ích. Tôi muốn nó đã được chọn.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--=============== DU THUYỀN ===============-->
		<section id="cruise-offers" class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-heading">
							<h2>Tour khuyến mãi</h2>
							<hr class="heading-line" />
						</div>

						<div class="row">
							<?php $sql = "SELECT * from goidulich where khuyenmai= 1 order by rand() limit 4";
							$query = $dbh->prepare($sql);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=1;
							if($query->rowCount() > 0)
							{
								foreach($results as $result)
									{	?>
										<div class="col-sm-6 col-md-6" style="width: 49%; ">
											<div class="main-block cruise-block">
												<div class="row" >
													<div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
														<div class="main-img cruise-img" style="width: 256px; 
														height: 210px;"/>
														<a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>">
															<img src="images/tour/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="cruise-img" style="width: 256px; 
															height: 210px;"/>
															<div class="cruise-mask">
																<p><i style="margin-left: -5px; color: yellow;" class="glyphicon glyphicon-bookmark"></i> <?php echo htmlentities($result->ten_lt);?></p>
															</div>
														</a>
													</div>
												</div>

												<div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
													<div class=" main-info cruise-info" style="height: 210px;">

														<div class="main-title cruise-title" style=" margin-left: -25px; width: 275px;">
															<a style="font-size: 14px " href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>"> <?php echo htmlentities($result->tengoi);?></a>
															<p><?php echo htmlentities($result->vitri);?></p>
															<div class="rating">
																<span><i class="fa fa-star orange"></i></span>
																<span><i class="fa fa-star orange"></i></span>
																<span><i class="fa fa-star orange"></i></span>
																<span><i class="fa fa-star orange"></i></span>
																<span><i class="fa fa-star grey"></i></span>
															</div>

															<span class="cruise-price"> <?php echo number_format($result->giagoi);?> VNĐ</span>
															
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								<?php }} ?>
							</div>

							<div class="view-all text-center">
								<a href="tour-khuyenmai.php" class="btn btn-orange">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php include('includes/thongke.php') ?>

			<!--==========================NHÓM THỰC HIỆN=================================-->

			<section id="testimonials" class="section-padding back-size" style="background: url(images/tn1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-heading white-heading">
								<h2>Quản trị viên</h2>
								<hr class="heading-line" />
							</div>

							<div class="carousel slide" data-ride="carousel" id="quote-carousel">
								<div class="carousel-inner text-center">

									<div class="item active">
										<blockquote>Ông à một doanh nhân và chính trị gia, Thiếu tướng Quân đội nhân dân Việt Nam. Ông hiện giữ chức vụ Bộ trưởng Bộ Thông tin và Truyền thông Việt Nam. Ông từng là Chủ tịch Hội đồng quản trị kiêm Tổng giám đốc Tập đoàn Công nghiệp – Viễn thông Quân đội.</blockquote>
										<div class="rating">
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
										</div>
										<small>Phạm Đức Duy</small>
									</div>

									<div class="item">
										<blockquote>Ông được sinh ra trong một gia đình có cả bố và mẹ đều rất thành công, cho nên ngay từ bé Bill gates đã được bố mẹ khuyến khích tinh thần học hỏi và rèn luyện tính nhanh nhẹn và đấu tranh. Ngay bản thân của Bill gates cũng rất thích thú với máy tính.</blockquote>
										<div class="rating">
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star lightgrey"></i></span>
											<span><i class="fa fa-star lightgrey"></i></span>
										</div>

										<small>Bill Gates</small>
									</div>

									<div class="item">
										<blockquote>Mark Elliot Zuckerberg là một nhà lập trình máy tính người Mỹ kiêm doanh nhân mảng công nghệ Internet. Anh là nhà đồng sáng lập của Facebook, và hiện đang điều hành công ty này với chức danh chủ tịch kiêm giám đốc điều hành.</blockquote>
										<div class="rating">
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star orange"></i></span>
											<span><i class="fa fa-star lightgrey"></i></span>
											<span><i class="fa fa-star lightgrey"></i></span>
										</div>

										<small>Mark Zuckerberg</small>
									</div>

								</div>

								<ol class="carousel-indicators">
									<li data-target="#quote-carousel" data-slide-to="0" class="active"><img src="images/3.jpg" class="img-responsive"  alt="client-img">
									</li>
									<li data-target="#quote-carousel" data-slide-to="1"><img src="images/bg.jpg" class="img-responsive"  alt="client-img">
									</li>
									<li data-target="#quote-carousel" data-slide-to="2"><img src="images/fb.jpg" class="img-responsive"  alt="client-img">
									</li>
								</ol>

							</div>
						</div>
					</div>
				</div>
			</section>

			<!--================ LATEST BLOG ==============-->
			<section id="latest-blog" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="page-heading">
								<h2>Blog mới nhất</h2>
								<hr class="heading-line" />
							</div>

							<div class="row">
								<?php $sql = "SELECT * from blog order by rand() limit 4";
								$query = $dbh->prepare($sql);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($query->rowCount() > 0)
								{
									foreach($results as $result)
										{	?>
											<div class="col-sm-6 col-md-3">
												<div class="main-block latest-block">
													<div class="main-img latest-img" style="width: 262px; 
													height: 210px;">
													<a href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>">
														<img src="images/blog/<?php echo htmlentities($result->hinhanh);?>" style="width: 262px; 
														height: 210px;"/>
													</a>
												</div>

												<div class="latest-info" style="    padding: 20px 20px;">
													<ul class="list-unstyled" >
														<li><span ><i class="fa fa-calendar-minus-o"></i></span><?php echo htmlentities($result->ngaydang);?><span class="author" style="float: left;
														margin-right: -135px;"></br> Tác giả: <a href="#" ><?php echo htmlentities($result->nguoiviet);?></a></span></li>
													</ul>
												</div>

												<div class="main-info latest-desc" style="
												height: 215px;
												">
												<div class="row">
													<div class="col-xs-10 col-sm-10 main-title">
														<a style="font-size: 15px;" href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>"><?php echo htmlentities($result->chude);?></a>
														<p style="text-overflow:ellipsis; height: 100px; width:230px; overflow: auto;" ><?php echo htmlentities($result->tomtat);?></p>
													</div>
												</div>

												<span class="arrow"><a href="blog-detail.php?pkgid=<?php echo htmlentities($result->id_blog);?>"><i class="fa fa-angle-right"></i></a></span>
											</div>
										</div>
									</div>
								<?php }} ?>
							</div>

							<div class="view-all text-center">
								<a href="blog-list.php" class="btn btn-orange">Xem thêm</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--==============================NHẬN EMAIL===========================-->
			<section id="newsletter-1" class="section-padding back-size newsletter" style="background: url(images/tn.jpg);"> 
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<h2>Đăng ký nhận thông báo</h2>
							<p>Để cập nhật nhanh nhất về chúng tôi</p>	
							<form>
								<div class="form-group">
									<div class="input-group">
										<input type="email" class="form-control input-lg" placeholder="Nhập email của bạn" required/>
										<span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>





				<!-- <a style="width: 25%; float: left; margin-top: 45px;" class="weatherwidget-io" href="https://forecast7.com/en/18d68105d68/vinh/" data-label_1="VINH" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-theme="orange" >VINH WEATHER</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>


				<a style="width: 25%; float: left; margin-top: 45px;" class="weatherwidget-io" href="https://forecast7.com/en/21d03105d83/hanoi/" data-label_1="HÀ NỘI" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-theme="original" >HÀ NỘI WEATHER</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>

				<a style="width: 25%; float: left; margin-top: 45px;" class="weatherwidget-io" href="https://forecast7.com/en/16d05108d07/da-nang/" data-label_1="ĐÀ NẴNG" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-theme="orange" >ĐÀ NẴNG WEATHER</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>	

				<a style="width: 25%; float: left; margin-top: 45px;" class="weatherwidget-io" href="https://forecast7.com/en/10d82106d63/ho-chi-minh-city/" data-label_1="HO CHI MINH CITY" data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Forecast" data-theme="original" >HO CHI MINH CITY WEATHER</a>
				<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
				</script>	
			</div>
			
		</div>  -->	





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


			.search-tabs .tab-content .tab-pane .btn:link, .search-tabs .tab-content .tab-pane .btn:visited
			{
				color:white;
				text-decoration:none;
			}

			.search-tabs .tab-content .tab-pane .btn:hover
			{
				color:white;
				font-weight:bold;
				background: blue;
			}

			.search-tabs .tab-content .tab-pane .btn:active
			{
				background:yellow;
			}

			.search-tabs .tab-content .tab-pane .btn:link, a.btn:visited
			{
				color:white;
				text-decoration:none;
			}

			.search-tabs .tab-content .tab-pane .btn:hover
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
			
			<?php include('includes/footer.php');?>

			<?php include('includes/signup.php');?>			

			<?php include('includes/signin.php');?>			

			<?php include('includes/write-us.php');?>			

		</body>

<script type="text/javascript">
			document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_right{display:none;position:fixed;z-index:9999;top:0;right:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(http://demo.iwebs.vn/api/images/noel/ft.png) repeat-x bottom left}{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#,#,#,#{display:block}}</style><div style="position:fixed;z-index:9999;bottom:3px;right:3px; font-size:12px;color:#8D8D8D;"> <a href="http://demo.iwebs.vn/api/vi/tin-tuc/chia-se-code-javascript-tao-tuyet-roi--khung-canh-giang-sinh-cho-website-183.html"></a></div>');
			var no=100;var hidesnowtime=0;var snowdistance='pageheight';var ie4up=(document.all)?1:0;var ns6up=(document.getElementById&&!document.all)?1:0;function iecompattest(){return(document.compatMode&&document.compatMode!='BackCompat')?document.documentElement:document.body}var dx,xp,yp;var am,stx,sty;var i,doc_width=800,doc_height=600;if(ns6up){doc_width=self.innerWidth;doc_height=self.innerHeight}else if(ie4up){doc_width=iecompattest().clientWidth;doc_height=iecompattest().clientHeight}dx=new Array();xp=new Array();yp=new Array();am=new Array();stx=new Array();sty=new Array();for(i=0;i<no;++i){dx[i]=0;xp[i]=Math.random()*(doc_width-50);yp[i]=Math.random()*doc_height;am[i]=Math.random()*20;stx[i]=0.02+Math.random()/10; sty[i]=0.7+Math.random();if(ie4up||ns6up){document.write('<div id="dot'+i+'" style="POSITION:absolute;Z-INDEX:'+i+';VISIBILITY:visible;TOP:15px;LEFT:15px;"><span style="font-size:18px;color:#fff">*</span></div>')}}function snowIE_NS6(){doc_width=ns6up?window.innerWidth-10:iecompattest().clientWidth-10;doc_height=(window.innerHeight&&snowdistance=='windowheight')?window.innerHeight:(ie4up&&snowdistance=='windowheight')?iecompattest().clientHeight:(ie4up&&!window.opera&&snowdistance=='pageheight')?iecompattest().scrollHeight:iecompattest().offsetHeight;for(i=0;i<no;++i){yp[i]+=sty[i];if(yp[i]>doc_height-50){xp[i]=Math.random()*(doc_width-am[i]-30);yp[i]=0;stx[i]=0.02+Math.random()/10;sty[i]=0.7+Math.random()}dx[i]+=stx[i];document.getElementById('dot'+i).style.top=yp[i]+'px';document.getElementById('dot'+i).style.left=xp[i]+am[i]*Math.sin(dx[i])+'px'}snowtimer=setTimeout('snowIE_NS6()',10)}function hidesnow(){if(window.snowtimer){clearTimeout(snowtimer)}for(i=0;i<no;i++)document.getElementById('dot'+i).style.visibility='hidden'}if(ie4up||ns6up){snowIE_NS6();if(hidesnowtime>0)setTimeout('hidesnow()',hidesnowtime*1000)}
			var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//itexpress.vn/js/popup_newtab_time.js";
		</script>
		
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
		</html>

		<style type="text/css">
			.view-all {
				margin-top: 0px;}
				.section-padding {
					padding-top: 30px;
					padding-bottom: 80px;
				}
				.clearfix{
					margin-bottom: 15px;
				}
			</style>


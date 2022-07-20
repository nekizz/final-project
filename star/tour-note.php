
<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit22']))
{
	$pid=intval($_GET['pkgid']);
	$useremail=$_SESSION['login'];
	$nguoilon=$_POST['nguoilon'];
	$treem=$_POST['treem'];
	$trenho=$_POST['trenho'];
	$embe=$_POST['embe'];
	$phongdon=$_POST['phongdon'];
	$comment=$_POST['comment'];
	$status=$_POST['status'];
	
	$status=0;
	$sql="INSERT INTO hoadon(id_goi,email_nguoidung,nguoilon,treem,trenho,embe,phongdon,ghichu,trangthai) VALUES(:pid,:useremail,:nguoilon,:treem, :trenho,:embe,:phongdon,:comment,:status)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':pid',$pid,PDO::PARAM_STR);
	$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
	$query->bindParam(':nguoilon',$nguoilon,PDO::PARAM_STR);
	$query->bindParam(':treem',$treem,PDO::PARAM_STR);
	$query->bindParam(':trenho',$trenho,PDO::PARAM_STR);
	$query->bindParam(':embe',$embe,PDO::PARAM_STR);
	$query->bindParam(':phongdon',$phongdon,PDO::PARAM_STR);
	$query->bindParam(':comment',$comment,PDO::PARAM_STR);
	$query->bindParam(':status',$status,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		$msg="<script>alert('Đã đặt thành công')</script>";
	}
	else 
	{
		$error="<script>alert('Đặt không thành công. Vui lòng kiểm tra lại')</script>";
	}

}
?>
<html lang="en">
<head>
	<title>Lưu ý</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" id="cpswitch" href="css/orange.css">
	<link rel="stylesheet" href="css/responsive.css">

	<link rel="stylesheet" href="css/datepicker.css">

	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
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

</div>

<!--============= PAGE-COVER =============-->
<section class="page-cover" id="cover-car-detail">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="page-title">Đặt tour</h1>
				<ul class="breadcrumb">
					<li><a href="index.php">Trang chủ</a></li>
					<li class="active">Chi tiết</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<!--==== INNERPAGE-WRAPPER =====-->
<?php if($error){?><div class="errorWrap"><?php echo ($error); ?> </div><?php } 
else if($msg){?><div class="succWrap"><?php echo ($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from goidulich where id_goi=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
	foreach($results as $result)
		{	?>
			<section class="innerpage-wrapper">
				<div id="car-details" class="innerpage-section-padding">
					<div class="container">
						<div class="row">        	

							<div class="col-xs-12 col-sm-12 col-md-3 side-bar left-side-bar">

								<div class="side-bar-block booking-form-block">
									<h2 class="selected-price"><?php echo number_format($result->giagoi);?> VND</h2>

									<div class="booking-form">
										<h3><?php echo htmlentities($result->tengoi);?></h3>
										<form name="book" method="post">
											<h4> Mã tour:<b>  BKG-0<?php echo htmlentities($result->id_goi);?><b> </h4><br>
												<h4><i class="fas fa-plane-departure"></i> Khởi hành: <?php echo date("d-m-Y", strtotime($result->ngayxuatphat)); ?></h4>
												<p><h4><i class="fas fa-clock"></i> Giờ đi: <?php echo htmlentities($result->giodi);?> </h4></p>
												<p><h4><i class="fas fa-plane-arrival"></i> Kết thúc: <?php echo date("d-m-Y", strtotime($result->ngayve)); ?> </h4></p>
												<p><h4><i class="fas fa-motorcycle"></i> Phương tiện: <?php echo htmlentities($result->phuongtien);?></h4> </p>
												
												<div class="form-group">
													<input name="nguoilon" id="nguoilon" type="number" class="form-control" placeholder="Người lớn (trên 15 tuổi)" value="<?php echo isset($_POST['nguoilon']) ? $_POST['nguoilon'] : '' ?>" required/>
												</div>
												<div class="form-group">
													<input name="treem" id="treem" type="number" class="form-control" placeholder="Trẻ em (8 đến 15 tuổi)" value="<?php echo isset($_POST['treem']) ? $_POST['treem'] : '' ?>"/>
												</div>
												<div class="form-group">
													<input name="trenho" id="trenho" type="number" class="form-control" placeholder="Trẻ nhỏ (3 đến 8 tuổi)" value="<?php echo isset($_POST['trenho']) ? $_POST['trenho'] : '' ?>" />
												</div>
												<div class="form-group">
													<input name="embe" id="embe" type="number" class="form-control" placeholder="Em bé (dưới 3 tuổi)" value="<?php echo isset($_POST['embe']) ? $_POST['embe'] : '' ?>" />
												</div>
												<div class="form-group">
													<input name="phongdon" id="phongdon" type="number" class="form-control" placeholder="Thêm phòng đơn (Đã có 1)" value="<?php echo isset($_POST['phongdon']) ? $_POST['phongdon'] : '' ?>"/>
												</div>
												<div class="form-group">
													<input style="font-size: 18px;
													color: #faa61a;" name="tinh" type="submit" value="Tổng tiền" class="form-control">
												</div>
												<?php 
												$a = $_POST["nguoilon"];
												$b = $_POST["treem"];
												$c = $_POST["trenho"];
												$d = $_POST["phongdon"];
												$a = $a*($result->giagoi);
												$b = $b*($result->giatreem);
												$c = $c*($result->giatrenho);
												$d = $d*($result->giaphongdon) + ($result->giaphongdon);

												function tinh($a,$b,$c,$d)
												{

													$e = (int)$a + (int)$b + (int)$c + (int)$d;
													return $e;
												}
												?> <div style="font-size: 23px;border: 1px solid #e6e7e8;text-align: center;margin-bottom: 13px;background: #faa61a; color: #fff;"> <?php echo number_format(tinh($a,$b,$c,$d))  ." đ"; ?></div>	

												<div class="form-group">
													<input name="comment" type="text" class="form-control" placeholder="Ghi chú" />
												</div>
												<div class="form-group right-icon">
													<select class="form-control">
														<option selected>Thanh toán</option>
														<option>Credit Card</option>
														<option>Paypal</option>
													</select>
													<i class="fa fa-angle-down"></i>
												</div>
												<?php if($_SESSION['login'])
												{?>
													<button type="submit" name="submit22" class="btn btn-block btn-orange">Yêu cầu đặt</button>
												<?php } else {?>
													<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Đặt</a>
												<?php } ?>
											</form>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side" style="height: max-content;">
									<div class="detail-slider">
										<div class="feature-slider">
											<div><img src="images/tour/<?php echo htmlentities($result->hinhanh);?>" class="img-responsive" alt="feature-img" style="    height: 480px; width: 880px;"/>
												<div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
													<ul style="width: max-content; margin-top: 30px; list-style: none; margin-left: -230px; font-size: 20px;">
														<li  style="margin-top: -19px;margin-left: 190px;"><a href="tour-detail.php?pkgid=<?php echo htmlentities($result->id_goi);?>"><span> <i class="fas fa-layer-group"></i></span> Giới thiệu</li>
														
														<li style="margin-top: -30px;margin-left: 432px;"><a href="tour-program.php?pkgid=<?php echo htmlentities($result->id_goi);?>"><span><i class="fas fa-dolly-flatbed"></i></span> Chương trình</a></li>

														
														<p style="margin-top: -24px;
    margin-left: 680px;"><i class="fas fa-exclamation-circle"></i> Lưu ý</p>
													</ul>
												</div><br>
												<div class="available-blocks" id="available-rooms">
													<h2><br>Chi tiết: </h2>
												</div>
												<p>Điểm xuất phát: <?php echo htmlentities($result->noixuatphat);?></p>
												<p>Điểm đến: <?php echo htmlentities($result->vitri);?> - <?php echo htmlentities($result->ten_tinh);?> - <?php echo htmlentities($result->quocgia);?>  </p> 
												<h3 style="margin-left: 200px;">Bảng giá</h3>
												<table class="table">
													<tbody>
														<tr>
															<td>Người lớn (15 tuổi trở lên)
												
																</td>
															<td><?php echo number_format($result->giagoi);?> đ</td>
														</tr>
														<tr>
															<td>Trẻ em (8 đến 15 tuổi)</td>
															<td><?php echo number_format($result->giatreem);?> đ</td>
														</tr>
														<tr>
															<td>Trẻ nhỏ (4 đến 8 tuổi)</td>
															<td><?php echo number_format($result->giatrenho);?> đ</td>
														</tr>
														<tr>
															<td>em bé (dưới 4 tuổi)</td>
															<td>0 đ</td>
														</tr>
														<tr>
															<td>Phụ thu phòng đơn</td>
															<td><?php echo number_format($result->giaphongdon);?> đ</td>
														</tr>
													</tbody>
												</table>
												<br><H3>Lưu ý: </H3>
												<p style="padding-top: 1%"><?php echo($result->luuy);?></p>   
											</div>
										</div>

										<ul class="list-unstyled features tour-features">
											
										</ul>
									</div> 
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php }} ?>

			<!--======================= FOOTER =======================-->
			<?php include('includes/footer.php') ?>
			
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


		
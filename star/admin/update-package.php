<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{
	$pid=intval($_GET['pid']);	
	if(isset($_POST['submit11']))
	{
		$khuyenmai=$_POST['khuyenmai'];
		$nuocngoai=$_POST['nuocngoai'];
		$quocgia=$_POST['quocgia'];
		$ten_tinh=$_POST['ten_tinh'];
		$tengoi=$_POST['tengoi'];
		$noixuatphat=$_POST['noixuatphat'];
		$vitri=$_POST['vitri'];
		$giagoi=$_POST['giagoi'];
		$giatreem=$_POST['giatreem'];
		$giatrenho=$_POST['giatrenho'];
		$giaphongdon=$_POST['giaphongdon'];
		$sonhan=$_POST['sonhan'];
		$chitietgoi=$_POST['chitietgoi'];
		$chuongtrinh=$_POST['chuongtrinh'];
		$luuy=$_POST['luuy'];
		$songay=$_POST['songay'];
		$giodi=$_POST['giodi'];
		$ngayxuatphat=$_POST['ngayxuatphat'];
		$ngayve=$_POST['ngayve'];
		$phuongtien=$_POST['phuongtien'];
		$pimage=$_FILES["packageimage"]["name"];
		move_uploaded_file($_FILES["packageimage"]["tmp_name"],"pacakgeimages/".$_FILES["packageimage"]["name"]);
		$sql="update goidulich set khuyenmai=:khuyenmai, nuocngoai=:nuocngoai, quocgia=:quocgia, ten_tinh=:ten_tinh, tengoi=:tengoi, noixuatphat=:noixuatphat, vitri=:vitri, giagoi=:giagoi, giatreem=:giatreem, giatrenho=:giatrenho, giaphongdon=:giaphongdon, sonhan=:sonhan, chitietgoi=:chitietgoi, chuongtrinh=:chuongtrinh, luuy=:luuy, songay=:songay, giodi=:giodi, ngayxuatphat=:ngayxuatphat, ngayve=:ngayve, phuongtien=:phuongtien  where id_goi=:pid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':khuyenmai',$khuyenmai,PDO::PARAM_STR);
		$query->bindParam(':nuocngoai',$nuocngoai,PDO::PARAM_STR);
		$query->bindParam(':quocgia',$quocgia,PDO::PARAM_STR);
		$query->bindParam(':ten_tinh',$ten_tinh,PDO::PARAM_STR);
		$query->bindParam(':tengoi',$tengoi,PDO::PARAM_STR);
		$query->bindParam(':noixuatphat',$noixuatphat,PDO::PARAM_STR);
		$query->bindParam(':vitri',$vitri,PDO::PARAM_STR);
		$query->bindParam(':giagoi',$giagoi,PDO::PARAM_STR);
		$query->bindParam(':giatreem',$giatreem,PDO::PARAM_STR);
		$query->bindParam(':giatrenho',$giatrenho,PDO::PARAM_STR);
		$query->bindParam(':giaphongdon',$giaphongdon,PDO::PARAM_STR);
		$query->bindParam(':sonhan',$sonhan,PDO::PARAM_STR);
		$query->bindParam(':chitietgoi',$chitietgoi,PDO::PARAM_STR);
		$query->bindParam(':chuongtrinh',$chuongtrinh,PDO::PARAM_STR);
		$query->bindParam(':luuy',$luuy,PDO::PARAM_STR);
		$query->bindParam(':songay',$songay,PDO::PARAM_STR);
		$query->bindParam(':giodi',$giodi,PDO::PARAM_STR);
		$query->bindParam(':ngayxuatphat',$ngayxuatphat,PDO::PARAM_STR);
		$query->bindParam(':ngayve',$ngayve,PDO::PARAM_STR);
		$query->bindParam(':phuongtien',$phuongtien,PDO::PARAM_STR);
		$query->bindParam(':pid',$pid,PDO::PARAM_STR);
		$query->execute();
		$msg=" Đã cập nhật";
	}

	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title>Thêm tour</title>		
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css"/>
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<script src="js/jquery-2.1.4.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<script src="../ckeditor/ckeditor.js"></script>
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
		<div class="page-container">
			<div class="left-content">
				<div class="mother-grid-inner">
					<?php include('includes/header.php');?>

					<div class="clearfix"> </div>	
				</div>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Trang chủ</a><i class="fa fa-angle-right"></i>Cập nhật tour </li>
				</ol>
				<div class="grid-form">
					<div class="grid-form1">
						<h3>Cập nhật tour</h3>
						<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
						else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<?php 
								$pid=intval($_GET['pid']);
								$sql = "SELECT * from goidulich where id_goi=:pid";
								$query = $dbh -> prepare($sql);
								$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($query->rowCount() > 0)
								{
									foreach($results as $result)
										{	?>

											<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
												

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Quốc gia</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="quocgia" id="packagename" placeholder="Quốc gia" value="<?php echo htmlentities($result->quocgia);?>">
													</div>
												</div>

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Tỉnh</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="ten_tinh" id="packagename" placeholder="Tên tỉnh" value="<?php echo htmlentities($result->ten_tinh);?>">
													</div>
												</div>

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Tên gói</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="tengoi" id="packagename" placeholder="Tên tour" value="<?php echo htmlentities($result->tengoi);?>" required >
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Điểm khởi hành</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="noixuatphat" id="noixuatphat" placeholder="Nơi xuất phát" value="<?php echo htmlentities($result->noixuatphat);?>" required>
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Điểm đến</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="vitri" id="vitri" placeholder=" Vị trí"value="<?php echo htmlentities($result->vitri);?>" required>
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Giá người lớn</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="giagoi" id="giagoi" placeholder=" Giá gói VND" value="<?php echo htmlentities($result->giagoi);?>" required>
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Giá giá trẻ em</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="giatreem" id="giatreem" placeholder=" Giá trẻ em VND" value="<?php echo htmlentities($result->giatreem);?>" required>
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Giá giá trẻ nhỏ</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="giatrenho" id="giatrenho" placeholder=" Giá trẻ nhỏ VND" value="<?php echo htmlentities($result->giatrenho);?>" required>
													</div>
												</div>

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Giá phòng đơn</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="giaphongdon" id="giaphongdon" placeholder=" Giá Phòng đơn VND" value="<?php echo htmlentities($result->giaphongdon);?>" required>
													</div>
												</div>
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Chi tiết</label>
													<div class="col-sm-8">
														<textarea class="form-control" rows="5" cols="50" name="chitietgoi" id="packagedetails" placeholder="Chi tiết" required><?php echo htmlentities($result->chitietgoi);?></textarea> 
													</div>
												</div>	
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Chương trình</label>
													<div class="col-sm-8">
														<textarea class="form-control" rows="5" cols="50" name="chuongtrinh" id="packagedetails1" placeholder="Chương trình" required><?php echo htmlentities($result->chuongtrinh);?></textarea> 
													</div>
												</div>	
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Lưu ý</label>
													<div class="col-sm-8">
														<textarea class="form-control" rows="5" cols="50" name="luuy" id="packagedetails2" placeholder="Lưu ý" required><?php echo htmlentities($result->luuy);?></textarea> 
													</div>
												</div>	
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Số ngày</label>
													<div class="col-sm-8">
														<input type="number" class="form-control1" name="songay" id="songay" placeholder=" Số ngày" value="<?php echo htmlentities($result->songay);?>" required>
													</div>
												</div>

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Giờ xuất phát</label>
													<div class="col-sm-8">
														<input type="time" class="form-control1" name="giodi" id="giodi" placeholder=" Giờ đi" value="<?php echo htmlentities($result->giodi);?>" required>
													</div>
												</div>			
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Ngày xuất phát</label>
													<div class="col-sm-8">
														<input type="date" class="form-control1" name="ngayxuatphat" id="ngayxuatphat" placeholder=" Ngày đi" value="<?php echo htmlentities($result->ngayxuatphat);?>" required>
													</div>
												</div>	
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Ngày về</label>
													<div class="col-sm-8">
														<input type="date" class="form-control1" name="ngayve" id="ngayve" placeholder=" Ngày về" value="<?php echo htmlentities($result->ngayve);?>" required>
													</div>
												</div>		
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Phương tiện</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="phuongtien" id="phuongtien" placeholder=" Phương tiện" value="<?php echo htmlentities($result->phuongtien);?>" required>
													</div>
												</div>														
												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Hình ảnh</label>
													<div class="col-sm-8">
														<img src="pacakgeimages/<?php echo htmlentities($result->hinhanh);?>" width="200">&nbsp;&nbsp;&nbsp;<a href="change-image.php?imgid=<?php echo htmlentities($result->id_goi);?>">Thay đổi ảnh</a>
													</div>
												</div>

											<?php }} ?>

											<div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<button type="submit" name="submit11" class="btn-primary btn">Cập nhật</button>

												</div>
											</div>

										</div>

									</form>
									<div class="panel-footer">

									</div>
								</form>
							</div>
						</div>
						<script>
							$(document).ready(function() {
								var navoffeset=$(".header-main").offset().top;
								$(window).scroll(function(){
									var scrollpos=$(window).scrollTop(); 
									if(scrollpos >=navoffeset){
										$(".header-main").addClass("fixed");
									}else{
										$(".header-main").removeClass("fixed");
									}
								});

							});
						</script>
						<div class="inner-block">

						</div>
						<?php include('includes/footer.php');?>
					</div>
				</div>
				<?php include('includes/sidebarmenu.php');?>
				<div class="clearfix"></div>		
			</div>
			<script>
				var toggle = true;

				$(".sidebar-icon").click(function() {                
					if (toggle)
					{
						$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
						$("#menu span").css({"position":"absolute"});
					}
					else
					{
						$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
						setTimeout(function() {
							$("#menu span").css({"position":"relative"});
						}, 400);
					}

					toggle = !toggle;
				});
			</script>
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</body>
		</html>
	<?php } ?>

	<div class="clearfix"></div>		
</div>
<script>
	var toggle = true;

	$(".sidebar-icon").click(function() {                
		if (toggle)
		{
			$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
			$("#menu span").css({"position":"absolute"});
		}
		else
		{
			$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
			setTimeout(function() {
				$("#menu span").css({"position":"relative"});
			}, 400);
		}

		toggle = !toggle;
	});
</script>
<script>CKEDITOR.replace('packagedetails');</script>
<script>CKEDITOR.replace('packagedetails1');</script>
<script>CKEDITOR.replace('packagedetails2');</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->	   
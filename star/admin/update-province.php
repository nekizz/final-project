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
	if(isset($_POST['submit']))
	{
		$ten=$_POST['ten_tinh'];
		$sql="update tinh set ten_tinh=:ten where id_tinh=:pid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':ten',$ten,PDO::PARAM_STR);
		$query->bindParam(':pid',$pid,PDO::PARAM_STR);
		$query->execute();
		$msg="Cập nhật thành công";
	}

	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title>starvel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
					<li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Cập nhật tour </li>
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
								$sql = "SELECT * from tinh where id_tinh=:pid";
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
													<label for="focusedinput" class="col-sm-2 control-label">Tên tỉnh</label>
													<div class="col-sm-8">
														<input type="text" class="form-control1" name="ten_tinh" id="ten_tinh" placeholder="Tên tỉnh" value="<?php echo htmlentities($result->ten_tinh);?>" required>
													</div>
												</div>
												

												<div class="form-group">
													<label for="focusedinput" class="col-sm-2 control-label">Cập nhật lần cuối</label>
													<div class="col-sm-8">
														<?php echo htmlentities($result->ngaycapnhat);?>
													</div>
												</div>		
											<?php }} ?>

											<div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<button type="submit" name="submit" class="btn-primary btn">Cập nhật</button>
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
			<script>CKEDITOR.replace('packagedetail');</script>
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>
			<script src="js/bootstrap.min.js"></script>
			
		</body>
		</html>
		<?php } ?>
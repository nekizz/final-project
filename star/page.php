
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
	$mobile=$_POST['mobileno'];
	$subject=$_POST['subject'];	
	$description=$_POST['description'];
	$sql="INSERT INTO  gopy(hoten,id_email,sdt,chude,noidung) VALUES(:fname,:email,:mobile,:subject,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':fname',$fname,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
	$query->bindParam(':subject',$subject,PDO::PARAM_STR);
	$query->bindParam(':description',$description,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId)
	{
		$msg="Cảm ơn bạn đã góp ý";
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
	<title>starvel</title>
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
		<?php 
		$pagetype=$_GET['type'];
		$sql = "SELECT loaivb,noidung from vanban where loaivb=:pagetype";
		$query = $dbh -> prepare($sql);
		$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$cnt=1;
		if($query->rowCount() > 0)
		{
			foreach($results as $result)
			{		

				?>
				<section class="page-cover" id="cover-cruise-grid-list" style="background: url('images/cover-tour-grid-list.jpg') 50% 84%;">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h1 class="page-title"><?php 	echo $_GET['type'] ?></h1>
								<ul class="breadcrumb">
									<li><a href="#">Trang chủ</a></li>
									<li class="active"><?php 	echo $_GET['type'] ?></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<br>

				<div class="privacy">
					<div class="container">

						<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>


						<p>
							<?php 	echo $result->noidung; ?>

						</p> 

					</div>
				</div>
			<?php } }?>
			<br>
			<?php include('includes/footer.php');?>
			
			<?php include('includes/signup.php');?>			
			
			<?php include('includes/signin.php');?>			
			
			<?php include('includes/write-us.php');?>			

		</body>
		</html>
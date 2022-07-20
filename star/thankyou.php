<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
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
<div class="banner-1 ">
	<div class="container">
	</div>
</div>
<div class="contact" style="height: 200px;">
	<div class="container" style="text-align: center;">
	<h3 style="    margin-top: 30px;">Xác nhận</h3>
		<div class="col-md-10 contact-left">
			<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;"style="text-align: center; margin-left: 20px;" >
	

              <h4 style="margin: 47px 40px 38px 238px;">  <?php echo htmlentities($_SESSION['mng']);?></h4>
            
			</div>
		
			<div class="clearfix"></div>
	</div>
</div>
</div>

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
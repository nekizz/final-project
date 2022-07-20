<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "starvel";

$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_set_charset ( $conn ,"utf8" );
if ($conn->connect_error) {
	die("connection failed" . $conn->connct_error);
}
if(isset($_POST["submit102"])){
	$stmt = $conn->prepare("insert into tinh(ten_tinh) values (?)");
	$stmt->bind_param("s",$ten_tinh);
	$ten_tinh = $_POST['ten_tinh'];
	$stmt->execute();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Thêm khách sạn</title>		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css"/>
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<script src="js/jquery-2.1.4.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/table-style.css" />
		<link rel="stylesheet" type="text/css" href="css/basictable.css" />
		<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
		<!--=========================database======================== -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.semanticui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
		<script src="../ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
     // $('#table').basictable();

     var dt= $('#table').DataTable({
     	"dom": '<"pull-right"f>t<"row mt-1" <"col-sm-3" l><"col-sm-6" <"pull-right" p>>>',
     	"language": {
     		"lengthMenu": "Hiển thị _MENU_ trên 1 trang",
     		"zeroRecords": "Không tìm thấy nội dung cần tìm",
     		"infoEmpty": "Chưa có nội dung",
     		"infoFiltered": "(filtered from _MAX_ total records)",
     		"sSearch":"Tìm kiếm",
     		"oPaginate": {
                    "sFirst": "Đầu", // This is the link to the first page
                    "sPrevious": "Trước", // This is the link to the previous page
                    "sNext": "Tiếp", // This is the link to the next page
                    "sLast": "Cuối" // This is the link to the last page
                }
            }
        });

     $('#table-breakpoint').basictable({
     	breakpoint: 768
     });

     $('#table-swap-axis').basictable({
     	swapAxis: true
     });

     $('#table-force-off').basictable({
     	forceResponsive: false
     });

     $('#table-no-resize').basictable({
     	noResize: true
     });

     $('#table-two-axis').basictable();

     $('#table-max-height').basictable({
     	tableWrapper: true
     });
 });
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
	.col-sm-6 {
		width: 73%;
	}
</style>
<!-- ============================================end database=================================== -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

</head> 
<body>
	<div class="page-container">
		<div class="left-content">
			<div class="mother-grid-inner">
				<?php include('includes/header.php');?>
				
				<div class="clearfix"> </div>	
			</div>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Trang chủ</a><i class="fa fa-angle-right"></i>Tỉnh </li>
			</ol>
			<div class="grid-form">
				
				<div class="grid-form1">
					<h3>Thêm tỉnh</h3>
					
					<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Tên tỉnh</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="ten_tinh" id="ten_tinh" placeholder="Tên tỉnh" required>
									</div>
								</div>
								

								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<button type="submit" name="submit102" class="btn-primary btn">Tạo</button>

										<button type="reset" class="btn-inverse btn">Làm mới</button>
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
	<script>CKEDITOR.replace('packagedetails');</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script> 

</body>
</html>
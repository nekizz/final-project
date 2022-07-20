 <?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{ 
	?>
	<!DOCTYPE HTML>
	<html>
	<head>
		<title>starvel</title>
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
<!-- //tables -->
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
			<ol class="breadcrumb" style="margin: 0px; padding: 0px;">
				<li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Tour</li>
			</ol>
			<div class="agile-grids">	
				<div class="agile-tables" style="padding: 0px;">
					<div class="w3l-table-info">
						<h2>Quản lý tour</h2>
						<table id="table">
							<thead>
								<tr>
									<th style="text-align: center;">STT</th>
									<th style="text-align: center;">Quốc gia</th>
									<th style="text-align: center;">Tỉnh</th>
									<th style="text-align: center;">Tên</th>
									<th style="text-align: center;">Điểm đi</th>
									<th style="text-align: center;">Điểm đến</th>
									<th style="text-align: center;">Giá</th>
									<th style="text-align: center;">Số ngày</th>
									<th style="text-align: center;">Giờ đi/ Ngày đi</th>
									<th style="text-align: center;">Ngày về</th>
									<th style="text-align: center;">Phương tiện</th>
									<th style="text-align: center;">Ngày tạo</th>
									<th style="text-align: center;">Hoạt động</th>
								</tr>
							</thead>
							<tbody>
								<?php $sql = "SELECT * from goidulich";
								$query = $dbh -> prepare($sql);
								//$query -> bindParam(':city', $city, PDO::PARAM_STR);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);
								$cnt=1;
								if($query->rowCount() > 0)
								{
									foreach($results as $result)
										{				?>		
											<tr>
												<td><?php echo htmlentities($cnt);?></td>
												<td><?php echo htmlentities($result->quocgia);?></td>
												<td><?php echo htmlentities($result->ten_tinh);?></td>
												<td><?php echo htmlentities($result->tengoi);?></td>
												<td><?php echo htmlentities($result->noixuatphat);?></td>
												<td><?php echo htmlentities($result->vitri);?></td>
												<td style="width: 150px;">Người lớn: <?php echo htmlentities($result->giagoi);?>
													<br>Trẻ em: <?php echo htmlentities($result->giatreem);?>
													<br>Trẻ nhỏ: <?php echo htmlentities($result->giatrenho);?>
													<br>Phòng: <?php echo htmlentities($result->giaphongdon);?>
												</td>
												<td><?php echo htmlentities($result->songay);?></td>
												<td><?php echo htmlentities($result->giodi);?>
													<br><?php echo date("d-m-Y", strtotime($result->ngayxuatphat)); ?>
												</td>
												<td><?php echo date("d-m-Y", strtotime($result->ngayve)); ?></td>
												<td><?php echo htmlentities($result->phuongtien);?></td>
												<td><?php echo date("d-m-Y", strtotime($result->ngaydang)); ?></td>
												<td>
													
													<a href="delete-tour.php?id=<?php echo htmlentities($result->id_goi);?>" onclick="return confirm('Bạn có chắc chắn xóa')"><button type="button" class="btn btn-primary btn-block" style="border-bottom: 2px solid;">Xóa</button></a>
													<a href="update-package.php?pid=<?php echo htmlentities($result->id_goi);?>"><button type="button" class="btn btn-primary btn-block" >Chỉnh sửa</button></a>
												</td>
											</tr>
											<?php $cnt=$cnt+1;} }?>
										</tbody>
									</table>
								</div>
							</table>
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

		<style type="text/css">
			.dataTables_wrapper{
				margin-top: -40px;
			}
			.agile-grids{
				margin-top: -30px;
			}
		</style>
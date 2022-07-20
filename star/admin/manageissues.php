<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{	
	header('location:index.php');
}
else{ 
	// code for cancel
	if(isset($_REQUEST['eid']))
	{
		$eid=intval($_GET['eid']);
		$status=1;

		$sql = "UPDATE gopy SET trangthai=:status WHERE  id_gopy=:eid";
		$query = $dbh->prepare($sql);
		$query -> bindParam(':status',$status, PDO::PARAM_STR);
		$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
		$query -> execute();

		$msg="Đã xem";
	}
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
<script language="javascript" type="text/javascript">
	var popUpWin=0;
	function popUpWindow(URLStr, left, top, width, height)
	{
		if(popUpWin)
		{
			if(!popUpWin.closed) popUpWin.close();
		}
		popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
	}

</script>
</head> 
<body>
	<div class="page-container">
		<div class="left-content">
			<div class="mother-grid-inner">
				<?php include('includes/header.php');?>
				<div class="clearfix"> </div>	
			</div>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Quản lý trợ giúp</li>
			</ol>
			<div class="agile-grids">	
				<?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<div class="agile-tables">
					<div class="w3l-table-info">
						<h2>Quản lý trợ giúp</h2>
						<table id="table">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tên</th>
									<th>sđt</th>
									<th>Email</th>
									<th>Trợ giúp </th>
									<th>Nội dung </th>
									<th>Ngày gửi </th>
									<th>Trả lời </th>
									<th>Ngày trả lời </th>
									<th>Hành động </th>
									
								</tr>
							</thead>
							<tbody>
								<?php $sql = "SELECT trogiup.id_trogiup as id,nguoidung.hoten as fname,nguoidung.sdt_nd as mnumber,nguoidung.id_email as email,trogiup.chude as issue,trogiup.noidung as noidung,trogiup.traloi as traloi,trogiup.ngaytraloi as ngaytraloi,trogiup.ngaygui as ngaygui from trogiup join nguoidung on nguoidung.id_email=trogiup.emailgui";
								$query = $dbh -> prepare($sql);
								$query->execute();
								$results=$query->fetchAll(PDO::FETCH_OBJ);

								if($query->rowCount() > 0)
								{
									foreach($results as $result)
										{				?>		
											<tr>
												<td width="120">#00<?php echo htmlentities($result->id);?></td>
												<td width="50"><?php echo htmlentities($result->fname);?></td>
												<td width="50"><?php echo htmlentities($result->mnumber);?></td>
												<td width="50"><?php echo htmlentities($result->email);?></td>
												<td width="200"><?php echo htmlentities($result->issue);?></a></td>
												<td width="400"><?php echo htmlentities($result->noidung);?></td>
												<td width="50"><?php echo date("d-m-Y", strtotime($result->ngaygui)); ?></td>
												<td width="400"><?php echo htmlentities($result->traloi);?></td>
												<td width="400"><?php echo htmlentities($result->ngaytraloi);?></td>

												
												<td><a href="javascript:void(0);" onClick="popUpWindow('updateissue.php?iid=<?php echo ($result->id);?>');">Xem </a>
												</td>
											</tr>
										<?php } }?>
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
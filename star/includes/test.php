<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
  header('location:index.php');
}
else{
  if(isset($_POST['submit']))
  {
    $tenks=$_POST['tenks'];
    $chitiet=$_POST['chitiet']; 
    $vitri=$_POST['vitri'];
    $nguoilon=$_POST['nguoilon'];   
    $treem=$_POST['treem'];
    $sophong=$_POST['sophong']; 
    $sogiuong=$_POST['sogiuong'];   
    $gia=$_POST['gia']; 
    $pimage=$_FILES["packageimage"]["name"];
    move_uploaded_file($_FILES["packageimage"]["tmp_name"],"pacakgeimages/".$_FILES["packageimage"]["name"]);
    $sql="INSERT INTO khachsan(tenks,chitiet,vitri,nguoilon,treem,sophong,sogiuong,gia,hinhanh) VALUES(:tenks,:chitiet,:vitri,:nguoilon,:treem,sophong,sogiuong,gia:pimage)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':tenks',$tenks,PDO::PARAM_STR);
    $query->bindParam(':chitiet',$chitiet,PDO::PARAM_STR);
    $query->bindParam(':vitri',$vitri,PDO::PARAM_STR);
    $query->bindParam(':nguoilon',$nguoilon,PDO::PARAM_STR);
    $query->bindParam(':treem',$treem,PDO::PARAM_STR);
    $query->bindParam(':sogiuong',$sogiuong,PDO::PARAM_STR);
    $query->bindParam(':gia',$gia,PDO::PARAM_STR);
    $query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
      $msg="Thêm khách sạn thành công";
    }
    else 
    {
      $error="Thêm thất bại. Hãy thử lại";
    }

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
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <script src="js/jquery-2.1.4.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
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
       <h3>Tạo tour</h3>
       <?php if($error){?><div class="errorWrap"><strong>Lỗi</strong>:<?php echo htmlentities($error); ?> </div><?php } 
       else if($msg){?><div class="succWrap"><strong>Hoàn thành</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
       <div class="tab-content">
        <div class="tab-pane active" id="horizontal-form">
          <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Tên khách sạn</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="tenks" id="tenks" placeholder="Tên khách sạn" required>
              </div>
            </div>
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Chi tiết</label>
              <div class="col-sm-8">
                <textarea type="text" class="form-control1" name="chitiet" id="chitiet" placeholder="Chi tiết" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Vị trí</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="vitri" id="vitri" placeholder=" Vị trí" required>
              </div>
            </div>

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Người lớn</label>
              <div class="col-sm-8">
                <input type="text" class="form-control1" name="nguoilon" id="nguoilon" placeholder=" Giá tour VND" required>
              </div>
            </div>

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Trẻ em</label>
              <div class="col-sm-8">
                <input class="form-control" rows="5" cols="50" name="treem" id="treem" placeholder="Chi tiết" required>
              </div>
            </div>              

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Số phòng</label>
              <div class="col-sm-8">
                <input class="form-control" rows="5" cols="50" name="sophong" id="sophong" placeholder="Chi tiết" required>
              </div>
            </div>          

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Số giường</label>
              <div class="col-sm-8">
                <input class="form-control" rows="5" cols="50" name="sogiuong" id="sogiuong" placeholder="Chi tiết" required>
              </div>
            </div>      

            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Giá</label>
              <div class="col-sm-8">
                <input class="form-control" rows="5" cols="50" name="gia" id="gia" placeholder="Chi tiết" required>
              </div>
            </div>                                                          
            <div class="form-group">
              <label for="focusedinput" class="col-sm-2 control-label">Hình ảnh</label>
              <div class="col-sm-8">
                <input type="file" name="packageimage" id="packageimage" required>
              </div>
            </div>  

            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" name="submit" class="btn-primary btn">Tạo</button>

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
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- /Bootstrap Core JavaScript -->     

</body>
</html>
<?php } ?>
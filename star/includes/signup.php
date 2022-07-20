<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  nguoidung(hoten,sdt_nd,id_email,matkhau) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['mng']="Đăng ký thành công. bạn có thể đăng nhập";
header('location:thankyou.php');
}
else 
{
$_SESSION['mng']="Hoàn thành.";
header('location:thankyou.php');
}
}
?>

<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul  style="list-style: none; margin-left: -18px;">
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>
											<div class="login-right">
												<form name="signup" method="post">
													<h3>Tạo tài khoản </h3>
					

				<input type="text" value="" placeholder="Họ tên" name="fname" autocomplete="off" required="">
				<input type="text" value="" placeholder="Số điện thoại" maxlength="10" name="mobilenumber" autocomplete="off" required="">
		<input type="text" value="" placeholder="Email" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
		 <span id="user-availability-status" style="font-size:12px;"></span> 
	<input type="password" value="" placeholder="Mật khẩu" name="password" required="">	
													<input type="submit" name="submit" id="submit" value="Đăng ký">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p  style="margin-top: 15px;
    margin-bottom: -10px;">Bằng cách đăng ký, bạn đồng ý với chúng tôi <a href="page.php?type=terms">điều khoản </a> và <a href="page.php?type=privacy">bảo mật</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
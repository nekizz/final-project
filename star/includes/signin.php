<?php
session_start();
if(isset($_POST['signin']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT id_email,matkhau FROM nguoidung WHERE id_email=:email and matkhau=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location = ''; </script>";
} else{
	
	echo "<script>alert('Chi tiết không hợp lệ');</script>";

}

}

?>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header" >
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa" style="padding: 15px;">
							<div class="login-grids">
								<div class="login">
										<div class="login-left">
												<ul  style="list-style: none; margin-left: -18px;">
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>
									<div class="login-right">
										<form method="post">
											<h3>Đăng nhập </h3>
	<input type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" id="password" placeholder="Password" value="" required="" style="
    margin-bottom: 10px;
"	>	
											<h4><a href="forgot-password.php" style="    font-size: 15px;">Quên mật khẩu</a></h4>
											
											<input type="submit" name="signin" value="Đăng nhập">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p style="margin-top: 15px;
    margin-bottom: -10px;">Khi đăng nhập là bạn đã đồng ý với<a href="page.php?type=terms"> điều khoản</a> và <a href="page.php?type=privacy">chính sách bảo mật</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<style type="text/css">
				.login-right h3 {
    color: #4CB320;
    font-weight: normal;
    font-size: 17px;
}
.login-left {
    float: left;
    width: 42%;
}
.login-right {
    float: right;
    width: 51%;
}
.login-right input[type="text"], .login-right input[type="password"] {
    width: 100%;
    padding: 10px;
    font-weight: normal;
    background: none;
    border: 1px solid #E6E4E4;
    color: #D2D1D1;
    outline: none;
    font-size: 14px;
    margin-top: 20px;
}
h1, h2, h3, h4, h5, h6 {
    margin: 0;
    font-family: 'Roboto Condensed', sans-serif;
}
.login-right input[type="submit"] {
    background: #4CB320;
    color: #fff;
    font-size: 20px;
    border: none;
    width: 100%;
    outline: none;
    -webkit-appearance: none;
    padding: 10px 15px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    margin-top: 20px;
} 
.login-left ul li a.fb {
    background: #3b5998;
    margin-bottom: 10px;  width: 220px;
    margin-left: -23px; margin-top: 45px;
}
.login-left ul li a {
    padding: 9px 12px;
    display: block;
    text-align: left;
    color: #fff;
    text-decoration: none;
}
.login-left ul li a.goog {
    background: #dc4e41;
    width: 220px;
    margin-left: -23px;
}
.login-left ul li a:hover {
    opacity: .7;
}
.modal-header {
    width: 50px;
    float: right;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
}
			</style>
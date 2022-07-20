<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	$issue=$_POST['issue'];
	$description=$_POST['description'];
	$email=$_SESSION['login'];
	$sql="INSERT INTO  trogiup(emailgui,chude,noidung) VALUES(:email,:issue,:description)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':issue',$issue,PDO::PARAM_STR);
	$query->bindParam(':description',$description,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();
	if($lastInsertId) 
	{
		$_SESSION['msg']="Lỗi. Vui lòng thử lại";
		echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
	}
	else 
	{
		$_SESSION['msg']="Thông tin được gửi thành công";
		echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
	}
}
?>	

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="height: 300px;">
			<div class="modal-header" style="border-bottom: 1px solid #d6aa2e;">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<section>
				<form name="help" method="post" style="height: 245px;">
					<div class="modal-body modal-spa">
						<div class="writ">
							<h4 style="
							margin-top: -48px;
							text-align: center;
							font-size: 26px;
							color:#25a725;;
							">Trợ giúp</h4>
							<ul style="
							margin: 60px 30px;
							font-size: 19px;
							list-style: none;
							">
							
							<li class="na-me">
								<select id="country" name="issue" class="frm-field required sect" required="" style="border: none; width: 50%; border-bottom: 2px solid #50e693;">
									<option value="">chọn trợ giúp</option> 		
									<option value="Đặt tour">Trợ giúp đặt tour</option>
									<option value="Hủy tour"> Trợ giúp hủy tour</option>
									<option value="Hoàn tiền">Trợ giúp hoàn tiền</option>
									<option value="Khác">Trợ giúp khác</option>														
								</select>
							</li>
							
							<li class="descrip">
								<input class="special" type="text" placeholder="Nội dung trợ giúp"  name="description" required="" style="
								border: none;
								border-bottom: 2px solid #50e693;
								width: 100%;
								margin-top: 60px;
								">
							</li>
							<div class="clearfix"></div>
						</ul>
						<div class="sub-bn">
							<form>
								<button type="submit" name="submit" class="subbtn" style="
								float: right;
								margin-top: -32px;
								margin-right: 20px;
								font-size: 18px;
								width: 65px;
								background: #25a725;
								color: white;
								">Gửi</button>
							</form>
						</div>
					</div>
				</div>
			</form>
		</section>
	</div>
</div>
</div>
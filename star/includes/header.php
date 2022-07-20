

<!--============= TOP-BAR ===========-->

<?php if($_SESSION['login'])
{?>
    <div id="top-bar" class="tb-text-white">
        <div class="container" style="color: white;">
            <div class="row">          
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><a href="index.php" style="color: white;"><i class="fa fa-home"></i></a></span></li>
                            <li><a href="profile.php" style="color: white;">Thông tin cá nhân</a></li>
                            <li><a href="password.php" style="color: white;">Thay đổi mật khẩu</a></li>
                            <li><a href="booking.php" style="color: white;">Tour đã đặt</a></li>
                            <li><a href="issuetickets.php" style="color: white;">Lịch sử trợ giúp</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                         <li class="tol">Tài khoản :</li>                
                         <li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
                         <a style="color: white;">|</a>
                         <li class="sigi"><a href="logout.php" > Đăng xuất</a></li>
                         <li>
                            <form>
                                <ul class="list-inline">
                                    <li>
                                        <div class="form-group language">
                                            <span><i class="fa fa-angle-down"></i></span>
                                            <select class="form-control">
                                                <option value="">VN</option>
                                                <option value="">EN</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>          
        </div>
    </div>
</div>
<?php } else {?>

    <div id="top-bar" class="tb-text-white">
        <div class="container" style="color: white;">
            <div class="row">          
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="info">
                        <ul class="list-unstyled list-inline">
                            <li><span><i class="fa fa-map-marker"></i></span>Hà Nội </li>
                            <li><span><i class="fa fa-phone"></i></span>0964120765</li>
                            <li><a  style="font-size: 15px; margin-left: 10px; color: white;" href="enquiry.php"><i class="glyphicon glyphicon-envelope"></i>  Góp ý</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="links">
                        <ul class="list-unstyled list-inline">
                            <li  class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" ><span><i class="fa fa-lock"></i></span>Đăng nhập</a></li>
                            <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" ><span><i class="fa fa-plus"></i></span>Đăng ký</a></li>
                            <li>
                                <form>
                                    <ul class="list-inline">
                                        <li>
                                            <div class="form-group language">
                                                <span><i class="fa fa-angle-down"></i></span>
                                                <select class="form-control">
                                                    <option value="">VN</option>
                                                    <option value="">EN</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>          
            </div>
        </div>
    </div>

<?php }?>

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
          </button>
          <div class="header-search hidden-lg">
            <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
        </div>
        <a href="index.php" class="navbar-brand"><span><i class="fa fa-plane"></i>VIET</span>TOURISM</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar1">
        <ul class="nav navbar-nav navbar-right navbar-search-link">
            <li ><a href="index.php" class="dropdown-toggle" >Trang chủ</a>          
            </li>

            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Tour<span><i class="fa fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a href="tour-trongnuoc.php">Du lịch trong nước</a></li>
                    <li><a href="tour-nuocngoai.php">Du lịch nước ngoài</a></li>
                </ul>           
            </li>
            <li class="dropdown"><a href="hotel-list.php" class="dropdown-toggle">Khách sạn<span></i></span></a>           
            </li>

            <li class="dropdown"><a href="tour-khuyenmai.php" class="dropdown-toggle">Khuyến mãi<span></i></span></a>           
            </li>

            <li class="dropdown"><a href="blog-list.php" class="dropdown-toggle">Blog<span></i></span></a>           
            </li>

            <li><a href="#" data-toggle="modal" data-target="#myModal3"> Trợ giúp</a>  </li>         
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Người dùng<span><i class="fa fa-angle-down"></i></span></a>
            <ul class="dropdown-menu">
                <li><a href="issuetickets.php">Đã trợ giúp</a></li>
                <li><a href="profile.php">Thông tin</a></li>
                <li><a href="booking.php">Hóa đơn</a></li>
                <li><a href="password.php">Mật khẩu</a></li>
                <li><a href="cards.php">Tài khoản ví</a></li>
            </ul>           
        </li>
        <li><a href="javascript:void(2)" data-toggle="modal" class="search-button"><span><i class="fa fa-search"></i></span></a></li>
    </ul>
</div>
</div>
</nav>    




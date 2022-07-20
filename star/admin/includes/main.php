<?php include('includes/thongke.php') ?>

<div class="main_right" style="margin-top: -20px; margin-left: -20px; float: left;  ">
	<div class="main_right_header"></div>
	<div class="main_right_content">
		<nav class="menu1" style="margin-top: 230px;     margin-left: 515px;">

			<input type="checkbox" href="#" class="menu1-open1" name="menu1-open1" id="menu1-open1" />
			<label class="menu1-open1-button1" for="menu1-open1">
				<span class="lines1 line-1"></span>
				<span class="lines1 line-2"></span>
				<span class="lines1 line-3"></span>
			</label>
			<a href="manage-bookings.php" class="menu1-item1 blue" style="font-size: 20px;">
				<?php echo htmlentities($cnt1);?> Hóa đơn </a>
				<a href="manage-hotel.php" class="menu1-item1 green" style="font-size: 20px;">  
				<?php echo htmlentities($ks);?> Khách sạn  </a>
					<a href="manage-enquires.php" class="menu1-item1 red" style="font-size: 20px;"><?php echo htmlentities($cnt2);?> Góp ý</a>
               <a href="manage-packages.php" class="menu1-item1 orange" style="font-size: 20px;"><?php echo htmlentities($goi);?> Tour</a>
					<a href="manageissues.php" class="menu1-item1 purple" style="font-size: 20px;"><?php echo htmlentities($cnt5);?> Trợ giúp </a>
					<a href="manage-blog.php" class="menu1-item1 lightblue" style="font-size: 20px;"> 
						<?php echo htmlentities($blog);?> Blog </a>
					</nav> 
				</div>
				<div class="main_right_bottom"></div>
			</div>
			<style type="text/css">   
.menu1-item1,
.menu1-open1-button1 {
   background:#ffd0ee;
   border-radius: 100%;
   width: 170px;
   height: 170px;
   position: absolute;
   color: #FFFFFF;
   text-align: center;
   line-height: 170px;
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
   -webkit-transition: -webkit-transform ease-out 200ms;
   transition: -webkit-transform ease-out 200ms;
   transition: transform ease-out 200ms;
   transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
}

.menu1-open1 {
   display: none;
}

.lines1 {
   width: 25px;
   height: 3px;
   background: #596778;
   display: block;
   position: absolute;
   top: 50%;
   left: 50%;
   margin-left: -12.5px;
   margin-top: -1.5px;
   -webkit-transition: -webkit-transform 200ms;
   transition: -webkit-transform 500ms;
   transition: transform 700ms;
   transition: transform 2900ms, -webkit-transform 1200ms;
}

.line-1 {
   -webkit-transform: translate3d(0, -8px, 0);
   transform: translate3d(0, -8px, 0);
}

.line-2 {
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
}

.line-3 {
   -webkit-transform: translate3d(0, 8px, 0);
   transform: translate3d(0, 8px, 0);
}

.menu1 {
   margin: auto;
   position: absolute;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   width: 170px;
   height: 170px;
   text-align: center;
   box-sizing: border-box;
   font-size: 50px;
}
.menu1-item1:hover {
   background: #EEEEEE;
   color: #3290B1;
}

.menu1-item1:nth-child(3) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(4) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(5) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(6) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(7) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(8) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-item1:nth-child(9) {
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu1-open1-button1 {
   z-index: 2;
   -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
   transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
   -webkit-transition-duration: 400ms;
   transition-duration: 400ms;
   -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
   transform: scale(1.1, 1.1) translate3d(0, 0, 0);
   cursor: pointer;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
}

.menu1-open1-button1:hover {
   -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
   transform: scale(1.2, 1.2) translate3d(0, 0, 0);
}

.menu1-open1:checked + .menu1-open1-button1 {
   -webkit-transition-timing-function: linear;
   transition-timing-function: linear;
   -webkit-transition-duration: 200ms;
   transition-duration: 200ms;
   -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
   transform: scale(0.8, 0.8) translate3d(0, 0, 0);
}

.menu1-open1:checked ~ .menu1-item1 {
   -webkit-transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
   transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(3) {
   transition-duration: 180ms;
   -webkit-transition-duration: 180ms;
   -webkit-transform: translate3d(0.08361px, -209.99997px, 0);
   transform: translate3d(0.08361px, -209.99997px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(4) {
   transition-duration: 280ms;
   -webkit-transition-duration: 280ms;
   -webkit-transform: translate3d(190.9466px, -122.47586px, 0);
   transform: translate3d(190.9466px, -122.47586px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(5) {
   transition-duration: 380ms;
   -webkit-transition-duration: 380ms;
   -webkit-transform: translate3d(190.9466px, 98.47586px, 0);
   transform: translate3d(190.9466px, 98.47586px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(6) {
   transition-duration: 480ms;
   -webkit-transition-duration: 480ms;
   -webkit-transform: translate3d(0.08361px, 209.99997px, 0);
   transform: translate3d(0.08361px, 209.99997px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(7) {
   transition-duration: 580ms;
   -webkit-transition-duration: 580ms;
   -webkit-transform: translate3d(-190.86291px, 122.62064px, 0);
   transform: translate3d(-190.86291px, 122.62064px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(8) {
   transition-duration: 680ms;
   -webkit-transition-duration: 680ms;
   -webkit-transform: translate3d(-191.03006px, -98.33095px, 0);
   transform: translate3d(-191.03006px, -98.33095px, 0);
}

.menu1-open1:checked ~ .menu1-item1:nth-child(9) {
   transition-duration: 780ms;
   -webkit-transition-duration: 780ms;
   -webkit-transform: translate3d(-250.25084px, -4.9997px, 0);
   transform: translate3d(-250.25084px, -04.9997px, 0);
}
.menu1-open1:checked ~ .menu1-item1:nth-child(10) {
   transition-duration: 780ms;
   -webkit-transition-duration: 780ms;
   -webkit-transform: translate3d(-10.25084px, -294.9997px, 0);
   transform: translate3d(-10.25084px, -294.9997px, 0);
}

.blue {
   background-color: #669AE1;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.blue:hover {
   color: #669AE1;
   text-shadow: none;
}

.green {
   background-color: #70CC72;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.green:hover {
   color: #70CC72;
   text-shadow: none;
}

.red {
   background-color: #FE4365;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.red:hover {
   color: #FE4365;
   text-shadow: none;
}

.purple {
   background-color: #C49CDE;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.purple:hover {
   color: #C49CDE;
   text-shadow: none;
}

.orange {
   background-color: #FC913A;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.orange:hover {
   color: #FC913A;
   text-shadow: none;
}

.lightblue {
   background-color: #62C2E4;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.lightblue:hover {
   color: #62C2E4;
   text-shadow: none;
}

.credit {
   margin: 24px 20px 120px 0;
   text-align: right;
   color: #EEEEEE;
}

.credit a {
   padding: 8px 0;
   color: #C49CDE;
   text-decoration: none;
   transition: all 0.3s ease 0s;
}

.credit a:hover {
   text-decoration: underline;
}


			</style>
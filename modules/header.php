<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Shop Giày Dr.Mertern79</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>0968731442 - 034979097</div>
									</li>
									<li>
										<i class="fa fa-facebook" aria-hidden="true"></i>
										<div>GIAY79 </div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									
									<?php 
										if ($user == '') {
											echo '<div class="login_button"><a href="dangnhap.php">Đăng nhập</a></div>';
										}  else {
											echo '<div class="login_button"><a href="dangnhap.php">'.$user.'</a></div>';
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_text">Dr<span>Mertern79</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="index.php">TRANG CHỦ</a></li>
									<li><a href="tintuc.php">TIN TỨC</a></li>
									<li><a href="dangky.php">ĐĂNG KÍ</a></li>
									<li><a href="dangnhap.php">ĐĂNG NHẬP</a></li>
									<li><a href="index.php?quanly=dathang">GIỎ HÀNG NÈ</a></li>
									<li><a href="contact.php">LIÊN HỆ</a></li>
								</ul>
								<script type="text/javascript">
								 $(function(){
									$('.main_nav li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
									$('.main_nav li a').click(function(){
										$(this).parent().addClass('active').siblings().removeClass('active')	
									})
								});
								</script>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
								
								<!-- Hamburger -->

								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

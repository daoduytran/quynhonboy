<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng ký</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php  
		include ('modules/myclass/myclass.php');
			$a = new democlass;
			include('modules/header.php');
	?>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Trang chủ</a></li>
				<li class="menu_mm"><a href="#">Sản phẩm</a></li>
				<li class="menu_mm"><a href="#">Đăng ký</a></li>
				<li class="menu_mm"><a href="#">Đăng nhập</a></li>
				<li class="menu_mm"><a href="#">Giỏ hàng</a></li>
				<li class="menu_mm"><a href="contact.php">Liên hệ</a></li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Trang chủ</a></li>
								<li>Liên hệ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Đăng ký</div>
							<form action="dangky.php" class="comment_form" method="post" enctype="multipart/form-data">
								<div>
									<div class="form_title">Tên người dùng</div>
									<input type="text" class="comment_input" name="user_name" required="required">
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" name="user_email" required="required">
								</div>
								<div>
									<div class="form_title">Mật khẩu</div>
									<input type="password" class="comment_input" name="user_pass" required="required">
								</div>
								<div>
									<div class="form_title">Địa chỉ</div>
									<input type="text" class="comment_input" name="user_address" required="required">
								</div>
								<div>
									<div class="form_title">Số điện thoại</div>
									<input type="text" class="comment_input" name="user_dienthoai" required="required">
								</div>
								<div>
									<button type="submit" class="comment_button trans_200" name="dangky">Đăng ký</button>
									
								</div>
								
							</form>
							<div></div>
							<?php if(isset($_POST['dangky'])){
										$a->dangkymoi_new();
									} ?>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Thành Viên:</div>
							<div class="contact_info_text">
								<ul class="location_list">
									<li>^^.</li>
									<li>Rất thuận lợi khi mua hàng.</li>
									<li>Hihi</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Địa chỉ cửa hàng:</div>
								<ul class="location_list">
									<li>346 Nguyễn Thái Sơn, F.4, Q.Gò Vấp, TP.Hồ Chí Minh </li>
									<li>096874711</li>
									<li>E-mail: conga@gmail.com</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->
	<!-- Footer -->
	<?php include('modules/footer.php'); ?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="unicat/plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>
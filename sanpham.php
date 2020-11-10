<!DOCTYPE html>
<html lang="en">
<head>
<title>Website chuyên các loại Sneaker</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php  
		
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
				<li class="menu_mm"><a href="tintuc.php">Tin tức</a></li>
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
								<li>Sản phẩm</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Course -->

	<div class="course">
		<div class="container">
			<div class="row">
				<!-- Course Sidebar -->
				
				<!-- Course -->
				<div class="col-lg-9">
					
					<?php 
					$id = $_GET[id];
					include ('modules/myclass/myclass.php');
					$a = new democlass;
					$a->chitietsp_query($id);
					?>
				</div>

				<div class="col-lg-3">
					<div class="sidebar">

						<!-- Feature -->
						<div class="sidebar_section">
							<div class="sb_baohanh">
								<h3><div class="sb_title">Chế độ bảo hành</div></h3>
							<div class="sidebar_feature">
								<div class="course_price">Gói mặc định</div>
								<div class="sb_info  align-items-center justify-content-start">
									<p><i class="fa fa-clock-o" ></i>&nbsp;1 đổi 1, 15 ngày</p>
									<p><i class="fa fa-file-text-o" ></i>&nbsp;Bảo hành 6 tháng</p>
									<p><i class="fa fa-question-circle-o" ></i>&nbsp;Xử lý trong 30 ngày</p>	
								</div>
								<p>Sửa bung đế giày, hở keo, thay dây, vệ sinh, thay miếng lót...</p>
							</div>
							</div>
							
							
						</div>

						<!-- Feature -->
						

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Sản phẩm tương tự</div>
							<div class="sidebar_latest">

								<!-- San pham tuong tu -->
								
								<?php 
									$a->spbanchay($id);
								?>
								
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/course.js"></script>
</body>
</html>
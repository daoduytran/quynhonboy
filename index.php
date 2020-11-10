<?php 
	session_start();
	if ($_SESSION['dangnhap'] == '') {
		$user = '';
	}  else {
		$user = $_SESSION['dangnhap'];
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dr.Mertern79 </title>
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
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

</head>
<body>

<div class="super_container">

	<?php
			//include('admincp/modules/config.php');
			include ('modules/myclass/myclass.php');
			$a = new democlass;
			include('modules/header.php');
	?>
	<div class="home">
			
	</div>
	<?php
			include('modules/menu.php');
			include('modules/content.php');
			include('modules/footer.php');
		?>

	
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>
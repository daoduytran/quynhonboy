<?php 
session_start();
if ($_SESSION['dangnhap'] == '') {
	header('location: login.php');
} else if ($_SESSION['dangnhap'] == 'admin'){
	include "../modules/admin.php";
	$a = new admin;
} else if ($_SESSION['dangnhap'] == 'mod'){
	include "../modules/moderator.php";
	$a = new moderator;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Chào Mừng Đến Trang QTV AdminLTE </title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Chào Mừng Đến Trang QTV AdminLTE</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['dangnhap']; ?> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i>Danh Mục</a>
                            </li>
                           
                            <li>
                                <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
									<li>
                                        <a href="tables.php?quanly=user&ac=lietke">Thành Viên</a>
                                    </li>
                                    <li>
										
                                        <a href="tables.php?quanly=sanpham&ac=lietke">Các sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="tables.php?quanly=loaisp&ac=lietke">Các loại sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="tables.php?quanly=hieusp&ac=lietke">Mẫu sản phẩm</a>
                                    </li>
									<li>
                                        <a href="tables.php?quanly=tintuc&ac=lietke">Tin tức</a>
                                    </li>
                                    <li>
                                        <a href="tables.php?quanly=hoadon&ac=lietke">Đơn Hàng Đã Đặt</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tables</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                
                                        
                                            <?php 
                                                
												
											
												if (isset($_GET['ac'])&&isset($_GET['quanly'])) {
													$action = $_GET['ac'];
													$quanly = $_GET['quanly'];
												} else {
													$quanly = '';
												}
												if ($quanly == 'sanpham' && $action == 'lietke'){
													include("../modules/quanlysanpham/lietke.php");
												}elseif($quanly == 'loaisp' && $action == 'lietke'){
													include("../modules/quanlyloaisp/lietke.php");
												}elseif($quanly == 'hieusp' && $action == 'lietke'){
													include("../modules/quanlyhieusp/lietke.php");
												}elseif($quanly == 'hoadon' && $action == 'lietke'){
													include("../modules/quanlyhoadon/lietke.php");
												}elseif($quanly == 'gallery' && $action == 'lietke'){
													include("../modules/gallery/lietke.php");
												}elseif($quanly == 'tintuc' && $action == 'lietke'){
													include("../modules/quanlytintuc/lietke.php");
												}elseif($quanly == 'hoadon' && $action == 'chitiet'){
													include("../modules/quanlyhoadon/chitiethd.php");
												}elseif($quanly == 'user' && $action == 'chitiet'){
													include("../modules/quanlyuser/chitietuser.php");
												}elseif($quanly == 'user' && $action == 'lietke'){
													include("../modules/quanlyuser/lietke.php");
												}
										
												else{
													include("../modules/quanlysanpham/lietke.php");
												}
											?>
           
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>

<div class="courses">
		<div class="container">
			<div class="row">
				
				<?php
					include('modules/left/list.php');
				?>
				
				<!-- Courses Main Content -->
				<?php
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$tam= $_GET['quanly'];
				}else{
					$tam ='';
				}if($tam == 'chitietsp'){
					include('modules/right/chitietsp.php');
				}elseif($tam == 'loaisp' || $tam == 'hieusp'){
					include('modules/right/spmoi.php');
				}elseif($tam == 'dathang'){
					include('modules/right/dathang.php');
				}elseif($tam == 'dangkymoi'){
					include('modules/right/dangkymoi.php');
				}elseif($tam == 'dangnhap'){
					include('modules/right/dangnhap.php');
				}elseif($tam == 'xulygiohang'){
					include('modules/right/xulygiohang.php');
				}elseif($tam == 'camon'){
					include('modules/right/camon.php');
				
				
				}else{
					include('modules/right/spmoi.php');
				}
				?>

				
				
			</div>
		</div>
	</div>
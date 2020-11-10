<!--
<?php
//	$a->dathang();
  ?>
  
 

            <ul	class="control">
              <p><a href="">Tiếp tục mua hàng</a></p>
                <p><a href="?quanly=dangkymoi">Đăng ký mới</a></p>
                <p><a href="?quanly=dangnhap">Bạn đã có tài khoản</a></p>
                <?php
//				if(isset($_SESSION['dangnhap'])&&isset($_SESSION['product'])){
				?>
                 <p style="float:right; background:#FF0;text-decoration:none;"><a href="thanhtoan.php" style="color:#000;margin:5px;">Thanh toán</a></p>
				<?php
//				}
				?>
        	</ul>
    
        </div>
-->


	<div class="col-lg-9">
					<div class="courses_search_container">
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<div class="container-fluid">
							<div class="row">
								<?php 
									$a->dathang_new();
								?>
	</div>
	
	




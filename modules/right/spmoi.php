<?php 
$id = $_GET[id];
if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
	$tam= $_GET['quanly'];
}else{
	$tam ='';
}
if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
	}else{
		$trang='';
	}
	if($trang =='' || $trang =='1'){
		$trang1=0;
	}else{
		$trang1=($trang*5)-5;
	}
?>
<div class="col-lg-9">
					<div class="courses_search_container">
						<form action="index.php" id="courses_search_form" method="post" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<div class="container-fluid">
							<div class="row">
							<div class="col-sm-4">
							<input type="search" class="courses_search_input" placeholder="Tìm kiếm" name="txt_tim">
							</div>
							<div class="col-sm-4">
							<select id="courses_search_select" name="slc_tim" class="courses_search_select courses_search_input">
								<option>Danh mục</option>
								<option value="1">Hàng mới</option>
								<option value="2">Đang khuyến mãi</option>
								<option value="3">Đánh giá tốt</option>
							</select>
							</div>
							<div class="col-sm-4">
							<button action="submit" name="timkiem" class="courses_search_button ml-auto">Tìm kiếm</button>
							</div>
							</div>
							</div>
						</form>
						<ul class="tags_list">
									<?php 
										$a->hieusp_tag();
										
									?>
								</ul>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- San pham -->
							<?php
							if (isset($_POST['timkiem'])) {
											$txt_tim = $_REQUEST['txt_tim'];
											$slc_tim = $_REQUEST['slc_tim'];
								if (!is_null($txt_tim)) {
									$a->spmoi($trang1,$txt_tim,'timkiem');
								} elseif (!is_null($slc_tim)) {
									$a->spmoi($trang1,$slc_tim,'timkiem2');
								}
								
							} else {
							$a->spmoi($trang1,$id,$tam);
							}
					  		?>
						</div>
						<div class="row pagination_row">
							<div class="col">
								<div class="pagination_container d-flex flex-row align-items-center justify-content-start">
									<ul class="pagination_list">
										<?php 
										$a->so_trang($trang,$id,$tam);
										?>
										<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
									<div class="courses_show_container ml-auto clearfix">
										<div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
										<div class="courses_show_content">
											<span>Show: </span>
											<select id="courses_show_select" class="courses_show_select">
												<option>06</option>
												<option>12</option>
												<option>24</option>
												<option>36</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            
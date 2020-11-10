<?php

class democlass {
	function connect () {
		$tenmaychu='localhost';
		$tentaikhoan='root';
		$pass='';
		$csdl='daoduytran';
		$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass); 
		if (!$conn) {
			die('error'.mysql_error());
		} else {
			mysql_query("SET NAMES 'UTF8' ");
			mysql_select_db($csdl);
			return $conn;
		}
	}	
	
	function loaihieusp_left ($orderby) {
		$link = $this->connect();
		if ($orderby == 'loaisp') {
			$sql="select * from loaisp order by idloaisp asc";
			$row=mysql_query($sql,$link );
			while($dong=mysql_fetch_array($row)){
				echo '
					<li><a href="index.php?quanly=loaisp&id='.$dong['idloaisp'].'">'.$dong['tenloaisp'].'</a></li>
                ';
			}
		} else if ($orderby == 'hieusp') {
			$sql="select * from hieusp order by idhieusp asc";
			$row=mysql_query($sql,$link );
			while($dong=mysql_fetch_array($row)){
				echo '
                	<li><a href="index.php?quanly=hieusp&id='. $dong['idhieusp'] .'">'. $dong['tenhieusp'] .'</a></li>
                  ';
			}
		} 	
		}
	function count_cate($orderby) {
		$link = $this->connect();
		$sql = '';
		if ($orderby == 'loaisp') {
			$sql="select * from loaisp";
		} else if ($orderby == 'hieusp') {
			$sql="select * from hieusp";
		}
		$row=mysql_query($sql,$link );
		mysql_close();
		echo mysql_num_rows($row);
	}
	function hieusp_tag () {
		$link = $this->connect();
		 
		$sql="select * from hieusp order by idhieusp asc limit 10";
		$row=mysql_query($sql,$link );
		mysql_close();
		while($dong=mysql_fetch_array($row)){
			echo '
				<li><a href="index.php?quanly=hieusp&id='. $dong['idhieusp'] .'">'. $dong['tenhieusp'] .'</a></li>
			  ';
		}
			
		}
	function spbanchay ($id) {
		$link = $this->connect();
		
		if (is_null($id)) {
			$sql_banchay=mysql_query("select * from sanpham order by idsanpham desc limit 8",$link);	
			while($dong_banchay=mysql_fetch_array($sql_banchay)){

			echo '<div class="latest d-flex flex-row align-items-start justify-content-start">
									<a href="course.php?quanly=chitietsp&idloaisp='. $dong_banchay['loaisp'] .'&id='. $dong_banchay['idsanpham'] .'">
									<div class="latest_image"><div><img src="newadmincp/modules/quanlysanpham/uploads/'. $dong_banchay['hinhanh'] .'" alt=""></div></div>
										</a>
									<div class="latest_content">
										<div class="latest_title"><a href="course.php">'. $dong_banchay['tensp'] .'</a></div>
										<div class="latest_price">'. number_format($dong_banchay['giadexuat']).' '.'VNĐ</div>
									</div>
								</div>';
			}
		} else {
			$sql_banchay=mysql_query("select * from sanpham where nhasx = (select distinct nhasx from sanpham where idsanpham = $id) order by idsanpham desc limit 8",$link);
			while($dong_banchay=mysql_fetch_array($sql_banchay)){

			echo '<div class="latest d-flex flex-row align-items-start justify-content-start">
									<a href="course.php?quanly=chitietsp&idloaisp='. $dong_banchay['loaisp'] .'&id='. $dong_banchay['idsanpham'] .'">
									<div class="latest_image"><div><img src="newadmincp/modules/quanlysanpham/uploads/'. $dong_banchay['hinhanh'] .'" alt=""></div></div>
										</a>
									<div class="latest_content">
										<div class="latest_title"><a href="course.php">'. $dong_banchay['tensp'] .'</a></div>
										<div class="latest_price">'. number_format($dong_banchay['giadexuat']).' '.'VNĐ</div>
									</div>
								</div>';
		}
		}
		
	}
	
	function tintucsp () {
		$link = $this->connect();
		$sql=mysql_query("select * from tintuc");
		while($dong_tin=mysql_fetch_array($sql)){
				echo '
                	<li><a href="#">
                    	<p style="float:left;"><img src="admincp/modules/quanlytintuc/uploads/'. $dong_tin['hinhanh'] .'" width="40" height="30" /></p>
                        <p style="overflow:hidden;padding-left:5px;">'. $dong_tin['tentintuc'] .'</p>
                    </a></li>
					';
		}
	}
	
	function chitietsp () {
		$link = $this->connect();
		$sql="select * from sanpham where idsanpham='$_GET[id]'";
		$num=mysql_query($sql,$link);
		$dong=mysql_fetch_array($num);
	}
	
	function spmoi($trang,$id,$quanly) {
		$link = $this->connect();
		if (is_null($id)) {
			$sql_moinhat="select * from sanpham where tinhtrang = 1 order by idsanpham desc limit $trang,12";
		} elseif ($quanly == 'loaisp' && !is_null($id)) {
			$sql_moinhat="select * from sanpham where loaisp = $id and tinhtrang = 1 order by idsanpham desc limit $trang,6";
			
		} elseif ($quanly == 'hieusp' && !is_null($id)) {
			$sql_moinhat="select * from sanpham where nhasx = $id and tinhtrang = 1 order by idsanpham desc limit $trang,6";
			
		} elseif ($quanly == 'timkiem' && !is_null($id)) {
			$sql_moinhat="select * from sanpham where tensp like '%$id%' and tinhtrang = 1 order by idsanpham desc limit $trang,6";
		} elseif ($quanly == 'timkiem2') {
			$sql_moinhat="select * from sanpham where ((giagiam/giadexuat)*100)>20 and ((giagiam/giadexuat)*100)<100 and tinhtrang = 1 order by idsanpham desc limit $trang,30";
		}
			
		
		$row_moinhat=mysql_query($sql_moinhat,$link);
		
					while($dong_moinhat=mysql_fetch_array($row_moinhat)){
					echo '<div class="col-md-4 col-sm-6 course_col">
								
								<div class="course">
									<a href="sanpham.php?quanly=chitietsp&idloaisp='. $dong_moinhat['loaisp'] .'&id='. $dong_moinhat['idsanpham'] .'"><div class="course_image"><img src="newadmincp/modules/quanlysanpham/uploads/'. $dong_moinhat['hinhanh'] .'" alt=""></div></a>
									<div class="course_body">
										<h3 class="course_title"><a href="sanpham.php?quanly=chitietsp&idloaisp='. $dong_moinhat['loaisp'] .'&id='. $dong_moinhat['idsanpham'] .'">'. $dong_moinhat['tensp'] .'</a></h3>
										
										<div class="course_text">
											<p>'. $dong_moinhat['noidung'] .'</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											
											
											<div class="course_price text-center">'. number_format($dong_moinhat['giadexuat']).' '.' VND</div>
										</div>
									</div>
								</div>
								
							</div>';
					}
	}
	
	function so_trang ($trang,$id,$quanly) {
		$link = $this->connect();
		if (is_null($id)) {
			$sql="select * from sanpham";
		} elseif ($quanly = 'loaisp' && !is_null($id)) {
			$sql="select * from sanpham where loaisp = $id";
		} elseif ($quanly = 'hieusp' && !is_null($id)) {
			$sql="select * from sanpham where nhasx = $id";
		} 
		$sql_trang=mysql_query($sql,$link);
		$count_trang=mysql_num_rows($sql_trang);
		mysql_close();
		$a=ceil($count_trang/5);
		for($b=1;$b<=$a;$b++){

			if($trang==$b){

			echo '<li class="active"><a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'">'.$b.'</a></li>';

		}else{
			echo '<li><a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'">'.$b.'</a></li>';
		}
		}
	}
	
	function sploai_list() {
		$link = $this->connect();
		$sql_loai=mysql_query("select * from loaisp ",$link);
		while($dong_loai=mysql_fetch_array($sql_loai)){
		
		echo '<div class="tieude">'.$dong_loai['tenloaisp'].'</div>';
		$sql_loaisp="select * from loaisp inner join sanpham on sanpham.loaisp=loaisp.idloaisp where sanpham.loaisp='".$dong_loai['idloaisp']."'";
		$row=mysql_query($sql_loaisp);
		$count=mysql_num_rows($row);
		if($count>0){  
              echo'<ul class="product">';
                     
			
			while($dong=mysql_fetch_array($row)){
				echo '	
 				
                    	<li><a href="?quanly=chitietsp&idloaisp='. $dong['loaisp'] .'&id='. $dong['idsanpham'] .'">
                        	<img src="admincp/modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="150" height="150" />
                            <p style="color:skyblue">'. $dong['tensp'].'</p>
                            <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-left:35px;margin-bottom:5px;">'. number_format($dong['giadexuat']).' '.'VNĐ' .'</p>
                            
                        	
                        </a></li>';
                        
			}
	}else{
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}			
            echo'</ul>
                     <div class="clear"></div>';	
	}
	}
	
	function sploai_detail($id) {
		$link = $this->connect();
		$sql_loaisp="select * from sanpham where sanpham.loaisp='$id'";
		$num_loaisp=mysql_query($sql_loaisp,$link);
		$count=mysql_num_rows($num_loaisp);
		
		$sql_tenloaisp="select tenloaisp from loaisp where idloaisp='$id' ";
		$row=mysql_query($sql_tenloaisp,$link);
		mysql_close();
		$dong=mysql_fetch_array($row);
		
		echo '<div class="tieude">'. $dong['tenloaisp'] .'</div>
                	<ul class="product">';
                     
					 if($count>0){
						while($dong_loaisp=mysql_fetch_array($num_loaisp)){
						echo '
                    	<li><a href="?quanly=chitietsp&idloaisp='. $dong_loaisp['loaisp'] .'&id='. $dong_loaisp['idsanpham'] .'">
                       
                        	<img src="admincp/modules/quanlysanpham/uploads/'. $dong_loaisp['hinhanh'] .'" width="150" height="150" />
                            <p>'. $dong_loaisp['tensp'] .'</p>
                            <p>'. $dong_loaisp['giadexuat'] .'</p>
                            
                        	<p>Chi tiết</p>
                        </a></li>';
                       
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   
           echo '         </ul>
                
            
            </div>';
	}
	
	function chitietsp_query ($id) {
		$link = $this->connect();
		$sql="select idsanpham,tensp, masp, hinhanh, giadexuat, giagiam, tenloaisp, tenhieusp  
				from sanpham s join loaisp lsp on s.loaisp=lsp.idloaisp
								join hieusp hsp on s.nhasx=hsp.idhieusp
				where idsanpham='$id' and s.tinhtrang = 1";
		$num=mysql_query($sql,$link);
		$dong=mysql_fetch_array($num);
		
//		echo '<div class="tieude">Chi tiết sản phẩm</div>
//   
//                	<div class="box_chitietsp">
//                    	<div class="box_hinhanh">
//                        	<img src="admincp/modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" data-zoom-image="imgs/op-lung-sony-z3-pelosi-50.jpg"  width="200" height="200" />';
//                           
//                            $sql_gallery=mysql_query('select * from gallery where id_sp="$id" limit 3',$link);							
//							$row_gallery=mysql_num_rows($sql_gallery);
//							
//							
//                            echo '<ul class="hinhanhphongto">';
//                           	
//							if($row_gallery>0){
//								while($dong_gallery=mysql_fetch_array($sql_gallery)){
//								echo '
//                            	<li><img src="admincp/modules/gallery/uploads/'. $dong_gallery['hinhanhsp'] .'" id="zoom_01" width="70" height="70" /></li>
//                              	';
//								}
//							}else{
//								echo '<li><img src="admincp/modules/quanlysanpham/uploads/'.$dong['hinhanh'].'" id="zoom_01"  width="70" height="70" /></li>';
//							
//							}
//							  
//                            echo '</ul>
//                        </div>
//                        <div class="box_info">
//                         <form action="update_cart.php?id='.$dong['idsanpham'].'" method="post" enctype="multipart/form-data">
//                        	<p>
//                            	<strong>Tên sản phẫm: </strong><em style="color:red">'.$dong['tensp'].'</em></p>
//
//                                           <p><strong>Mã sản phẩm:</strong>  '.$dong['masp'].' </p> 
//                                           <p><strong>Giá bán:</strong><span style="color:red;"> '. number_format($dong['giadexuat']).' '.'VNĐ'.'</span></p> 
//                                           <p style="text-decoration:underline;color:blue;"><strong> Tình trạng:</strong> Còn hàng </p> 
//                                          
//                                           <p><strong>Số lượng:</strong><input type="text" name="soluong" size="3" value="1" /></p>
//                                           	 <input type="submit" name="add_to_cart" value="Mua hàng" style="margin:10px;width:100px;height:40px;background:#9F6;color:#000;font-size:18px;border-radius:8px;" />
//                                             
//                           </form>              
//                                       
//                           
//                        </div><!-- Ket thuc box box_info -->
//                    
//                    </div>';
		echo '<div class="course_container">
						<div class="course_title">'.$dong['tensp'].'</div>
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Loại phụ kiện:</div>
								<div class="course_info_text"><a href="#">'.$dong['tenloaisp'].'</a></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Đánh giá:</div>
								<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Thương hiệu:</div>
								<div class="course_info_text"><a href="#">'.$dong['tenhieusp'].'</a></div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="course_image"><img src="newadmincp/modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" alt=""></div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="box_info">
									<form action="update_cart.php?id='.$dong['idsanpham'].'" enctype="multipart/form-data" method="post">
									<div class="course_info_title"><h1>'. number_format($dong['giadexuat']).' '.'VNĐ</h1></div>
									<p><strong>Tình trạng:</strong> Còn hàng</p>
									<p><strong>Số lượng:</strong> <input type="text" value="1" name="soluong"></p>
											
									<p></p>
									<input class="btn btn-warning btn-lg btn-block" name="add_to_cart" type="submit" value="Mua hàng" style="cursor:pointer;color:white;">
									</form>
									
								</div>
							</div>
							
						</div>
						

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Thông tin sản phẩm</div>
								<div class="tab">Hình ảnh sản phẩm</div>
								<div class="tab">Khách hàng đánh giá</div>
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">';
												$sql_thongtinsp=mysql_query("select * from chitietsanpham where idsanpham='$id'",$link);
												$count_thongtinsp=mysql_num_rows($sql_thongtinsp);
												if($count_thongtinsp>0){
												$dong_thongtinsp=mysql_fetch_array($sql_thongtinsp);

											echo'
													<div id="panel1" class="panel active">
														<p>'. $dong_thongtinsp['chitietsp'] .'</p>

													</div>';

												}else{
													echo '<p style="padding:30px;">Hiện chưa có thông tin chính thức</p>';
												}
											echo'
								</div>

								<!-- Hinh anh sp -->
								<div class="tab_panel tab_panel_2">
									<div class="tab_panel_content">';
											$id_gallery = $dong['idsanpham'];
										 $sql_gallery=mysql_query("select * from gallery where id_sp= $id_gallery limit 3",$link);							
										$row_gallery=mysql_num_rows($sql_gallery);


										echo '<ul>';

										if($row_gallery>0){
											while($dong_gallery=mysql_fetch_array($sql_gallery)){
											echo '
											<li><img src="newadmincp/modules/gallery/uploads/'. $dong_gallery['hinhanhsp'] .'"/></li>
											';
											}
										}else{
											echo '<li><img src="newadmincp/modules/quanlysanpham/uploads/'.$dong['hinhanh'].'"/></li>';

										}
										
									echo'</ul></div>
								</div>

								<!-- Reviews -->
								<div class="tab_panel tab_panel_3">
									<div class="tab_panel_title">Course Review</div>

									<!-- Rating -->
									<div class="review_rating_container">
										<div class="review_rating">
											<div class="review_rating_num">4.5</div>
											<div class="review_rating_stars">
												<div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
											</div>
											<div class="review_rating_text">(28 Ratings)</div>
										</div>
										<div class="review_rating_bars">
											<ul>
												<li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
												<li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
												<li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
												<li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
												<li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
											</ul>
										</div>
									</div>
									
									<!-- Comments -->
									<div class="comments_container">
										<ul class="comments_list">
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
												<ul>
													<li>
														<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
															<div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
															<div class="comment_content">
																<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_author"><a href="#">John Tyler</a></div>
																	<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
																	<div class="comment_time ml-auto">1 day ago</div>
																</div>
																<div class="comment_text">
																	<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
																</div>
																<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
																	<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
																	<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment_item d-flex flex-row align-items-start jutify-content-start">
													<div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
													<div class="comment_content">
														<div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
															<div class="comment_author"><a href="#">Milley Cyrus</a></div>
															<div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
															<div class="comment_time ml-auto">1 day ago</div>
														</div>
														<div class="comment_text">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
														</div>
														<div class="comment_extras d-flex flex-row align-items-center justify-content-start">
															<div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
															<div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<div class="add_comment_container">
											<div class="add_comment_title">Add a review</div>
											<div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>';
					mysql_close();
	}
	
	function chitietsp_query_ttin_hinh ($id) {
		$link = $this->connect();
		$sql_thongtinsp=mysql_query("select * from sanpham where idsanpham='$id'",$link);
					$count_thongtinsp=mysql_num_rows($sql_thongtinsp);
					if($count_thongtinsp>0){
					$dong_thongtinsp=mysql_fetch_array($sql_thongtinsp);
					
				echo'
                        <div id="panel1" class="panel active">
                        	<p>'. $dong_thongtinsp['noidung'] .'</p>
                        
                        </div>';
                   
					}else{
						echo '<p style="padding:30px;">Hiện chưa có thông tin chính thức</p>';
					}
				   echo'
                          <div id="panel2" class="panel">';
                             
					$sql_hinhanhsp=mysql_query("select * from gallery where id_sp='$id'",$link);
					mysql_close();
					$count=mysql_num_rows($sql_hinhanhsp);
					if($count>0){
					while($dong_hinhanhsp=mysql_fetch_array($sql_hinhanhsp)){
						
					echo'				
                        	<p style="text-align:center;"><img src="admincp/modules/gallery/uploads/'. $dong_hinhanhsp['hinhanhsp'] .'" width="600" height="600" /></p>';
                        
					}
					}else{
						echo '<p>Chưa có hình ảnh</p>';
					}	
	}
	
	function chitietsp_splienquan ($id) {
		$link = $this->connect();
			$sql_lienquan="select * from sanpham where loaisp='$id' and sanpham.idsanpham<>$id ";
					$row_lienquan=mysql_query($sql_lienquan,$link);
					$count_lienquan=mysql_num_rows($row_lienquan);
					if($count_lienquan>0){
				   echo'
                    <div class="sanphamlienquan">
                   	<div class="tieude">Sản phẩm liên quan</div>
                    	<ul>';
						
						while($dong_lienquan=mysql_fetch_array($row_lienquan)){
						echo'
                        		 <li><a href="?quanly=chitietsp&idloaisp='. $dong_lienquan['loaisp'] .'&id='. $dong_lienquan['idsanpham'] .'">
                        	<img src="admincp/modules/quanlysanpham/uploads/'. $dong_lienquan['hinhanh'] .'" width="150" height="150" />
                            <p>Tên sp : '. $dong_lienquan['tensp'] .'</p>
                            <p style="color:red;">Giá : '. number_format($dong_lienquan['giadexuat']).' '.'VNĐ' .'</p>
                            
                        	
                        </a></li>';
                        
						}
					echo'
                        </ul>
                    </div><!-- Ket thuc box sp liên quan -->';
            
					}else{
						echo'<div class="tieude">Sản phẩm liên quan</div>';
						echo '<p style="padding:30px;">Hiện chưa có thêm sản phẩm nào</p>';
					}	
	}
	
	function dathang () {
		$link = $this->connect();
		@session_start();
	
	if(isset($_SESSION['product'])){
		if(isset($_SESSION['dangnhap'])){
			echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> '.$_SESSION['dangnhap'].'</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
		}else{
			echo '<div class="tieude">Giỏ hàng của bạn</div>';
		}
			
			echo '<div class="box_giohang">';
			echo '  <table width="100%" border="1" style="border-collapse:collapse; margin:5px; text-align:center;">';
			
			echo'  <tr>';
			echo '<td>MÃ SP</td>';
			echo'<td>Tên SP</td>';
			echo'<td>Hình ảnh</td>';
			echo'<td>Giá sp</td>';
			echo'<td>SL</td>';
			echo'<td>Tổng tiền</td>';
			echo'<td>Quản lý</td>';
			echo'</tr>';
	$thanhtien=0;
	foreach($_SESSION['product'] as $cart_item){
			$id=$cart_item['id'];
			$sql="select * from sanpham where idsanpham='$id'";
			$row=mysql_query($sql,$link);
			
			$dong=mysql_fetch_array($row);
		 	echo'<tr>';
			echo'<td>'.$dong['masp'].'</td>';
			echo'<td>'.$dong['tensp'].'</td>';
			echo'<td><img src="admincp/modules/quanlysanpham/uploads/'.$dong['hinhanh'].'" width="100" height="100" /></td>';
			echo'<td>'.number_format($dong['giadexuat']).'</td>';
			
			echo'<td><a href="update_cart.php?cong='.$cart_item['id'].'" style="margin-right:2px;"><img src="imgs/plus.png" width="20" height="20"></a>'.$cart_item['soluong'].'<a href="update_cart.php?tru='.$cart_item['id'].'" style="margin-left:2px;"><img src="imgs/subtract.png" width="20" height="20"></a></td>';
			$tongtien=0;
			$tongtien=$cart_item['soluong']*$cart_item['gia'];
			$thanhtien=($thanhtien + $tongtien);
			echo'<td>'.number_format($tongtien).'</td>';
			echo'<td><a href="update_cart.php?xoa='.$cart_item['id'].'"><img src="imgs/deletered.png" width="30" height="30"></a></td>';
			echo'</tr>';
			echo '<tr>';
			echo'</tr>';
			
  	}
			echo '<tr>
				
				<td colspan="6"><a href="update_cart.php?xoatoanbo=1"  style="text-decoration:none;" >Xóa toàn bộ</a>	
				
				</td>
				
				
				<td>Thành tiền : '.number_format($thanhtien).'VNĐ'.'</td>
				
			
			</tr>';
			mysql_close();
			
	}else{
		
		echo 'Giỏ hàng của bạn trống';
	}
	

 	echo'</table>';
	
	}
	
	function dathang_new () {
		$link = $this->connect();
		@session_start();
	
	if(isset($_SESSION['product'])){
		if(isset($_SESSION['dangnhap'])){
//			echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> '.$_SESSION['dangnhap'].'</em></strong><a href="update_cart.php?thoat=1" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
			echo '<div class="col-sm-5">
									<div class="course_info_item">
									<div class="course_info_title">GIỎ HÀNG</div>
									<div class="course_info_text"></div>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="course_info_item">
									<div class="course_info_title">Người dùng:</div>
									<div class="course_info_text"><a href="#">'.$_SESSION['dangnhap'].'</a></div>
									</div>
								</div>
								<div class="col-sm-2">
									<a href="update_cart.php?thoat=1"><button class="newsletter_button ml-auto">Đăng xuất</button>
									
								</div>';
		}else{
			echo '<div class="col-sm-5">
									<div class="course_info_item">
									<div class="course_info_title">Giỏ hàng:</div>
									<div class="course_info_text"><a href="#">aaaaaa</a></div>
									</div>
								</div>
								<div class="col-sm-5">
									<div class="course_info_item">
									<div class="course_info_title">Người dùng:</div>
									<div class="course_info_text"><a href="#">Chưa đăng nhập</a></div>
									</div>
								</div>
								<div class="col-sm-2">
									<button action="submit" class="newsletter_button ml-auto">Đăng xuất</button>
								</div>';
		}
			
			echo '</div>
							</div>
						</form>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							<div class="col-md-12 course_col">
								
								<div class="course">
									<a href="#"><div class="course_image"><img src="./Website 2_files/2.jpg" alt=""></div></a>
									<div class="course_body">
										<div class="table-responsive">
									
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead  class="text-center">
										<tr>
										   <th>Mã sp</th>
											<th>Tên sản phẩm</th>
											<th>Hình ảnh</th>
											<th>Giá tiền</th>
											<th>Số lượng</th>
											<th>Thành tiền</th>
											<th>Xóa</th>

										</tr>
									</thead>
									<tbody  class="text-center">';
	$thanhtien=0;
	foreach($_SESSION['product'] as $cart_item){
			$id=$cart_item['id'];
			$sql="select * from sanpham where idsanpham='$id'";
			$row=mysql_query($sql,$link);
			
			$dong=mysql_fetch_array($row);
		 	echo'<tr class="gradeA odd" role="row">';
			echo'<td>'.$dong['masp'].'</td>';
			echo'<td>'.$dong['tensp'].'</td>';
			echo'<td><img src="newadmincp/modules/quanlysanpham/uploads/'.$dong['hinhanh'].'" width="80" height="80" /></td>';
			echo'<td>'.number_format($dong['giadexuat']).'</td>';
			echo '<td>
					<a href="update_cart.php?cong='.$cart_item['id'].'"><button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-plus"></i></button></a>
						&nbsp;
						'.$cart_item['soluong'].'
						&nbsp;
					<a href="update_cart.php?tru='.$cart_item['id'].'"><button type="button" class="btn btn-default btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-minus"></i></button></a>
				</td>';
			$tongtien=0;
			$tongtien=$cart_item['soluong']*$cart_item['gia'];
			$thanhtien=($thanhtien + $tongtien);
			echo '<td>					
					'.number_format($tongtien).'
				</td>';
			echo '<td>					
					<a href="update_cart.php?xoa='.$cart_item['id'].'"><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></a>
				</td>';
			echo '</tr>';
	}
			echo '</tbody>
						</table>
				  </div>
					</div>
					<div class="course_footer">
						<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">';
			
			echo '<div class="course_price text-center">Thành tiền: '.number_format($thanhtien).' VND</div>';
			if(isset($_SESSION['dangnhap'])&&isset($_SESSION['product'])){
				echo '<a href="thanhtoan.php" style="width:100%;"><button class="courses_search_button ml-auto">Thanh toán</button></a>';
			} else {
				echo '<button class="courses_search_button ml-auto" style="pointer-events: none;
																								cursor: not-allowed;
																								filter: alpha(opacity=65);
																								box-shadow: none;
																								opacity: .65;">Thanh toán (Chưa đăng nhập)</button>';
			}
			echo '
										</div>
									</div>
								</div>
								
							</div>
							
						</div>
						
					</div>';
			mysql_close();
			
	}else{
		
		echo 'Giỏ hàng của bạn trống';
	}
	

 	echo'</table>';
	
	}
	
	function dangkymoi () {
		if(isset($_POST['gui'])){
		$tenkh=$_POST['hoten'];
		$email=$_POST['email'];
		$diachi=$_POST['diachi'];
		$pass=$_POST['pass'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky=mysql_query("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkh','$email','$pass','$dienthoai','$diachi')");
		    
	if($sql_dangky){
		echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
	}
	}
	}
	
	function dangkymoi_new () {
		$link = $this->connect();
		$tenkh=$_POST['user_name'];
		$email=$_POST['user_email'];
		$diachi=$_POST['user_address'];
		$pass=md5($_POST['user_pass']);
		$dienthoai=$_POST['user_dienthoai'];
		$sql_dangky=mysql_query("insert into users (user_login,user_pass,user_email,user_name,user_address,user_dienthoai) value('$email','$pass','$email','$tenkh','$diachi','$dienthoai')",$link);
		    
		if($sql_dangky){
			echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>
				<a href="dangnhap.php" style="width:100%;"><button class="comment_button trans_200" name="dangnhap_nav">Đăng nhập</button></a>';
			if(isset($_POST['dangnhap_nav'])){
				header('location:dangnhap.php');
			}
			
		} else {
			echo '<h3 style="margin-left:5px;">Đăng ký không thành công</h3>';
		}
		mysql_close();
	}
	
	function dangnhap ($email,$pass) {
//	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql=mysql_query("select * from dangky where email='$email' and matkhau='$pass' limit 1");
		$count=mysql_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email và Tài khoản bị sai</p>';
		}
	}
	}
	
	function dangnhap_new () {
		$link = $this->connect();
			$email=$_POST['email'];
			$pass=md5($_POST['pass']);
			$sql=mysql_query("select * from users where user_login='$email' and user_pass='$pass' limit 1",$link);
			$count=mysql_num_rows($sql);
			if($count>0){
				
				$_SESSION['dangnhap']=$email;
				echo '<p>Bạn đã đăng nhập thành công.</p>';
				echo '<a href="index.php" style="font-size:20px;">Quay lại trang chủ</a>';
				//header('location: index.php');
			}else{
				echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email và Tài khoản bị sai</p><br>';
				
			}
		
	}
	
	function lietke_tintuc() {
		$link = $this->connect();
			$sql="select * from tintuc ";
					$row=mysql_query($sql,$link);
					$count=mysql_num_rows($row);
					if($count>0){
						while($dong=mysql_fetch_array($row)){
							echo '<div class="blog_post trans_200">
									<div class="blog_post_image"><img src="newadmincp/modules/quanlytintuc/uploads/'. $dong['hinhanh'] .'" alt=""></div>
									<div class="blog_post_body">
										<div class="blog_post_title"><a href="blog_single.html">'. $dong['tentintuc'] .'</a></div>
										<div class="blog_post_meta">
											<ul>
												<li><a href="#">admin</a></li>
												<li><a href="#">'. $dong['ngaydang'] .'</a></li>
											</ul>
										</div>
										<div class="blog_post_text">
											<p>Policy analysts generally agree on a need for reform, but not on which path policymakers should take...</p>
										</div>
									</div>
								</div>';
                        
						}
					}else{
						echo'<div class="tieude">Sản phẩm liên quan</div>';
						
					}	
	}
	
	function themxoasua ($sql) {
		$link = $this->connect();
		$ketqua = mysql_query($sql,$link);
		mysql_close();
		if ($ketqua) {
			return 0;
		} else {
			return 1;
		}
	}
}
	
?>

<!-- Menu -->
<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400" style="overflow-y: auto">
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
				<li class="menu_mm"><a href="index.html">Trang chủ</a></li>
				<li class="menu_mm"><a href="#">Sản phẩm</a></li>
				<li class="menu_mm"><a href="#">Đăng ký</a></li>
				<li class="menu_mm"><a href="#">Đăng nhập</a></li>
				<li class="menu_mm"><a href="#">Giỏ hàng</a></li>
				<li class="menu_mm"><a href="#" class="menu_mm hsp">Hiệu sản phẩm (<?php $a->count_cate('hieusp'); ?>)&nbsp;<span class="fa fa-arrow-right"></span></a></li>
				<li class="menu_mm"><a href="#" class="menu_mm lsp">Loại sản phẩm (<?php $a->count_cate('loaisp'); ?>)&nbsp;<span class="fa fa-arrow-right"></span></a></li>
				<li class="menu_mm"><a href="contact.html">Liên hệ</a></li>
			</ul>
		</nav>
		<nav class="sub_menu_nav sub_menu_hsp">

			<button class="btn btn-light btn_back menu_mm"><span class="fa fa-arrow-left"></span>&nbsp;</button>
			<br>
			<div class="sidebar_section">
			<div class="menu_mm" >
			<h4><a href="#" class="menu_mm">Hiệu sản phẩm</a>	</h4>
			</div>
			<div class="sidebar_categories">
				<ul>
					<?php 
						$a->loaihieusp_left('hieusp');
					?>
					
				</ul>
			</div>
		</div>
		</nav>
		<nav class="sub_menu_nav sub_menu_lsp">

			<button class="btn btn-light btn_back menu_mm"><span class="fa fa-arrow-left"></span>&nbsp;</button>
			<br>
			<div class="sidebar_section">
			<div class="menu_mm" >
			<h4><a href="#" class="menu_mm">Loại sản phẩm</a>	</h4>
			</div>
			<div class="sidebar_categories">
				<ul>
					<?php 
						$a->loaihieusp_left('loaisp');
					?>
					
				</ul>
			</div>
		</div>
		</nav>
	</div>
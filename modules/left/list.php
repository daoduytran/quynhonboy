<div class="col-lg-3 d-none d-lg-block d-xl-none d-xl-block">
					<div class="sidebar">

						<!-- Courses Sidebar -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Loại phụ kiện</div>
							<div class="sidebar_categories">
								<ul>
									<?php 
										$a->loaihieusp_left('loaisp');
									?>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Thương hiệu</div>
							<div class="sidebar_categories">
								<ul>
									<?php 
										$a->loaihieusp_left('hieusp');
									?>
								</ul>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Hàng bán chạy</div>
							<div class="sidebar_latest">

								<!-- Hang ban chay -->
								
								<?php 
									$a->spbanchay(null);
								?>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_section_title">Tags</div>
							<div class="sidebar_tags">
								<ul class="tags_list">
									<?php 
									$a->hieusp_tag();
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>


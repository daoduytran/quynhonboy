<?php
	$id=$_GET['id'];
	
?>
<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Quản lý hình ảnh
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
										   <th>STT</th>
											<th>Tên loại sản phẩm</th>
											<th>Hình ảnh</th>
											<th>Gallery</th>
											<th>Quản lý</th>

										</tr>
									</thead>
									<tbody>
										<tr>
										<?php 
										  $a->lietke_hinhanh($id);
										?>
											</td>
    <td><a class="delete_link" href="../modules/gallery/xuly.php?quanly=xoa&id=<?php echo $id ?>" style="text-decoration:none;color:#000;font-size:20px;">Xóa tất cả hình ảnh</a>
</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.table-responsive -->

						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-12 -->
			</div>



  


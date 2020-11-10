<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							
							<div class="lead pull-left">Quản lý sản phẩm</div>
							<div class="text-right">
								
							
							
							
							<a href="forms.php?quanly=sanpham&ac=them" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-plus">&nbsp;&nbsp;Thêm mới</i></button></center></a>
						  </div>
							
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
									
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
										   <th>STT</th>
											<th>Tên sản phẩm</th>
											<th>Mã sp</th>
											<th>Hình ảnh</th>
											<th>Giá đề xuất</th>
											<th>Giá giảm</th>
											<th>Số lượng</th>
											<th>Loại hàng</th>
											<th>Nhà SX</th>
											<th>Hiển thị</th>
											<th>Thao tác</th>

										</tr>
									</thead>
									<tbody>
										
										<?php
										set_error_handler('myErrorHandler',E_ALL);
										register_shutdown_function('fatalErrorShutdownHandler');
										function myErrorHandler($code, $message, $file, $line) {
										  echo 'message: '.$message;
										}
										function fatalErrorShutdownHandler()
										{
										  $last_error = error_get_last();
										  if ($last_error['type'] === E_ERROR) {
											// fatal error
											myErrorHandler(E_ERROR, $last_error['message'], $last_error['file'], $last_error['line']);
											  
										  }
										}
										$a->func_lietke();
										?>
										
										
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



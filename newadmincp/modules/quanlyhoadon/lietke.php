<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Quản lý hóa đơn
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead >
										<tr class="text-center">
										   <th>STT</th>
											<th>Mã hóa đơn</th>
											<th>Tên khách hàng</th>
											<th>Ngày lập hóa đơn</th>
											<th>Tổng tiền</th>
											<th>Tình trạng</th>
											<th>Thao tác</th>

										</tr>
									</thead>
									<tbody class="text-center">
										<?php 
										 $a->func_lietke_hoadon();
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





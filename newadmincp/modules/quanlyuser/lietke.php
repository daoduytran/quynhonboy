<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Quản lý user
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead >
										<tr class="text-center">
										   <th>STT</th>
											<th>Tên </th>
											<th>Email</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Vai trò</th>
											<th>Thao tác</th>
										</tr>
									</thead>
									<tbody class="text-center">
										<?php 
										 $a->func_lietke_user();
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





<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="lead pull-left">Quản lý hiệu sản phẩm</div>
							<div class="text-right">
							<a href="forms.php?quanly=hieusp&ac=them" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-plus">&nbsp;&nbsp;Thêm mới</i></button></center></a>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
										   <th>STT</th>
											<th>Tên hiệu sản phẩm</th>
    										<th>Tình trạng</th>
											<th>Thao tác</th>

										</tr>
									</thead>
									<tbody>
										<?php 
										  $a->func_lietke_hieusp();
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


	


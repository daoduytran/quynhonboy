<?php 
$id = $_GET[id];
?>

<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="lead pull-left">Chi tiết hóa đơn</div>
							<div class="text-right">
							<a href="tables.php?quanly=hoadon&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Trở lại"><i class="fa fa-arrow-left">&nbsp;&nbsp;Trở lại</i></button></center></a>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
										   
											<th>Mã hóa đơn</th>
											<th>Tên khách hàng</th>
											<th>Ngày lập hóa đơn</th>
											<th>Tên sản phẩm</th>
											<th>Mã sản phẩm</th>
											<th>Số lượng</th>
											<th>Giá</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										 $a->func_chitiet_hoadon($id);
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
				<div class="col-lg-6">
					<div class="panel panel-green">
                            <div class="panel-heading">
                                Thông tin khách hàng
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Tên khách hàng</th>
											<th>Email</th>
											<th>Địa chỉ</th>
											<th>Số điện thoại</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$a->func_chitiet_khachhang($id);
										?>
									</tbody>
								</table>
							</div>
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
				</div>
				<div class="col-lg-4">
                        <?php $a->func_chitiet_hoadon_tinhtrang($id); ?>
											</div>
																				<br>
											<div class="text-center">
													<button type="submit" name="luu_hd" class="btn btn-outline btn-default">Lưu</button>
													
													</div>  
										</form>
								</div> 
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
			</div>






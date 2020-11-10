<?php 
$id = $_GET[id];
?>

<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="lead pull-left">Chi tiết User</div>
							<div class="text-right">
							<a href="tables.php?quanly=user&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Trở lại"><i class="fa fa-arrow-left">&nbsp;&nbsp;Trở lại</i></button></center></a>
							</div>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
										   
											<th>Tên </th>
											<th>Email</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Ngày đăng ký</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
										 $a->func_chitiet_user($id);
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
				
				<div class="col-lg-4">
                        <?php $a->func_chitiet_user_vaitro($id); ?>
											</div>
																				<br>
											<div class="text-center">
													<button type="submit" name="luu_user" class="btn btn-outline btn-default">Lưu</button>
													
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






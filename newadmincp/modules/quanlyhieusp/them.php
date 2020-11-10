 <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading lead">
                             	 <div class="pull-left">Thêm hiệu sản phẩm</div>
								<div class="text-right">
								<a href="tables.php?quanly=hieusp&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-table">&nbsp;&nbsp;Liệt kê hiệu sp</i></button></center></a>
								</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyhieusp/xuly.php" method="post" enctype="multipart/form-data">
<div class="table-responsive table-bordered">
	
<table class="table">
  
  <tr>
    <td >Tên hiệu sản phẩm</td>
    <td ><input type="text" name="hieusp" class="form-control" placeholder="Nhập tên sản phẩm"></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang" class="form-control">
                                                    <option value="1">Kích hoạt</option>
                                                    <option value="2">Không kích hoạt</option>
                                                    
                                                </select></td>
  </tr>
  
</table>
</div>
									<br>
<div class="text-center">
		<button type="submit" name="them" class="btn btn-default">Thêm</button>
		<button type="reset" class="btn btn-default">Reset</button>
		</div>  
</form>
								</div>
                                    <!-- /.col-lg-6 (nested) -->
                                    
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>



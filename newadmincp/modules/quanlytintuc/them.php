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
                                 <div class="pull-left">Thêm mới tin tức</div>
								<div class="text-right">
								<a href="tables.php?quanly=tintuc&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-table">&nbsp;&nbsp;Liệt kê tin tức</i></button></center></a>
								</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlytintuc/xuly.php" method="post" enctype="multipart/form-data">
<div class="table-responsive table-bordered">
	
<table class="table">
	
  
  <tr>
    <td >Tên tin tức</td>
    <td ><input type="text" name="tentintuc" class="form-control" placeholder="Nhập tên tin tức"></td>
  </tr>
  <tr>
    <td>Mã tin</td>
    <td><input type="text" name="matin"  class="form-control" placeholder="Nhập mã tin tức"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" class="form-control" rows="3"></textarea></textarea></td>
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
		<button type="submit" name="them" class="btn btn-success">Thêm tin tức</button>
		<button type="reset" class="btn btn-warning">Reset</button>
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






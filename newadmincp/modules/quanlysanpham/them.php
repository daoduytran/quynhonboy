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
                                <div class="pull-left">Thêm mới sản phẩm</div>
								<div class="text-right">
								<a href="tables.php?quanly=sanpham&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-table">&nbsp;&nbsp;Liệt kê sp</i></button></center></a>
								</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlysanpham/xuly.php" method="post" enctype="multipart/form-data">
<div class="table-responsive table-bordered">
	
<table class="table">
	
  
  <tr>
    <td >Tên sản phẩm</td>
    <td ><input type="text" name="tensp" class="form-control" placeholder="Nhập tên sản phẩm"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp"  class="form-control" placeholder="Nhập mã sản phẩm"></td>
  </tr>
  <tr>
    <td>Ảnh đại diện</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Giá đề xuất</td>
    <td><input type="text" name="giadexuat"  class="form-control"></td>
  </tr>
  <tr>
    <td>Giá giảm</td>
    <td><input type="text" name="giagiam"  class="form-control"></td>
  </tr>
  <tr>
    <td>Miêu tả ngắn</td>
    <td><textarea name="noidung" class="form-control" rows="3"></textarea></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"  class="form-control"></td>
  </tr>
  <tr>
	  <td>Loại sản phẩm</td>
  <td><select name="loaisp" class="form-control">
                                                  <?php $a->func_loaisp_combobox_ad(); ?>
                                                    
                                                </select></td>
  </tr>
  <tr>
      <td>Nhà sản xuất</td>
	  <td><select name="nhasx" class="form-control">
                                                    <?php $a->func_hieusp_combobox_ad(); ?>
                                                    
                                                </select></td>
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
		<button type="submit" name="them" class="btn btn-success">Thêm sản phẩm</button>
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
                    <!-- /.col-lg-6 -->
					
                </div>
                <!-- /.row -->
            </div>



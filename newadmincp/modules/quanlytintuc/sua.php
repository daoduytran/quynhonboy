<?php
	$id = $_GET['id'];
 ?>


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
                                 <div class="pull-left">Sửa tin tức</div>
								<div class="text-right">
								<a href="tables.php?quanly=tintuc&ac=lietke" ><button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Thêm mới"><i class="fa fa-table">&nbsp;&nbsp;Liệt kê tin tức</i></button></center></a>
								</div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlytintuc/xuly.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
<div class="table-responsive table-bordered">
	
<table class="table">
	
  
  <?php $a->func_loadtintuc_edit($id); ?>
  
</table>
</div>
									<br>
<div class="text-center">
		<button type="submit" name="sua" class="btn btn-success">Sửa tin tức</button>
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









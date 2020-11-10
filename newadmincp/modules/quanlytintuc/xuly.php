<form id="form1" name="form1" method="post" action="../../index.php?quanly=tintuc&ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>

<?php
	include "../myclass.php";
	$a = new myclass;
	$tentintuc=$_POST['tentintuc'];
	$matin=$_POST['matin'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	
	$noidung=$_POST['noidung'];
	
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		 $sql_them=("insert into tintuc2 (tentintuc,matin,hinhanh,noidung,tinhtrang) value('$tentintuc','$matin','$hinhanh','$noidung','$tinhtrang')");
		
		$i = $a->themxoasua($sql_them);
		if ($i == 0) {
			echo 'Them san pham thanh cong';	
		} else {
			echo 'Them san pham that bai';
		}
		//header('location:../../index.php?quanly=tintuc&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update tintuc set tentintuc='$tentintuc',matin='$matin',hinhanh='$hinhanh',noidung='$noidung',tinhtrang='$tinhtrang' where idtintuc='$_GET[id]'";
		}else{
			  $sql_sua = "update tintuc set tentintuc='$tentintuc',matin='$matin',noidung='$noidung',tinhtrang='$tinhtrang' where idtintuc='$_GET[id]'";
		}
		
		$i = $a->themxoasua($sql_sua);
		if ($i == 0) {
			echo 'Update thanh cong';	
		} else {
			echo 'Update that bai';
		}
		//header('location:../../index.php?quanly=tintuc&ac=lietke');
	}else{
		$sql_xoa = "delete from tintuc where idtintuc = $_GET[id]";
		
		$i = $a->themxoasua($sql_xoa);
		if ($i == 0) {
			echo 'Delete thanh cong';	
		} else {
			echo 'Delete that bai';
		}
		//header('location:../../index.php?quanly=tintuc&ac=lietke');
	}
?>

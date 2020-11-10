<form id="form1" name="form1" method="post" action="location:../../index.php?quanly=loaisp&ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>

<?php
	include "../myclass.php";
	$a = new myclass;
	$tenloaisp=$_POST['loaisp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("insert into loaisp (tenloaisp,tinhtrang) value('$tenloaisp','$tinhtrang')");
		$i = $a->themxoasua($sql_them);
		if ($i == 0) {
			echo 'Them san pham thanh cong';	
		} else {
			echo 'Them san pham that bai';
		}
		//header('location:../../index.php?quanly=loaisp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update loaisp set tenloaisp='$tenloaisp',tinhtrang='$tinhtrang' where idloaisp='$_GET[id]'";
		$i = $a->themxoasua($sql_sua);
		if ($i == 0) {
			echo 'Update thanh cong';	
		} else {
			echo 'Update that bai';
		}
		//header('location:../../index.php?quanly=loaisp&ac=lietke');
	}else{
		$sql_xoa = "delete from loaisp where idloaisp = $_GET[id]";
		$i = $a->themxoasua($sql_xoa);
		if ($i == 0) {
			echo 'Delete thanh cong';	
		} else {
			echo 'Delete that bai';
		}
		//header('location:../../index.php?quanly=loaisp&ac=lietke');
	}
?>

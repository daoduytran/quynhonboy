<form id="form1" name="form1" method="post" action="../../index.php?quanly=hieusp&ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>

<?php
	include "../myclass.php";
	$a = new myclass;
	$tenhieusp=$_POST['hieusp'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("insert into hieusp (tenhieusp,tinhtrang) value('$tenhieusp','$tinhtrang')");
		$i = $a->themxoasua($sql_them);
		if ($i == 0) {
			echo 'Them san pham thanh cong';	
		} else {
			echo 'Them san pham that bai';
		}
		//header('location:../../index.php?quanly=hieusp&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "update hieusp set tenhieusp='$tenhieusp',tinhtrang='$tinhtrang' where idhieusp='$_GET[id]'";
		$i = $a->themxoasua($sql_sua);
		if ($i == 0) {
			echo 'Update thanh cong';	
		} else {
			echo 'Update that bai';
		}
		//header('location:../../index.php?quanly=hieusp&ac=lietke');
	}else{
		$sql_xoa = "delete from hieusp where idhieusp = $_GET[id]";
		$i = $a->themxoasua($sql_xoa);
		if ($i == 0) {
			echo 'Delete thanh cong';	
		} else {
			echo 'Delete that bai';
		}
		//header('location:../../index.php?quanly=hieusp&ac=lietke');
	}
?>

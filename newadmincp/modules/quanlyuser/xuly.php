<form id="form1" name="form1" method="post" action="../../pages/tables.php?quanly=user&ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>
<?php
	include "../myclass.php";
	$a = new myclass;
	$iduser = $_REQUEST[id];

	if (isset($_POST['luu_user'])) {
		
		$vaitro = $_REQUEST['slc_vaitro'];
		$sql_update_vaitro = "update users set user_status = '$vaitro' where ID = $iduser";
		$i = $a->themxoasua($sql_update_vaitro);
//		if ($i == 0) {
//			echo 'update hoa don thanh cong';	
//		} else {
//			echo 'update hoa don that bai';
//		}
		header('location:../../pages/tables.php?quanly=user&ac=lietke');
	
	} else {
		$sql_xoa = "delete from users where ID = $iduser";
		
		$a->themxoasua($sql_xoa);
		
		header('location:../../pages/tables.php?quanly=user&ac=lietke');
	}
?>

<form id="form1" name="form1" method="post" action="../../pages/tables.php?quanly=hoadon&ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>
<?php
	include "../myclass.php";
	$a = new myclass;
	$idhd = $_REQUEST[id];

	if (isset($_POST['luu_hd'])) {
		
		$tinhtrang = $_REQUEST['slc_tinhtrang'];
		$sql_update_tinhtrang = "update cart set tinhtrang = '$tinhtrang' where id = $idhd";
		$i = $a->themxoasua($sql_update_tinhtrang);
//		if ($i == 0) {
//			echo 'update hoa don thanh cong';	
//		} else {
//			echo 'update hoa don that bai';
//		}
		header('location:../../pages/tables.php?quanly=hoadon&ac=lietke');
	
	} else {
		$sql_xoa_cart = "delete from cart where id = $idhd";
		$sql_xoa_cart_detail = "delete from cart_detail where cart_id = $idhd";
		$a->themxoasua($sql_xoa_cart);
		$a->themxoasua($sql_xoa_cart_detail);
		header('location:../../pages/tables.php?quanly=hoadon&ac=lietke');
	}
?>

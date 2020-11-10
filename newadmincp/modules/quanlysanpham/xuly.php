<form id="form1" name="form1" method="post" action="../../pages/tables.php">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>
<?php
	include "../myclass.php";
	$a = new myclass;
	$tensp=$_POST['tensp'];
	$masp=$_POST['masp'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$giadexuat=$_POST['giadexuat'];
	$giagiam=$_POST['giagiam'];
	$soluong=$_POST['soluong'];
	$noidung=$_POST['noidung'];
	$loaisp=$_POST['loaisp'];
	$nhasx=$_POST['nhasx'];
	$tinhtrang=$_POST['tinhtrang'];
	$trang=$_GET['trang'];
	$action=$_GET['ac'];
	
	echo $ctsp;
	if (isset($_POST['btn_save'])) {
		$idsp = $_REQUEST['idsp'];
		$hienthi = $_REQUEST['slc_hienthi'];
		//echo 'id: '.$idsp . ' hienthi: ' . $hienthi; 
		$sql_update_hienthi = "update sanpham set tinhtrang = '$hienthi' where idsanpham = $idsp";
		$i = $a->themxoasua($sql_update_hienthi);
		if ($i == 0) {
			echo 'update hien thi thanh cong';	
		} else {
			echo 'update hien thi that bai';
		}
		header('location:../../index.php?quanly=sanpham&ac=lietke');
	}elseif(isset($_POST['them'])){
		//them
		 $sql_them=("insert into sanpham (tensp,masp,hinhanh,giadexuat,giagiam,soluong,noidung,loaisp,nhasx,tinhtrang) value('$tensp','$masp','$hinhanh','$giadexuat','$giagiam','$soluong','$noidung','$loaisp','$nhasx','$tinhtrang')");
		
		$i = $a->themxoasua($sql_them);
		if ($i == 0) {
			echo 'Them san pham thanh cong';	
		} else {
			echo 'Them san pham that bai';
		}
		//header('location:../../index.php?quanly=sanpham&ac=lietke');
	}elseif(isset($_POST['them_ct'])){
		$idsp = $_REQUEST['id'];
		$ctsp =$_REQUEST['ctsp']; 
		$check = $a->check_ctsp_available($idsp);
		if ($check == 0) {
			$sql_them=("insert into chitietsanpham (idsanpham,chitietsp) value('$idsp','$ctsp')");
		
			$i = $a->themxoasua($sql_them);
			if ($i == 0) {
				echo 'Insert chi tiet san pham thanh cong';	
			} else {
				echo 'Insert chi tiet san pham that bai';
			}
		} else {
			$sql_update=("update chitietsanpham set chitietsp = '$ctsp' where idsanpham = '$idsp' limit 1");

			$i = $a->themxoasua($sql_update);
			if ($i == 0) {
				echo 'Update chi tiet san pham thanh cong';	
			} else {
				echo 'Update chi tiet san pham that bai';
			}
		}
		
		
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update sanpham set tensp='$tensp',masp='$masp',hinhanh='$hinhanh',giadexuat='$giadexuat',giagiam='$giagiam',soluong='$soluong',noidung='$noidung',loaisp='$loaisp',nhasx='$nhasx',tinhtrang='$tinhtrang' where idsanpham='$_GET[id]'";
		}else{
			$sql_sua = "update sanpham set tensp='$tensp',masp='$masp',giadexuat='$giadexuat',giagiam='$giagiam',soluong='$soluong',noidung='$noidung',loaisp='$loaisp',nhasx='$nhasx',tinhtrang='$tinhtrang' where idsanpham='$_GET[id]'";
		}
		$i = $a->themxoasua($sql_sua);
		if ($i == 0) {
			echo 'Update thanh cong';	
		} else {
			echo 'Update that bai';
		}
		//header('location:../../index.php?quanly=sanpham&ac=lietke');
	}else{
		$sql_xoa = "delete from sanpham where idsanpham = $_GET[id]";
		
		$i = $a->themxoasua($sql_xoa);
		if ($i == 0) {
			echo 'Delete thanh cong';	
		} else {
			echo 'Delete that bai';
		}
		//header('location:../../index.php?quanly=sanpham&ac=lietke');
	}
?>

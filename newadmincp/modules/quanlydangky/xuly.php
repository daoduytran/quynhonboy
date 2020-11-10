<?php
	include('../config.php');
	$tenkhachhang=$_POST['tenkhachhang'];
	$email=$_POST['email'];
	$matkhau=$_POST['matkhau'];
	$dienthoai=$_POST['dienthoai'];
	$diachinhan=$_POST['diachinhan'];
	$tinhtrang=$_POST['tinhtrang'];
	
	if(isset($_POST['them'])){
		//them
		 $sql_them=("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan,tinhtrang) value('$tenkhachhang','$email','$matkhau','$dienthoai','$diachinhan','$tinhtrang')");
		mysql_query($sql_them);
		header('location:../../index.php?quanly=dangky&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		if($hinhanh!=''){
	  $sql_sua = "update dangky set tenkhachhang='$tenkhachhang',email='$email',matkhau='$matkhau',dienthoai='$dienthoai',diachinhan='$diachinhan',tinhtrang='$tinhtrang' where id_khachhang='$_GET[id]'";
		}else{
			  $sql_sua = "update dangky set tenkhachhang='$tenkhachhang',email='$email',matkhau='$matkhau',dienthoai='$dienthoai',diachinhan='$diachinhan',tinhtrang='$tinhtrang where id_khachhang='$_GET[id]'";
		}
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=dangky&ac=lietke');
	}else{
		$sql_xoa = "delete from dangky where id_khachhang = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=dangky&ac=lietke');
	}
?>

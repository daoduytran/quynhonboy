<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form id="form1" name="form1" method="post" action="../../index.php?quanly=sanpham&amp;ac=lietke">
  <input type="submit" name="btn_back" id="btn_back" value="Back" />
  
</form>

<?php
	include "../config.php";
	$a = new myclass;
	//xoa
	if(isset($_GET['quanly'])&&$_GET['quanly']=='xoa'){
		$id=$_GET['id'];
		$sql_xoa="delete from gallery where id_sp='$id'";
		$i = $a->themxoasua($sql_xoa);
		if ($i == 0) {
			echo 'Delete thanh cong';	
		} else {
			echo 'Delete that bai';
		}
		//header('location:../../index.php?quanly=gallery&ac=lietke&id='.$id);
	}
	//them
	if(isset($_POST['upload'])){
		$id=$_GET['id'];
		foreach($_FILES['file']['name'] as $i =>$name){
			$name=$_FILES['file']['name'][$i];
			$type=$_FILES['file']['type'][$i];
			$size=$_FILES['file']['size'][$i];
			$tmp=$_FILES['file']['tmp_name'][$i];
			$explode=explode('.',$name);
			$ext=strtolower(end($explode));
			$path='uploads/';
			$path=$path . basename($explode[0].time().'.'.$ext);
			$hinhanhsp=basename($explode[0].time().'.'.$ext);
			$thongbao=array();
			if(empty($tmp)){
				echo $thongbao[]='Làm ơn chọn ít nhất 1 file ảnh';
			}else{
				$chophep = array('jpeg','jpg','png','gif','bmp');
				$max_size=4000000;
				if(in_array($ext,$chophep)===false){
					echo $thongbao[]='File <strong>'.$name.'</strong> không hợp lệ<br>';
				}if($size>$max_size){
					echo $thongbao[] = 'File <strong>'.$name.'</strong> quá lớn<br>';
				}
			}
			if(empty($thongbao)){
				if(!file_exists('uploads')){
					mkdir('uploads',0777);
					
				}if(move_uploaded_file($tmp,$path)){
					$sql="insert into gallery(id_sp,hinhanhsp) value('$id','".$hinhanhsp."')";
					$i = $a->themxoasua($sql);
					if ($i == 0) {
						echo 'Them hinh anh thanh cong';	
					} else {
						echo 'Them hinh anh that bai';
					}
					//header('location:../../index.php?quanly=gallery&ac=lietke&id='.$id);
				}else{
					echo $thongbao[]='Upload file thất bại';
				}
			}
			
		}
		
	}
?>
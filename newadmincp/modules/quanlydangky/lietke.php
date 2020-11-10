<?php
	$sql_lietkesp="select * from dangky
	
	 order by dangky.id_khachhang desc ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=dangky&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1">
  <tr>
    <td>ID_khách hàng</td>
    <td>Tên khách hàng</td>
    <td>Email</td>
    <td>Mật khẩu</td>
    <td>Điện thoại</td>
    <td>Địa chỉ</td>
    <td>Tình trạng</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietkesp)){

  ?>
  <tr>
  <td><?php echo $dong['id_khachhang']?></td>
  <td><?php echo $dong['tenkhachhang']; ?></td>
  <td><?php echo $dong['email']; ?></td>
  <td><?php echo $dong['matkhau']; ?></td>
  <td><?php echo $dong['dienthoai']?></td>
  <td><?php echo $dong['diachinhan']?></td>
  <td>
  		<?php $sql_tinhtrang = "select tinhtrang from sanpham";
	$row_tinhtrang = mysql_query($sql_tinhtrang);
	$dong_tinhtrang=mysql_fetch_array($row_tinhtrang);
	if($dong_tinhtrang['tinhtrang'] == 1 ){
		echo 'Kích hoạt';
	}elseif($dong_tinhtrang['tinhtrang'] ==2){
		echo 'Không kích hoạt';
	}
    	?>
   </td>
   <td><a href="index.php?quanly=dangky&ac=sua&id=<?php echo $dong['id_khachhang'] ?>" ><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlydangky/xuly.php?id=<?php echo $dong['id_khachhang']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30"   /></center></a></td>
  </tr>

  <?php
  $i++;
  }
  ?>
</table>

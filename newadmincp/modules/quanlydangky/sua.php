<?php
	$sql = "select * from dangky where id_khachhang='$_GET[id]' ";
	$row=mysql_query($sql);
	$dong=mysql_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="index.php?quanly=dangky&ac=lietke">Liệt Kê</a> 
</div>
<form action="modules/quanlydangky/xuly.php?id=<?php echo $dong['id_khachhang'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2"  style="text-align:center;font-size:25px;">Sửa Đăng Ký Tài Khoản</td>
  </tr>
  <tr>
    <td width="97">Tên khách hàng</td>
    <td width="87"><input type="text" name="tentintuc" value="<?php echo $dong['tenkhachhang'] ?>"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" value="<?php echo $dong['email'] ?>"></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="matkhau" value="<?php echo $dong['matkhau'] ?>"></td>
  </tr>
  <tr>
    <td>Địa thoại</td>
    <td><input type="text" name="dienthoai" value="<?php echo $dong['dienthoai'] ?>"></td>
  </tr>
  <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="diachinhan" value="<?php echo $dong['diachinhan'] ?>"></td>
  </tr>
 
 
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang">
   
    <option value="1">Kích hoạt</option>
     <option value="2">Không kích hoạt</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa đăng ký tài khoản">
    </div></td>
  </tr>
</table>
</form>



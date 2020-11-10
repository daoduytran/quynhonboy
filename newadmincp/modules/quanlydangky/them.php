
<div class="button_themsp">
<a href="index.php?quanly=dangky&ac=lietke">Liệt Kê</a></div>
<form action="modules/quanlydangky/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2"  style="text-align:center;font-size:25px;">Thêm Mới</td>
  </tr>
  <tr>
    <td width="97">Tên khách hàng</td>
    <td width="87"><input type="text" name="tenkhachhang"></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="email"></td>
  </tr>
  <tr>
    <td>Mật Khẩu</td>
    <td><input type="password" name="matkhau"></td>
  </tr>
  <tr>
    <td>Điện thoại</td>
    <td><input type="number" name="dienthoai" /></td>
  </tr>
  <tr>
    <td>Địa chỉ</td>
    <td><input type="text" name="diachi" /></td>
  </tr>
  <tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang">
      
      <option value="1">Kích hoạt</option>
      <option value="2">Không kích hoạt</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm tin">
    </div></td>
  </tr>
</table>
</form>



<?php
	@session_start();
	if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$a->dangnhap ($email,$pass);
	}
?>
<div class="tieude">
	Dr.Mertern79 xin chào mừng quý khách hàng !!!
</div>
<div class="thongbao">
	<p><img src="imgs/chu-y-mua-hang.gif" width="100" height="50"></p>
	<p>- ^ ^ Vui lòng không để lộ thông tin</p>
    <p>- Shop Dr.Merten 79</p>
    <p>- Các khách hàng đặt SỈ vui lòng liên hệ qua Email và FB -0968731442</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
           <p><input type="submit" name="dangnhap" value="Gửi thông tin" /></p>
         
    </td>
    </tr>
</table>
</form>

</div>

	<h3><a href="?quanly=dangkymoi" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:#F00;float:right;" >Đăng ký tài khoản để mua hàng.</a></h3>


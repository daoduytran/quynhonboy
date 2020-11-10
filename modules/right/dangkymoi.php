<?php
	if(isset($_POST['gui'])){
		$tenkhachhang=$_POST['tenkhachhang'];
		$email=$_POST['email'];
		$matkhau=$_POST['matkhau'];
		$dienthoai=$_POST['dienthoai'];
		$diachinhan=$_POST['diachinhan'];
		$sql_dangky=mysql_query("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkhachhang','$email','$matkhau','$dienthoai','$diachinhan')");
		$i = $a->themxoasua($sql_dangky);
		
		    
	if($i == 0){
		echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
	}
	}
?>
	

<div class="tieude">
	CHÀO ĐÓN QUÝ KHÁCH ĐẾN VỚI SHOP CỦA CHÚNG TÔI
</div>
<div class="thongbao">
	<p><img src="imgs/chu-y-mua-hang.gif" width="100" height="50"></p>
	<p>- Quý khách ghi đúng thông tin giúp Shop nhé !!!</p>
    <p>- Không đặt đơn hàng ảo</p>
    <p>- Đơn hàng SỈ. Vui lòng liệt kê danh sách + số lượng qua Email, FB 442</p>
</div>
<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Vui lòng điền đầy đủ và chính xác 
  </p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Họ Tên Khách Hàng <strong style="color:red;"> (L)</strong></td>
    <td width="60%"><input type="text" name="tenkhachhang" size="50"></td>
  </tr>
  <tr>
    <td>Địa Chỉ Email <strong style="color:red;"> (O)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
  <tr>
    <td>Mật Khẩu  <strong style="color:red;"> (V)</strong></td>
    <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td>Số Điện Thoại <strong style="color:red;"> (E)</strong></td>
     <td width="60%"><input type="text" name="dienthoai" size="50"></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận hàng <strong style="color:red;"> (U)</strong></td>
   <td width="60%"><input type="text" name="diachinhan" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 	
           <p><input type="submit" name="gui" value="Gửi thông tin" /></p>
         
    </td>
    </tr>
</table>
</form>
</div>

	
<?php

class myclass {
	private function connect () {
		$tenmaychu='localhost';
		$tentaikhoan='root';
		$pass='';
		$csdl='daoduytran';
		$conn=mysql_connect($tenmaychu,$tentaikhoan,$pass); 
		if (!$conn) {
			die('error'.mysql_error());
		} else {
			mysql_query("SET NAMES 'UTF8' ");
			mysql_select_db($csdl);
			return $conn;
		}
	}	
	 function login ($username,$password) {
		 $link = $this->connect();
		 $password = md5($password);
		 $sql="select * from users where user_login='$username' and user_pass='$password' and user_status=1 limit 1 ";
		 $row=mysql_query($sql,$link);
		 $count = mysql_num_rows($row);
		 if ($count == 1) {
			 session_start();
			 $_SESSION['dangnhap'] = $username;
			 header('location: ../index.php');
		} else {
			echo '<script>alert("Tài khoản hoặc mật khẩu không đúng.Làm ơn đăng nhập lại.");</script>';
			
		}
		 
	}
	
	protected function lietke () {
		
		$link = $this->connect();
		if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
		}else{
			$trang='';
		}
		if($trang =='' || $trang =='1'){
			$trang1=0;
		}else{
			$trang1=($trang*5)-5;
		}
		$sql_lietkesp="select idsanpham,tensp,masp,hinhanh,giadexuat,giagiam,soluong,tenloaisp,tenhieusp,s.tinhtrang 
		from sanpham s join hieusp hsp on s.nhasx = hsp.idhieusp
						join loaisp lsp on s.loaisp = lsp.idloaisp order by idsanpham ";
		$row_lietkesp=mysql_query($sql_lietkesp,$link);
		
		$i=1;
  	while($dong=mysql_fetch_array($row_lietkesp)){
		
		if (($i % 2) == 0) {
			echo '<tr class="odd gradeA">
  	
			<td>'. $i.'</td>
			<td>'. $dong['tensp'] .'</td>
			<td>'. $dong['masp'] .'</td>
			<td><img src="../modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="80" height="80" />
			<a href="tables.php?quanly=gallery&ac=lietke&id='. $dong['idsanpham'] .'" style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
			</td>
			<td>'. number_format($dong['giadexuat']) .'</td>
			<td>'. number_format($dong['giagiam']) .'</td>
			<td>'. $dong['soluong'] .'</td>
			<td>'. $dong['tenloaisp'] .'</td>
			<td>'. $dong['tenhieusp'] .'</td>
			<form action="../modules/quanlysanpham/xuly.php" method="post">
			<td><div class="text-center"><select name="slc_hienthi" id="select" style="margin-bottom:5px;">'; 
			
			if($dong['tinhtrang'] == 1 ){
				echo ' <option value="1" selected>Hiển thị</option>
				<option value="2">Không hiển thị</option>';
			}elseif($dong['tinhtrang'] ==2){
				echo '<option value="1">Hiển thị</option>
				<option value="2" selected>Không hiển thị</option>';
			}
			echo '</select>
			<input type="text" value="'.$dong['idsanpham'].'" name="idsp" style="display:none;"> 
			<button name="btn_save" type="submit" class="btn btn-success btn-circle"><i class="fa fa-save"></i></button>
			</div>
			</td>
			</form>	
			<td class="text-center">
			<a href="forms.php?quanly=sanpham&ac=sua&id='. $dong['idsanpham'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></center></a>
			<a href="../modules/quanlysanpham/xuly.php?id='. $dong['idsanpham'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
		  </tr>';
		} else {
			echo '<tr class="even gradeA">
  	
			<td>'. $i.'</td>
			<td>'. $dong['tensp'] .'</td>
			<td>'. $dong['masp'] .'</td>
			<td><img src="../modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="80" height="80" />
			<a href="tables.php?quanly=gallery&ac=lietke&id='. $dong['idsanpham'] .'" style="text-align:center;text-decoration:none; font-size:18px;color:#06F;">Gallery</a>
			</td>
			<td>'. number_format($dong['giadexuat']) .'</td>
			<td>'. number_format($dong['giagiam']) .'</td>
			<td>'. $dong['soluong'] .'</td>
			<td>'. $dong['tenloaisp'] .'</td>
			<td>'. $dong['tenhieusp'] .'</td>
			<form action="../modules/quanlysanpham/xuly.php" method="post">
			<td><div class="text-center"><select name="slc_hienthi" id="select" style="margin-bottom:5px;">'; 
			
			if($dong['tinhtrang'] == 1 ){
				echo ' <option value="1" selected>Hiển thị</option>
				<option value="2">Không hiển thị</option>';
			}elseif($dong['tinhtrang'] ==2){
				echo '<option value="1">Hiển thị</option>
				<option value="2" selected>Không hiển thị</option>';
			}
			echo '</select>
			<input type="text" value="'.$dong['idsanpham'].'" name="idsp" style="display:none;">
			
			
			<button name="btn_save" type="submit" class="btn btn-success btn-circle"><i class="fa fa-save"></i></button>
			</div>
			</td>
			</form>
			<td class="text-center">
			<a href="forms.php?quanly=sanpham&ac=sua&id='. $dong['idsanpham'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></center></a>
			<a href="../modules/quanlysanpham/xuly.php?id='. $dong['idsanpham'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
		  </tr>';
		}
		
  
  $i++;
  
	}
	}
	function lietke_number () {
		$link = $this->connect();
	$sql_trang=mysql_query("select * from sanpham",$link);
	$count_trang=mysql_num_rows($sql_trang);
	$a=ceil($count_trang/5);
	echo '<div class="trang">
	Trang :';
	for($b=1;$b<=$a;$b++){
		
		if($trang==$b){
			
			echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:underline;color:red;">'.$b.' ' .'</a>';
			
		}else{
			echo '<a href="index.php?quanly=sanpham&ac=lietke&trang='.$b.'" style="text-decoration:none;color:#000;">'.$b.' ' .'</a>';
		}
		
	}
	echo '</div>';	
	}
	
	function loaisp_combobox () {
		$link = $this->connect();
		$sql_loaisp = "select idloaisp,tenloaisp from loaisp";
		  $row_loaisp=mysql_query($sql_loaisp,$link);
		 mysql_close();
			echo'<td>Loại sản phẩm</td>
			<td><select name="loaisp">';
			
			while($dong_loaisp=mysql_fetch_array($row_loaisp)){
			
				echo'<option value="'.$dong_loaisp['idloaisp'] .'">'. $dong_loaisp['tenloaisp'] .'</option>';
				}
	}
	
	protected function loaisp_combobox_ad () {
		$link = $this->connect();
		$sql_loaisp = "select idloaisp,tenloaisp from loaisp";
		  $row_loaisp=mysql_query($sql_loaisp,$link);
		 mysql_close();
			
			while($dong_loaisp=mysql_fetch_array($row_loaisp)){
			
				echo'<option value="'.$dong_loaisp['idloaisp'] .'">'. $dong_loaisp['tenloaisp'] .'</option>';
				}
	}
	
	function hieusp_combobox () {
		$link = $this->connect();
		$sql_hieusp = "select * from hieusp";
	  $row_hieusp=mysql_query($sql_hieusp,$link);
	  mysql_close();
		echo'<td>Tên nhà sx</td>
		<td><select name="nhasx">';
		
		while($dong_hieusp=mysql_fetch_array($row_hieusp)){
		
			echo'<option value="'. $dong_hieusp['idhieusp'] .'">'. $dong_hieusp['tenhieusp'] .'</option>';
			
		}	
	}
	
	protected function hieusp_combobox_ad () {
		$link = $this->connect();
		$sql_hieusp = "select * from hieusp";
	  $row_hieusp=mysql_query($sql_hieusp,$link);
	  mysql_close();
		
		while($dong_hieusp=mysql_fetch_array($row_hieusp)){
		
			echo'<option value="'. $dong_hieusp['idhieusp'] .'">'. $dong_hieusp['tenhieusp'] .'</option>';
			
		}	
	}
	
	protected function loadsp_edit ($id) {
		$link = $this->connect();
		$sql = "select * from sanpham where idsanpham='$id' ";
		$row=mysql_query($sql,$link);
		
		$dong=mysql_fetch_array($row);
		echo '<tr>
    <td >Tên sản phẩm</td>
    <td ><input type="text" name="tensp" class="form-control" value="'. $dong['tensp'] .'"></td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><input type="text" name="masp"  class="form-control" value="'. $dong['masp'] .'"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh">
	  <img src="../modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="80" height="80">
	  </td>
  </tr>
  <tr>
    <td>Giá đề xuất</td>
    <td><input type="text" name="giadexuat"  class="form-control" value="'. $dong['giadexuat'] .'"></td>
  </tr>
  <tr>
    <td>Giá giảm</td>
    <td><input type="text" name="giagiam"  class="form-control" value="'. $dong['giagiam'] .'"></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" class="form-control" rows="3">'. $dong['noidung'] .'</textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluong"  class="form-control" value="'. $dong['soluong'] .'"></td>
  </tr>
  <tr>
	  <td>Loại sản phẩm</td>
  <td><select name="loaisp" class="form-control">';
  
  		
  
  $sql_loaisp = "select * from loaisp";
  $row_loaisp=mysql_query($sql_loaisp,$link);
  
    
     
	while($dong_loaisp=mysql_fetch_array($row_loaisp)){
		if($dong['loaisp']==$dong_loaisp['idloaisp']){
	
    	echo'<option selected="selected" value="'. $dong_loaisp['idloaisp'] .'">'. $dong_loaisp['tenloaisp'] .'</option>';
        
	}else{
		
       echo'<option value="'. $dong_loaisp['idloaisp'] .'">'. $dong_loaisp['tenloaisp'] .'</option>';
        
	}
	}
		echo'
    </select></td>
  </tr>
  <tr>
  <td>Tên nhà sx</td>
    <td><select name="nhasx" class="form-control">';
  
  
      
  $sql_hieusp = "select * from hieusp";
  $row_hieusp=mysql_query($sql_hieusp,$link);
  mysql_close();
    
    
	while($dong_hieusp=mysql_fetch_array($row_hieusp)){
		if($dong['nhasx']==$dong_hieusp['idhieusp']){
	
    	echo'<option selected="selected" value="'. $dong_hieusp['idhieusp'] .'">'. $dong_hieusp['tenhieusp'] .'</option>';
        
	}else{
		
        echo'<option value="'. $dong_hieusp['idhieusp'] .'">'. $dong_hieusp['tenhieusp'] .'</option>';
        
	}
	}
	echo'	
    </select></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang" class="form-control">';
		if($dong['tinhtrang'] == 1 ){
			echo ' <option selected="selected" value="1">Kích hoạt</option>
					<option value="2">Không kích hoạt</option>';
		}else{
			echo '<option value="1">Kích hoạt</option>
			<option selected="selected" value="2">Không kích hoạt</option>';
		}
		echo '</select></td>
  </tr>';
	}
	
	protected function loadctsp_edit ($id) {
		$link = $this->connect();
		$sql = "select * from chitietsanpham where idsanpham='$id' ";
		$row=mysql_query($sql,$link);
		$count = mysql_num_rows($row);
		if ($count > 0) {
			$dong=mysql_fetch_array($row);
		echo ' <tr>
				<td>Nhập chi tiết sản phẩm</td>
				<td>
				<input type="text" value="'.$dong['idsanpham'].'" name="idsp" style="display:none;">
				<textarea class="form-control" rows="25" name="ctsp" id="ctsp">
					'.$dong['chitietsp'].'
				</textarea></td>
			  </tr>';
		} else {
			echo ' <tr>
				<td>Nhập chi tiết sản phẩm</td>
				<td>
				<input type="text" value="'.$dong['idsanpham'].'" name="idsp" style="display:none;">
				<textarea class="form-control" rows="25" name="ctsp" id="ctsp">
					Khong co gi
				</textarea></td>
			  </tr>';
		}
		mysql_close();
	}
	
		function check_ctsp_available ($idsp) {
			$link = $this->connect();
			$sql_check = "select * from chitietsanpham where idsanpham='$idsp'";
			$row=mysql_query($sql_check,$link);
			$count = mysql_num_rows($row);
			if ($count == 0) {
				return 0;
			} else {
				return 1;
			}
			mysql_close();
	}
	
	
	function themxoasua ($sql) {
		$link = $this->connect();
		$ketqua = mysql_query($sql,$link);
		mysql_close();
		if ($ketqua) {
			return 0;
		} else {
			return 1;
		}
	}
	
	protected function lietke_tintuc() {
		$link = $this->connect();
		$sql_lietkesp="select * from tintuc order by tintuc.idtintuc desc";
		$row_lietkesp=mysql_query($sql_lietkesp,$link);
		
		$i=1;
	  	while($dong=mysql_fetch_array($row_lietkesp)){
	
	  
	  	echo'<tr>
		<td>'. $i.'</td>
		<td>'. $dong['tentintuc'] .'</td>
		<td>'. $dong['matin'] .'</td>
		<td><img src="../modules/quanlytintuc/uploads/'. $dong['hinhanh'] .'" width="80" height="80" /></td>
		
		<td>';
		$sql_tinhtrang = "select tinhtrang from tintuc";
		$row_tinhtrang = mysql_query($sql_tinhtrang,$link);
		
		$dong_tinhtrang=mysql_fetch_array($row_tinhtrang);
		if($dong_tinhtrang['tinhtrang'] == 1 ){
			echo 'Kích hoạt';
		}elseif($dong_tinhtrang['tinhtrang'] ==2){
			echo 'Không kích hoạt';
		}
		echo'</td>
		<td class="text-center">
			<a href="forms.php?quanly=tintuc&ac=sua&id='. $dong['idtintuc'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></center></a>
			<a href="../modules/quanlytintuc/xuly.php?id='. $dong['idtintuc'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
	  </tr>';
	  $i++;
	  }
	  mysql_close();
	}
	
	protected function loadtintuc_edit ($id) {
		$link = $this->connect();
		$sql = "select * from tintuc where idtintuc='$id' ";
		$row=mysql_query($sql,$link);
		mysql_close();
		$dong=mysql_fetch_array($row);
		echo '<tr>
    <td >Tên tin tức</td>
    <td ><input type="text" name="tentintuc" class="form-control" value="'. $dong['tentintuc'] .'"></td>
  </tr>
  <tr>
    <td>Mã tin</td>
    <td><input type="text" name="matin"  class="form-control" value="'. $dong['matin'] .'"></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="../modules/quanlytintuc/uploads/'. $dong['hinhanh'] .'" width="80" height="80"></td>
  </tr>
  <tr>
    <td>Nội dung</td>
    <td><textarea name="noidung" class="form-control" rows="3">'. $dong['noidung'] .'</textarea></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang" class="form-control">';
		if($dong['tinhtrang'] == 1 ){
			echo ' <option selected="selected" value="1">Kích hoạt</option>
					<option value="2">Không kích hoạt</option>';
		}else{
			echo '<option value="1">Kích hoạt</option>
			<option selected="selected" value="2">Không kích hoạt</option>';
		}
                                                   
		echo'</select></td>
  </tr>';
	}
	
	protected function lietke_loaisp () {
		$link = $this->connect();
		$sql_lietkesp="select * from loaisp order by idloaisp desc ";
		$row_lietkesp=mysql_query($sql_lietkesp,$link);
		$i=1;
	  while($dong=mysql_fetch_array($row_lietkesp)){
	
	  
	  echo '<tr>
		<td>'. $i.'</td>
		<td>'. $dong['tenloaisp'] .'</td>
		<td>';
		if($dong['tinhtrang'] == 1 ){
			echo 'Kích hoạt';
		}else{
			echo 'Không kích hoạt';
		}
		echo'</td>
		<td class="text-center">
			<a href="forms.php?quanly=loaisp&ac=sua&id='. $dong['idloaisp'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></center></a>
			<a href="../modules/quanlyloaisp/xuly.php?id='. $dong['idloaisp'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
	  </tr>';
	  
	  $i++;
	  }
	}
	
	protected function loadloaisp_edit($id) {
		$link = $this->connect();
		$sql = "select * from loaisp where idloaisp = '$id'";
		$row=mysql_query($sql,$link);
		$dong=mysql_fetch_array($row);
		echo'<tr>
    <td >Tên loại sản phẩm</td>
    <td ><input type="text" name="loaisp" class="form-control" value="'. $dong['tenloaisp'] .'"></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang" class="form-control">';
    if($dong['tinhtrang'] == 1){
		echo'		
		  <option value="1" selected="selected">Kích hoạt</option>
		  <option value="2">Không kích hoạt</option>';
		  
		}else{
		echo'
		  <option value="1">Kích hoạt</option>
		  <option value="2" selected="selected">Không kích hoạt</option>';
		}
		 echo '
		  </select></td>
	  </tr>';
	}
	
	protected function lietke_hieusp() {
		$link = $this->connect();
		$sql_lietkesp="select * from hieusp order by idhieusp desc ";
		$row_lietkesp=mysql_query($sql_lietkesp,$link);
		
		$i=1;
	  while($dong=mysql_fetch_array($row_lietkesp)){
	
	 echo'
	  <tr>
		<td>'. $i.'</td>
		<td>'. $dong['tenhieusp'] .'</td>
		<td>';
		if($dong['tinhtrang'] == 1 ){
			echo 'Kích hoạt';
		}else{
			echo 'Không kích hoạt';
		}
		echo'</td>
		<td class="text-center">
			<a href="forms.php?quanly=hieusp&ac=sua&id='. $dong['idhieusp'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></center></a>
			<a href="../modules/quanlyhieusp/xuly.php?id='. $dong['idhieusp'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
	  </tr>';
	  
	  $i++;
	  }
	}
	
	protected function loadhieusp_edit($id) {
		$link = $this->connect();
		$sql = "select * from hieusp where idhieusp = '$id'";
		$row=mysql_query($sql);
		$dong=mysql_fetch_array($row);
		echo'<tr>
    <td >Tên hiệu sản phẩm</td>
    <td ><input type="text" name="hieusp" class="form-control" value="'. $dong['tenhieusp'] .'"></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select name="tinhtrang" class="form-control">';
    if($dong['tinhtrang'] == 1){
		echo'		
		  <option value="1" selected="selected">Kích hoạt</option>
		  <option value="2">Không kích hoạt</option>';
		  
		}else{
		echo'
		  <option value="1">Kích hoạt</option>
		  <option value="2" selected="selected">Không kích hoạt</option>';
		}
		 echo '
		  </select></td>
	  </tr>';
	}
	
	function timkiem_tensp($search) {
		$link = $this->connect();
		$sql_timkiem="select * from sanpham,hieusp,loaisp where sanpham.loaisp=loaisp.idloaisp and sanpham.nhasx=hieusp.idhieusp and  tensp like '%".$search."%'";
		$row_timkiem=mysql_query($sql_timkiem);
		$count=mysql_num_rows($row_timkiem);
		if($count>0){
			$i=1;
		  while($dong=mysql_fetch_array($row_timkiem)){
		
		  echo'
		  <tr>
			<td>'. $i.'</td>
			<td>'. $dong['tensp'] .'</td>
			<td>'. $dong['masp'] .'</td>
			<td><img src="modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="80" height="80" /></td>
			<td>'. $dong['giadexuat'] .'</td>
			<td>'. $dong['giagiam'] .'</td>
			<td>'. $dong['soluong'] .'</td>
			<td>'. $dong['tenloaisp'] .'</td>
			<td>'. $dong['tenhieusp'] .'</td>
			<td>'; 
			$sql_tinhtrang = "select tinhtrang from sanpham";
			$row_tinhtrang = mysql_query($sql_tinhtrang,$link);
			$dong_tinhtrang=mysql_fetch_array($row_tinhtrang);
			if($dong_tinhtrang['tinhtrang'] == 1 ){
				echo 'Kích hoạt';
			}elseif($dong_tinhtrang['tinhtrang'] ==2){
				echo 'Không kích hoạt';
			}
			echo'</td>
			<td><a href="index.php?quanly=sanpham&ac=sua&id='. $dong['idsanpham'] .'"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
			<td><a href="modules/quanlysanpham/xuly.php?id='. $dong['idsanpham'].'"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
		  </tr>';
		  
		  $i++;
		  }
			}else{
			  echo 'Không tìm thấy kết quả';
		  }
		}
		
	function lietke_hinhanh ($id) {
		$link = $this->connect();
		$sql=mysql_query("select * from sanpham where idsanpham='$id'",$link);
		$dong=mysql_fetch_array($sql);
		
		echo'
		<td>'. $dong['tensp'] .'</td>
		<td><img src="../modules/quanlysanpham/uploads/'. $dong['hinhanh'] .'" width="150" height="150"></td>
		<td>';
		
		$sql_gal=mysql_query("select hinhanhsp from gallery where id_sp='$id'",$link);
		$count=mysql_num_rows($sql_gal);
		if($count>0){
		while($dong_gal=mysql_fetch_array($sql_gal)){
		
		echo'<p style="margin-bottom:10px;"><img src="../modules/gallery/uploads/'. $dong_gal['hinhanhsp'] .'" width="50" height="50"></p>';
		
		}
		
		}else{
			echo 'Chưa có hình ảnh sản phẫm. Làm ơn Thêm Gallery';
		}
		echo '</td>';
		mysql_close();
	}
	
	protected function lietke_hinhanh_add () {
		
	}
	
	protected function lietke_hoadon () {
		$link = $this->connect();
		if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
		}else{
			$trang='';
		}
		if($trang =='' || $trang =='1'){
			$trang1=0;
		}else{
			$trang1=($trang*5)-5;
		}
		$sql_lietkehd="SELECT c.id,fullname, createdate,tinhtrang, SUM( quantity * price ) AS tongtien
						FROM cart c
						JOIN cart_detail d ON c.id = d.cart_id
						GROUP BY fullname, createdate
						ORDER BY createdate desc
						";
		
		
		$row_lietkehd=mysql_query($sql_lietkehd,$link);
		
		$i=1;
		while($dong=mysql_fetch_array($row_lietkehd)){
			echo '<tr>
		
		<td>'. $i.'</td>
		<td>'. $dong['id'] .'</td>
		<td>'. $dong['fullname'] .'</td>
		<td>'. $dong['createdate'] .'</td>
		<td>'. $dong['tongtien'] .'</td>
		'; 
		if ($dong['tinhtrang'] == 2) {
			echo '<td><p class="text-success">Đã giao hàng</p></td>';
		} else {
			echo '<td><p class="text-warning">Đang xử lý</p></td>';
		}
		
		echo '
		<td>
			<a href="tables.php?quanly=hoadon&ac=chitiet&id='. $dong['id'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-pencil"></i></button></center></a>
			<a href="../modules/quanlyhoadon/xuly.php?id='. $dong['id'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
		</tr>';
	  
	  $i++;
	  
		}
	}
	
	protected function chitiet_hoadon ($id) {
		$link = $this->connect();
		$sql = "SELECT c.id, fullname, createdate,tensp,masp, quantity , price  
				FROM cart_detail d
				JOIN cart c ON  d.cart_id = c.id
                                join sanpham s on d.product_id = s.idsanpham
				where c.id = '$id' 
				GROUP BY c.id,fullname, createdate,tensp,masp,quantity,price";	
		$row = mysql_query($sql,$link);
		mysql_close();
		$num_row = mysql_num_rows($row);
		if ($num_row > 0) {
			while ($dong = mysql_fetch_array($row)) {
				echo '<tr>
					<td>'. $dong['id'] .'</td>
					<td>'. $dong['fullname'] .'</td>
					<td>'. $dong['createdate'] .'</td>
					<td>'. $dong['tensp'] .'</td>
					<td>'. $dong['masp'] .'</td>
					<td>'. $dong['quantity'] .'</td>
					<td>'. ($dong['price']*1) .'</td>
					</tr>'; 
			}
		} else {
			echo 'Load du lieu bi loi'; 
		} 
	}
	
	protected function chitiet_hoadon_tinhtrang ($id) {
		$link = $this->connect();
		$sql = "SELECT tinhtrang
				FROM cart
				where id = '$id' 
				";	
		$row = mysql_query($sql,$link);
		mysql_close();
		$num_row = mysql_num_rows($row);
		if ($num_row == 1) {
			$tt = mysql_fetch_array($row);
			if ($tt['tinhtrang'] == 2) {
				echo '<div class="panel panel-success">
							<div class="panel-heading">
                             	 Tình trạng đơn hàng: ĐÃ GIAO HÀNG
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyhoadon/xuly.php?id='.$id.'" method="post" enctype="multipart/form-data">
											<div class="table-responsive table-bordered">
													  <select name="slc_tinhtrang" class="form-control">		
													  <option value="1">Đang xử lý</option>
													  <option value="2" selected="selected">Đã giao hàng</option>
													  </select>';
			} else {
				echo '<div class="panel panel-warning">
							<div class="panel-heading">
                             	 Tình trạng đơn hàng: ĐANG XỬ LÝ
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyhoadon/xuly.php?id='.$id.'" method="post" enctype="multipart/form-data">
											<div class="table-responsive table-bordered">
													  <select name="slc_tinhtrang" class="form-control">		
													  <option value="1" selected="selected">Đang xử lý</option>
													  <option value="2">Đã giao hàng</option>
													  </select>';
			}
				
			
		} else {
			echo 'Load du lieu bi loi'; 
		} 
		
	}
	
	protected function chitiet_khachhang($id){
		$link = $this->connect();
		$sql = "SELECT fullname
				FROM cart 
				where id = '$id' limit 1";	
		$row = mysql_query($sql,$link);
		
		$num_row = mysql_num_rows($row);
		$dong = mysql_fetch_array($row);
		$fullname = $dong['fullname'];
		
		$sql_kh = "SELECT *
				FROM users 
				where user_login = '$fullname'";	
		$row2 = mysql_query($sql_kh,$link);
		$num_row2 = mysql_num_rows($row2);
		if ($num_row2 > 0) {
			while ($dong2 = mysql_fetch_array($row2)) {
				echo '<tr>
					<td>'. $dong2['user_name'] .'</td>
					<td>'. $dong2['user_email'] .'</td>
					<td>'. $dong2['user_address'] .'</td>
					<td>'. $dong2['user_dienthoai'] .'</td>
					</tr>'; 
			}
		mysql_close();
		} else {
			echo 'Load du lieu bi loi'; 
		} 
	}
	
	protected function count_sp($input) {
		$link = $this->connect();
		$sql = "SELECT *
				FROM $input";	
		
		$row = mysql_query($sql,$link);
		
		$num_row = mysql_num_rows($row);
		echo $num_row;
	}
	
	protected function lietke_user () {
		$link = $this->connect();
		if(isset($_GET['trang'])){
		$trang=$_GET['trang'];
		}else{
			$trang='';
		}
		if($trang =='' || $trang =='1'){
			$trang1=0;
		}else{
			$trang1=($trang*5)-5;
		}
		$sql_lietke="SELECT * FROM users";
		$row_lietke=mysql_query($sql_lietke,$link);
		
		$i=1;
		while($dong=mysql_fetch_array($row_lietke)){
			echo '<tr>
		
		<td>'. $i.'</td>
		<td>'. $dong['user_name'] .'</td>
		<td>'. $dong['user_email'] .'</td>
		<td>'. $dong['user_address'] .'</td>
		<td>'. $dong['user_dienthoai'] .'</td>
		'; 
		if ($dong['user_status'] == 1) {
			echo '<td><p class="text-success">Admin</p></td>';
		} elseif ($dong['user_status'] == 2) {
			echo '<td><p class="text-info">Mod</p></td>';
		} else {
			echo '<td><p class="text-warning">Khách hàng</p></td>';
		}
		
		echo '
		<td>
			<a href="tables.php?quanly=user&ac=chitiet&id='. $dong['ID'] .'" ><button type="button" class="btn btn-info btn-circle" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-pencil"></i></button></center></a>
			<a href="../modules/quanlyuser/xuly.php?id='. $dong['ID'] .'" ><button type="button" class="btn btn-warning btn-circle" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></center></a>
			</td>
		</tr>';
	  
	  $i++;
	  
		}
	}
	
	protected function chitiet_user($id) {
		$link = $this->connect();
		$sql = "SELECT *
				FROM users
				where ID = $id" 
				;	
		$row = mysql_query($sql,$link);
		mysql_close();
		$num_row = mysql_num_rows($row);
		if ($num_row > 0) {
			while ($dong = mysql_fetch_array($row)) {
				echo '<tr>
						<td>'. $dong['user_name'] .' </td>
						<td>'. $dong['user_email'] .'</td>
						<td>'. $dong['user_address'] .'</td>
						<td>'. $dong['user_dienthoai'] .'</td>
						<td>'. $dong['user_registered'] .'</td>
					</tr>'; 
			}
		} else {
			echo 'Load du lieu bi loi'; 
		} 
	}
	
	protected function chitiet_user_vaitro($id) {
		$link = $this->connect();
		$sql = "SELECT user_status
				FROM users
				where ID = '$id' 
				";	
		$row = mysql_query($sql,$link);
		mysql_close();
		$num_row = mysql_num_rows($row);
		if ($num_row == 1) {
			$tt = mysql_fetch_array($row);
			if ($tt['user_status'] == 1) {
				echo '<div class="panel panel-success">
							<div class="panel-heading">
                             	 Vai trò
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyuser/xuly.php?id='.$id.'" method="post" enctype="multipart/form-data">
											<div class="table-responsive table-bordered">
													  <select name="slc_vaitro" class="form-control">	
													  <option value="0">Khách hàng</option>
													  <option value="1" selected="selected">Admin</option>
													  <option value="2">Mod</option>
													  </select>';
			} elseif ($tt['user_status'] == 2) {
				echo '<div class="panel panel-info">
							<div class="panel-heading">
                             	 Vai trò
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyuser/xuly.php?id='.$id.'" method="post" enctype="multipart/form-data">
											<div class="table-responsive table-bordered">
													  <select name="slc_vaitro" class="form-control">	
													  <option value="0">Khách hàng</option>
													  <option value="1">Admin</option>
													  <option value="2" selected="selected">Mod</option>
													  </select>';
			}else {
				echo '<div class="panel panel-warning">
							<div class="panel-heading">
                             	 Vai trò
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="../modules/quanlyuser/xuly.php?id='.$id.'" method="post" enctype="multipart/form-data">
											<div class="table-responsive table-bordered">
													  <select name="slc_vaitro" class="form-control">
													  <option value="0" selected="selected">Khách hàng</option>
													  <option value="1">Admin</option>
													  <option value="2">Mod</option>
													  </select>';
			}
				
			
		} else {
			echo 'Load du lieu bi loi'; 
		} 
	}
}
	
?>
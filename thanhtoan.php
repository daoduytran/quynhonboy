<?php
	@session_start();
	//include('admincp/modules/config.php');
	
	include("modules/myclass/myclass.php");
     $a = new democlass;
	 $link = $a->connect();
		$name=$_SESSION['dangnhap'];	
		$insert_cart="insert into cart (fullname) value ('".$name."')";
		$ketqua=mysql_query($insert_cart,$link);
		if($ketqua){
			for($i=0;$i<count($_SESSION['product']);$i++){
			$max=mysql_query("select max(id) from cart");
			$row=mysql_fetch_array($max);
			
			$cart_id=$row[0];
			$product_id=$_SESSION['product'][$i]['id'];
			$quantity=$_SESSION['product'][$i]['soluong'];
			
			$price=$_SESSION['product'][$i]['gia'];
			
			 $insert_cart_detail="insert into cart_detail (cart_id,product_id,quantity,price) values('".$cart_id."','".$product_id."','".$quantity."','".$price."');";
			 $cart_detail=mysql_query($insert_cart_detail,$link);

		}
		
	}	
		unset($_SESSION['product']);
		mysql_close();
		header('location:index.php?quanly=camon');
	
?>
<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
 <?php 

	$login_check = Session::get('customer_login');
	if ($login_check==false) {
		echo "<script>window.open('login.php','_self')</script>";
		
	}

 ?>
<?php 
	if(isset($_GET['orderid']) && $_GET['orderid']=='order' ){
       $customer_id = Session::get('customer_id');
       $insertOrder = $ct->insertOrder($customer_id);
      
       	 $delcart=$ct->del_all_data_cart();

       
       echo "<script>window.open('success.php','_self')</script>";
      
     
      
    }
 ?>
 

 <style type="text/css">
	.box_left {
    width: 50%;
    border: 1px solid #666;
    float: left;
    padding: 4px;	

	}
 	.box_right {
    width: 47%;
    border: 1px solid #666;
    float: right;
    padding: 4px;
	}
	.a_order {
    background: red;
    color: aliceblue;
    padding: 10px;
    font-size: 25px;
    border-radius: none;
    cursor: pointer;
	}
}
</style>

<form action="" method="POST">
 <div class="main">
    <div class="content">
    	<div class="section group">
    		<div class="heading">
    		     <h3 style="color: red; font-size: 30px">Thanh toán</h3>
    		</div>
    		<div class="clear"></div>
    		<div class="box_left" style="width: 800px">
    			<div class="cartpage">
			    	<h2>Giỏ hàng của bạn</h2>
			    	<?php 
			    	if (isset($update_quantity_Cart)) {
			    		echo $update_quantity_Cart;
			    	}
			    	 ?>
			    	<?php 
			    	if (isset($delcart)) {
			    		echo $delcart;
			    	}
			    	 ?>
			    	 <?php
			    	 if(isset($delcart)){
			    	 	echo $delcart;
			    	 }
			    	?>
						<table class="tblone" >
							<tr>
								<th width="5%">STT</th>
								<th width="30%">Tên sản phẩm</th>
								<th width="15%">Giá</th>
								<th width="5%">Số lượng</th>
								<th width="20%">Tổng giá</th>
								
							</tr>
							<?php 
							$get_product_cart = $ct->get_product_cart();
							if($get_product_cart){
								$subtotal = 0;
								$qty = 0;
								$i=0;
								while ($result = $get_product_cart->fetch_assoc()) {
									$i++;
								
							 ?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $result['productName'] ?></td>
								
								<td><?php echo $fm->format_currency($result['price'])." "."VND"?></td>
								<td>
									<?php echo $result['quantity'] ?>
								</td>
								<td>
									<?php 
									$total = $result['price'] * $result['quantity'];
									echo $fm->format_currency($total)." "."VND";
									 ?>
								</td>
								
							</tr>
							<?php 

							$subtotal += $total;
							$qty = $qty + $result['quantity'];
								}
							}
							 ?>
	
						</table>
						<?php
							$check_cart = $ct->check_cart();
							if ($check_cart) {

							 ?>
						<table style=" background:#098556 ;font-weight: bold;float: right; color: #deefe5; text-align:left;" width="40%">
							<tr>
								<th>Tổng tiền : </th>
								<td>
								<?php echo $fm->format_currency($subtotal)." "."VND";

									  Session::set('sum',$subtotal);
									  Session::set('qty',$qty);
								?>
								</td>
							</tr>
							<tr>
								<th>Thuế VAT: </th>
								<td> 1% (<?php echo $vat = $subtotal * 0.01. ' VND';?>)</td>
							</tr>
							<tr>
								<th>Thành tiền :</th>
								<td><?php 
								$vat = $subtotal * 0.01;
								$grandTotal = $subtotal + $vat;
								echo $fm->format_currency($grandTotal)." "."VND";
								 ?> </td>
							</tr>
					   </table>
					   <?php 
						}else {
							echo 'Your cart is Empty ! Please Shopping now';
						}
					    ?>
					</div>
					

    		</div>
<!--    		<div id="buttonthem" style="float: left;">-->
<!--		        <a class="btn btn-info"><span class="glyphicon glyphicon-plus"></span>Xem Thông tin</a>-->
<!--		     </div>-->
		     <div id="formthem">
	    		<div class="box_right" style="width: 490px">
	    			<table class="tblone">
			    		<?php 
			    		$id = Session::get('customer_id');
			    		$get_customers = $cs->show_customers($id);
			    		if ($get_customers) {
			    			while ($result = $get_customers->fetch_assoc()) {

			    		 ?>
			    		<tr>
			    			<td>Tên</td>
			    			<td>:</td>
			    			<td><?php echo $result['name']; ?></td>
			    		</tr>
			    		<tr>
			    			<td>Thành Phố</td>
			    			<td>:</td>
			    			<td><?php echo $result['city']; ?></td>
			    		</tr>
			    		<tr>
			    			<td>Số điện thoại</td>
			    			<td>:</td>
			    			<td><?php echo $result['phone']; ?></td>
			    		</tr>
			    		<!-- <tr>
			    			<td>Country</td>
			    			<td>:</td>
			    			<td><?php echo $result['country']; ?></td>
			    		</tr> -->
			    		<tr>
			    			<td>Mã bưu điện</td>
			    			<td>:</td>
			    			<td><?php echo $result['zipcode']; ?></td>
			    		</tr>
			    		<tr>
			    			<td>Email</td>
			    			<td>:</td>
			    			<td><?php echo $result['email']; ?></td>
			    		</tr>
			    		<tr>
			    			<td>Địa chỉ</td>
			    			<td>:</td>
			    			<td><?php echo $result['address']; ?></td>
			    		</tr>
			            <tr>
			                <td colspan="3"><a href="editprofile.php">Cập nhật thông tin</a></td>

			            </tr>

			    		<?php
			    		}
			    		}
			    		 ?>
			    	</table>	

	    		</div>
    		
	    	</div>

 		</div>

 	</div>


 	<center style="padding-bottom: 20px;">
 		 <a  href="cart.php" class="btn btn-warning"> <i class="fas fa-backward"></i> Quay lại</a>
 		<a style="background:#0e4832; color: yellowgreen" href="?orderid=order" class="btn btn-warning">Đặt hàng ngay <i class="fas fa-forward"></i> </a>

 	</center>

 </div>
</form>

<!--<script>-->
<!--$(document).ready(function(){-->
<!--    $("#formthem").hide();-->
<!--    $("#buttonthem").click(function(){-->
<!--        $("#formthem").toggle(1000);-->
<!--    });-->
<!--});-->
<!--</script>-->
<?php 
	include 'inc/footer.php';
 ?>
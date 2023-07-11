 <?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
<?php
    if(isset($_GET['cartid'])){
        $cartid = $_GET['cartid']; 
        $delcart = $ct->del_product_cart($cartid);
    }
        
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $cartId = $_POST['cartId'];
        $proId = $_POST['proId'];
        $quantity = $_POST['quantity'];
        $update_quantity_Cart = $ct -> update_quantity_Cart($proId,$cartId, $quantity); // hàm check catName khi submit lên
    	if ($quantity <= 0) {
    		$delcart = $ct->del_product_cart($cartId);
    	}
    } 
 ?>
 <?php
	if(!isset($_GET['id'])){
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
	}
?>



 <div class="main">
    <div class="content">
    	<div class="cartoption">		
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
						<table >
							<?php 
						
							$get_product_cart = $ct->get_product_cart();
							if($get_product_cart){
								$subtotal = 0;
								$qty = 0;
								while ($result = $get_product_cart->fetch_assoc()) {
									
								
							 ?>
							 <tr>
							 	<td><img style="width: 200px;" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></td>
							 	<td style="font-size: 20px; color: red"><?php echo 'Giá bán: '. $fm->format_currency($result['price'])." VND" ?></td>
							 	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							 	<td>
									<form action="" method="post">
										<input type="hidden" name="cartId" min="0" value="<?php echo $result['cartId'] ?>"/>
										<input type="hidden" name="proId" min="0" value="<?php echo $result['productId'] ?>"/>
										<input type="number" name="quantity" min="0" value="<?php echo $result['quantity'] ?>"/>
										<input style="background: #09c768; width: 100px; height: 35px;
										border-radius: 15px;" type="submit" name="submit"  value="Cập nhật"/>
									</form>
								</td>
									
								
								<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td>Tổng tiền: </td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td style="font-size: 20px; color: red; ">
									<?php 
									$total = $result['price'] * $result['quantity'];
									echo  $fm->format_currency($total)." VND";
									 ?>
								</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td ><a  class="btn btn-danger" href="?cartid=<?php echo $result['cartId'] ?>"><i class="fas fa-trash"></i></a></td>
								
							 </tr>
							<tr>
								<td style="font-size: 20px;font-weight: bold; color: #226506; text-align: center;"><?php echo $result['productName'] ?></td>

							</tr>
							<tr>
								<td><hr></td>
								
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
						<table style="float:right;text-align:left; background: #abd2d4;" width="40%" >
							<tr>
								<th>Tổng tiền : </th>
								<td>
								<?php echo $fm->format_currency($subtotal)." VND";

									  Session::set('sum',$subtotal);
									  Session::set('qty',$qty);
								?>
								</td>
							</tr>
							<tr>
								<th>Thuế VAT : </th>
								<td>1%</td>
							</tr>
							<tr>
								<th>Thành tiền :</th>
								<td><?php 
								$vat = $subtotal * 0.01;
								$grandTotal = $subtotal + $vat;
								echo $fm->format_currency($grandTotal)." VND";
								 ?> </td>
							</tr>
					   </table>
					   <?php 
						}else {
							echo 'Giỏ của bạn trống trơn ! Hãy mua sắm ngay bây giờ';
						}
					    ?>
					</div>
					<div class="shopping">

						<div class="shopleft">
							<a href="index.php">
                                <button type="button" style="background: #388306;border-radius: 10px; color: #e6ff00; font-size: 15px; font-weight: bold; width: 200px;height: 50px; float:left; margin-left: 440px"><i class="fas fa-backward"></i> Tiếp tục mua sắm</button>

                            </a>

						</div>
						<div class="shopright">
							<a href="offlinepayment.php">
                                <button type="button" style="background: #33755c;border-radius: 10px; color: #e6ff00; font-size: 15px; font-weight: bold; width: 200px;height: 50px;margin-right: 440px; float: right">Thanh toán <i class="fas fa-forward"></i></button>

                            </a>
						</div>

					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

<?php 
	include 'inc/footer.php';
 ?>

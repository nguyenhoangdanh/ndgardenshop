<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
<?php
 //    if(isset($_GET['cartid'])){
 //        $cartid = $_GET['cartid']; 
 //        $delcart = $ct->del_product_cart($cartid);
 //    }
        
	// if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
 //        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
 //        $cartId = $_POST['cartId'];
 //        $quantity = $_POST['quantity'];
 //        $update_quantity_Cart = $ct -> update_quantity_Cart($cartId, $quantity); // hàm check catName khi submit lên
 //    	if ($quantity <= 0) {
 //    		$delcart = $ct->del_product_cart($cartId);
 //    	}
 //    } 
 ?>
<?php 
	$login_check = Session::get('customer_login');
	  if ($login_check==false) {
	  	echo "<script>window.open('login.php','_self')</script>";
	  	
	  }
 ?>
 <?php
	if(isset($_GET['confirmid'])){
     	$id = $_GET['confirmid'];
     	$time = $_GET['time'];
     	
     	$shifted_confirm = $ct->shifted_confirm($id,$time);
    }
?>
<?php
    // gọi class category
        
    if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['delid']; 
        // Lấy catid trên host
        $delorder = $ct -> del_order($id); 
        $delcart = $ct->del_product_cart($id);
        // hàm check delete Name khi submit lên
    }
 ?> 
 <div class="main">
    <div class="content">
    	<div style=" background: #286950; ">
    		<span style="font-size: 20px; ">

    					<span>
    						<a href="dh_choxacnhan.php" style="color: yellowgreen; ; ">
    						Chờ xác nhận </a>
    						<a class="btn btn-warning" href="" style="color: #0b168a; font-weight: bold">
    							<?php
    								$customer_id = Session::get('customer_id'); 
									$check_cart = $ct->check_order_choxacnhan($customer_id);
									

										echo $check_cart;

									
								?>
    						</a>
    					</span>
    						
    					&nbsp;&nbsp;&nbsp;&nbsp;
    					<span>
			    			<a href="dh_danggiao.php" style="color: yellowgreen;  ">Đang giao</a>
			    			<a class="btn btn-warning" href="" style="color: #0b168a; font-weight: bold">
    							<?php
    								$customer_id = Session::get('customer_id'); 
									$check_cart = $ct->check_order_choxacnhan1($customer_id);
									echo $check_cart;
									
								?>
    						</a>
			    		</span>&nbsp;&nbsp;&nbsp;&nbsp;
			    		<span>
			    			<a href="dh_danhan.php" style="color: yellowgreen;  ">Đã nhận</a>
			    			<a class="btn btn-warning" href="" style="color: #0b168a; font-weight: bold">
    							<?php
    								$customer_id = Session::get('customer_id'); 
									$check_cart = $ct->check_order_choxacnhan2($customer_id);
									echo $check_cart;
									
									
								?>
    						</a>
			    		</span>&nbsp;&nbsp;&nbsp;&nbsp;
			    		<span>

			    			<a href="dh_dahuy.php"style="color: yellowgreen;  ">Đã hủy</a>
			    			<a class="btn btn-warning" href="" style="color: #0b168a; font-weight: bold">
    							<?php
    								$customer_id = Session::get('customer_id'); 
									$check_cart = $ct->check_order_choxacnhan3($customer_id);
									
									echo $check_cart;
									
								?>
    						</a>
			    		</span>&nbsp;&nbsp;&nbsp;&nbsp;
			</span>
    	</div>
    	<div class="cartoption">		
			<div class="cartpage">

						<table >
							
							<?php
							$customer_id = Session::get('customer_id');  

							$get_cart_ordered = $ct->get_cart_ordered1($customer_id);
							if($get_cart_ordered){
								$i=0;
								$qty = 0;
								while ($result = $get_cart_ordered->fetch_assoc()) {
								$i++;
							 ?>
							<tr >
								<td style="float: left; "><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" width="200px"/></td>
								<td style="margin-left: auto; font-size: 20px; color: red;"><?php echo 'Giá : '.$fm->format_currency($result['price']).' VND' ?></td>
								<td> &ensp; </td>
								<?php
									$date=$result['date_order'];
									$demslsp=$ct->dem_get_cart_ordered1($customer_id, $date);
									
								?>
								<td style="font-size: 20px; "><?php echo 'Số lượng sản phẩm : '. $demslsp ?></td>
							</tr>
							<tr>
								<td style="background: white; float: left; font-size: 30px; text-align: center;"><?php echo $result['productName'] ?></td>
								<td> &ensp; </td>
								

							</tr>
							<tr>
								<td><?php echo 'Ngày đặt: '.$fm->formatDate($result['date_order'])  ?></td>

								<td style="float: right;">
								 	<a class="btn btn-warning" href="?confirmid=<?php echo $customer_id ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>"><i class="fab fa-accusoft"></i> Đã nhận được hàng</a>
								 	<a class="btn btn-warning" href="chitietdonhang.php?date_order=<?php echo $result['date_order'] ?>"><i class="fas fa-info-circle"></i> Chi tiết đơn hàng</a>
								 </td>
							</tr>
							<tr>
								 <td> <hr></td>
							</tr>


							<?php 							
								}
							}
							 ?>

	
						</table>
						
					</div>
					<div class="shopping">
						<div class="shopleft">
                            <a href="index.php">
                                <button type="button" style="background: #388306;border-radius: 10px; color: #e6ff00; font-size: 15px; font-weight: bold; width: 200px;height: 50px; float:left; margin-left: 550px"><i class="fas fa-backward"></i> Tiếp tục mua sắm</button>
                            </a>
						</div>

						<!-- <div class="shopright">
							<a href="payment.php"> <button type="button" class="btn btn-danger" style="float: right;">Chi tiết đơn hàng</button></a>
						</div> -->
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>

<?php 
	include 'inc/footer.php';
 ?>

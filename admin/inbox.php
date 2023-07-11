<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../classes/cart.php');
	include_once ($filepath.'/../helpers/format.php');
 ?>
 <?php
    $ct = new cart();
    if(isset($_GET['shiftid'])){
    	$id = $_GET['shiftid'];
    	$proid = $_GET['proid'];
    	$qty = $_GET['qty'];
    	$time = $_GET['time'];
    	
    	$shifted = $ct->shifted($id,$proid,$qty,$time);
    }

    if(isset($_GET['delid'])){
    	$id = $_GET['delid'];

    	$time = $_GET['time'];
    	$price = $_GET['price'];
    	$del_shifted = $ct->del_shifted($id,$time,$price);
    }
 
  ?>
        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Đơn hàng</h2>
                <div class="block">
                <?php 
                if (isset($shifted)) {
                	echo $shifted;
                }
                 ?> 
                <?php 
                if (isset($del_shifted)) {
                	echo $del_shifted;
                }
                 ?>         
<!--                    <table class="data display datatable" id="example">-->
                    <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
					<thead>
						<tr ">
							<th>STT</th>
							<th>Ngày đặt hàng</th>
							<th>Sản phẩm</th>
							<th>Trạng thái</th>
							<th>Giá</th>
							<th>Khách hàng</th>
							<th>Địa chỉ</th>
							<th>Chi tiết đơn hàng</th>
							
						</tr>
					</thead>
					<tbody>
						<?php 
						$ct = new cart();
						$fm = new Format();
						$get_inbox_cart = $ct -> get_inbox_cart();
						if ($get_inbox_cart) {
							$i=0;
							while ($result = $get_inbox_cart->fetch_assoc()) {
								$i++;
							
						 ?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $fm->FormatDate($result['date_order']); ?></td>
							<td><?php echo $result['productName'] ?> </td>
							<?php

									$date=$result['date_order'];
									$customer_id=$result['customer_id'];
									$demslsp=$ct->dem_get_cart_ordered($customer_id, $date);

							?>
							<td>
                                <?php
                                if($demslsp==0)
                                    echo 'Đã xử lý';
                                else
                                    echo 'Chưa xử lý';
                                    ?>

                            </td>
							<td><?php echo $fm->format_currency($result['price']).' VND' ?></td>
							<td><?php echo $result['name'] ?></td>
							<td><a style="color: #e05353" href="customer.php?customerid=<?php echo $result['customer_id'] ?>">Xem khách hàng</a></td>
							<td><a style="color: #e05353" href="chitietdonhang.php?date_order=<?php echo $result['date_order'] ?>&customer_id=<?php echo $result['customer_id'] ?>">Xem chi tiết đơn hàng</a></td>
						
						</tr>
						<?php 
						}
						}
						 ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<!--<script type="text/javascript">-->
<!--    $(document).ready(function () {-->
<!--        setupLeftMenu();-->
<!---->
<!--        $('.datatable').dataTable();-->
<!--        setSidebarHeight();-->
<!--    });-->
<!--</script>-->
<script>
    $(document).ready(function() {
        var datatablephp = $('#dataid').DataTable();
    });
</script>
<?php include 'inc/footer.php';?>

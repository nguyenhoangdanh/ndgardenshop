<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/cart.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php require_once '../helpers/format.php'; ?>
<?php 
	$pd = new product();
	$fm = new Format();
	if(!isset($_GET['productid']) || $_GET['productid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['productid']; // Lấy catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }
 ?>
<div class="grid_10">
    <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c">Quản lý kho</h2>
        <div class="block">
            <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Mã sản phẩm</th>
					<th>Tên sản phẩm</th>
				
					<th>Số lượng ban đầu</th>
					<th>Đã bán</th>
				
					<th>Số lượng trước nhập</th>
					<th>Số lượng thêm</th>
					<th>Số lượng sau nhập</th>
					
					<th width="20%">Ngày nhập</th>

					
					
				</tr>
			</thead>
			<tbody>
				<?php 
				
				$pdlist = $pd->show_product_warehouse();
				$i = 0;
				
				
					if($pdlist){
					
							while ($result = $pdlist->fetch_assoc()){
								$i++;
									
									
				 ?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
					<td><?php echo $result['product_code'] ?></td>
					<td><?php echo $result['productName'] ?></td>
					
					<td>
						<?php echo $result['productQuantity'] ?>

					</td>
					<td>
						<?php echo $result['product_soldout'] ?>

					</td>
					
					<td>
						<?php echo $result['product_remain'] - $result['sl_nhap'] ?>

					</td>
					<td>
						<?php echo $result['sl_nhap'] ?>

					</td>
					<td>
						<?php echo $result['product_remain'] ?>

					</td>
					<td>
						<?php echo $result['sl_ngaynhap'] ?>

					</td>
					
					
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
<!--        $('.datatable').dataTable();-->
<!--		setSidebarHeight();-->
<!--    });-->
<!--</script>-->
<script>
    $(document).ready(function() {
        var datatablephp = $('#dataid').DataTable();
    });
</script>
<?php include 'inc/footer.php';?>

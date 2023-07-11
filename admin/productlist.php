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
	if(!isset($_GET['del_id']) || $_GET['del_id'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['del_id']; // Lấy catid trên host
        $delProduct = $pd -> del_product($id); // hàm check delete Name khi submit lên
    }
 ?>
<div class="grid_10">
    <div class="box round first grid" style="background: #f8fcf9;height: 1200px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c">Danh sách sản phẩm</h2>
        <div class="block">

<!--            <table class="data display datatable" id="example">-->
            <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th width="5%">ID</th>
<!--					<th>Code</th>-->
					<th width=15"%">Tên sản phẩm</th>
					<th width="10%">Nhập hàng</th>
					<th width="5%">Số lượng nhập</th>
					<th width="5%">Đã bán</th>
					<th width="5%">SL Tồn</th>
					<th width="10%">Giá</th>
					<th width="10%">Hình ảnh</th>
					<th width="10%">Danh mục</th>
					<th width="10%">Thương hiệu</th>
					
					<th width="10%">Loại</th>
					<th width="10%">Xử lý</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				
				$pdlist = $pd->show_product();
				$i = 0;
				
				
					if($pdlist){
					
							while ($result = $pdlist->fetch_assoc()){
								$i++;
									
									
				 ?>
				<tr class="odd gradeX">
					<td><?php echo $i ?></td>
<!--					<td>--><?php //echo $result['product_code'] ?><!--</td>-->
					<td><?php echo $result['productName'] ?></td>
					<td><a style="color: #f50f07" href="productmorequantity.php?productid=<?php echo $result['productId'] ?>">Nhập hàng</a></td>
					<td>
						<?php echo $result['productQuantity'] ?>

					</td>
					<td>
						<?php echo $result['product_soldout'] ?>

					</td>
					<td>
						<?php echo $result['product_remain'] ?>

					</td>
					<td><?php echo $result['price'] ?></td>
					<td><img src="uploads/<?php echo $result['image'] ?>" width="80"></td>
					<td><?php echo $result['catName'] ?></td>
					<td><?php echo $result['brandName'] ?></td>
					
					<td><?php 
						if($result['type']==1){
							echo 'Nổi bật';
						}else{
							echo 'Không Nổi Bật';
						}

					?></td>
					
					<td><a  class="btn btn-primary btn-lg" href="productedit.php?productid=<?php echo $result['productId'] ?>">  <i  class="fas fa-edit"></i></a> <a class="btn btn-danger btn-lg" href="?del_id=<?php echo $result['productId'] ?>"><i class="fas fa-trash"></i> </a></td>
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

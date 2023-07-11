
<?php
	include 'inc/header.php';

   // include "inc/slider.php";

 ?>	

 <div class="main">
    <div class="content"  style="background:#0e4832">
    	<div class="content_top" style="background: #286950;">
    		<div class="heading" >
    		<h3 style="color: greenyellow;">Sản phẩm nối bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
	      	$product_featheread = $product->getproduct_featheread();
	      	if($product_featheread){
	      		while ($result = $product_featheread->fetch_assoc()) {
	      			      	
	      	 ?>
				<div class="grid_1_of_4 images_1_of_4" style="background: #c6e8c0; border-color:#0066ff; text-align: center;
				margin-left: 10px;margin-right: 10px;margin-top: 25px; margin-bottom: 10px; width: 235px; height: 320px;  border-radius: 3px;">
                    <h2 class="btn btn-success btn-sm" style="color:#e6ff00;font-weight:bold;width: 200px;  "><?php echo $result['productName'] ?></h2>
                    <a href="details.php?proid=<?php echo $result['productId'] ?>"> <img style="height: 150px; width: 150px;" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>

<!--					 <p>--><?php //echo $fm->textShorten($result['product_desc'], 200) ?><!--</p>-->
					 <p><span style="color: #f50f07; font-weight: bold" class="price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></span></p>
				     <div class="button"><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></div>
				</div>
				<?php 
				}
				}
				 ?>
			</div>
			<div class="content_bottom" style="background: #286950; ">
    		<div class="heading">
    		<h3 style="color: #dcef2d;">Sản phẩm mới cập nhật</h3>
    		</div>

    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php 
	      	$product_new = $product->getproduct_new();
	      	if($product_new){
	      		while ($result_new = $product_new->fetch_assoc()) {
	      			      	
	      	 ?>
                    <div class="grid_1_of_4 images_1_of_4" style="background: #c6e8c0; border-color:#0066ff;
				margin-left: 10px;margin-right: 10px;margin-top: 25px; margin-bottom: 10px; width: 235px; height: 320px;  border-radius: 3px;">
                        <h2 class="btn btn-success btn-sm" style="color:#e6ff00;font-weight:bold;width: 200px;  "><?php echo$result_new['productName'] ?></h2>
                        <a href="details.php?proid=<?php echo $result_new['productId'] ?>"> <img style="height: 150px; width: 150px;" src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>

                        <!--					 <p>--><?php //echo $fm->textShorten($result['product_desc'], 200) ?><!--</p>-->
                        <p><span  style="color: #f50f07; font-weight: bold" class="price"><?php echo $fm->format_currency($result_new['price'])." "."VND" ?></span></p>
                        <div class="button">

                            <a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a>

                        </div>

                    </div>
			<?php 
				}
				}
			?>



			</div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
 ?>

<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
<?php
     
    if(!isset($_GET['catid']) || $_GET['catid'] == NULL){
        echo "<script> window.location = '404.php' </script>";
        
    }else {
        $id = $_GET['catid']; // Lấy catid trên host
    }
    // gọi class category
    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    //     $catName = $_POST['catName'];
    //     $updateCat = $cat -> update_category($catName,$id); // hàm check catName khi submit lên
    // }
    
  ?>
 <div class="main">
    <div class="content">
    	<div class="content_top" style="background: #527585;">
    		<?php 
	      	$name_cat = $cat->get_name_by_cat($id);
	      	if ($name_cat) {
	      		while ($result_name = $name_cat->fetch_assoc()) {
	      			# code...
	      		
	      	 ?>
    		<div class="heading" >
    		<h3 style="color: white;">Danh mục: <?php echo $result_name['catName'] ; ?></h3>
    		</div>
    		<?php 
				}
	      	}
			?>
    		<div class="clear"></div>
    	</div>
	      <div class="section group" style="background: #0e4832;">
	      	<?php 
	      	$productbycat = $cat->get_product_by_cat($id);
	      	if ($productbycat) {
	      		while ($result = $productbycat->fetch_assoc()) {
	      			# code...
	      		
	      	 ?>
                    <div class="grid_1_of_4 images_1_of_4" style="background: #c6e8c0; border-color:#0066ff; text-align: center;
				margin-left: 10px;margin-right: 10px;margin-top: 25px; margin-bottom: 10px; width: 235px; height: 320px;  border-radius: 3px;">
                        <h2 class="btn btn-success btn-sm" style="color:#e6ff00;font-weight:bold;width: 200px;  "><?php echo $result['productName'] ?></h2>
                        <a href="details.php?proid=<?php echo $result['productId'] ?>"> <img style="height: 150px; width: 150px;" src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>

                        <!--					 <p>--><?php //echo $fm->textShorten($result['product_desc'], 200) ?><!--</p>-->
                        <p><span class="btn-success" style="color: #6dff0c; font-weight: bold" class="price"><?php echo $fm->format_currency($result['price'])." "."VND" ?></span></p>
                        <div class="button"><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></div>
                    </div>
				<?php 
				}
	      	}else {
	      		echo "Sản phẩm này hiện chưa có trong danh mục";
	      	}
				 ?>
			</div>

	
	
    </div>
 </div>

<?php 
	include 'inc/footer.php';
 ?>
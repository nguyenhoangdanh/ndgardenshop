<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/brand.php';  ?>
<?php
    $brand = new brand(); 
    if(!isset($_GET['brandid']) || $_GET['brandid'] == NULL){
        echo "<script> window.location = 'brandlist.php' </script>";
        
    }else {
        $id = $_GET['brandid']; // Lấy catid trên host
    }
    // gọi class category
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $brandName = $_POST['brandName'];
        $updateBrand = $brand -> update_brand($brandName,$id); // hàm check catName khi submit lên
    }
    
  ?>
        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Sửa thương hiệu</h2>
               <div class="block copyblock"> 
                <?php 
                    if(isset($updateBrand)){
                        echo $updateBrand;
                    }
                 ?>
                 <?php 
                    $get_brand_name = $brand->getbrandbyId($id);
                    if($get_brand_name){
                        while ($result = $get_brand_name->fetch_assoc()) {
                            
                        
                  ?>
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $result['brandName']; ?>" name="brandName" placeholder="Sửa thương hiệu sản phẩm..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Edit" />
                            </td>
                        </tr>
                    </table>
                    </form>

                    <?php 
                        }
                    }

                     ?>

                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
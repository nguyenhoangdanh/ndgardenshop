<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include '../classes/category.php';  ?>
<?php
    // gọi class category
    $cat = new category(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $catName = $_POST['catName'];
        $insertCat = $cat -> insert_category($catName); // hàm check catName khi submit lên
    }
  ?>
        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Thêm danh mục</h2>
               <div class="block copyblock" style="background: #99b7ac">
                <?php 
                    if(isset($insertCat)){
                        echo $insertCat;
                    }
                 ?>
                 <form  action="catadd.php" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name="catName" placeholder="Thêm danh mục sản phẩm..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input  class="btn btn-warning" type="submit" name="submit" value="Thêm" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<?php include 'inc/footer.php';?>
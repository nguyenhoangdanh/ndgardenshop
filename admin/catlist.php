<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php
    // gọi class category
    $cat = new category();     
    if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['delid']; // Lấy catid trên host
        $delCat = $cat -> del_category($id); // hàm check delete Name khi submit lên
    }
 ?>

        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Danh mục sản phẩm</h2>
                <div class="block">  
                <?php 
                    if(isset($delCat)){
                        echo $delCat;
                    }
                 ?>      
<!--                    <table class="data display datatable" id="example">-->
                    <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên danh mục</th>
							<th>Xử lý</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$show_cat = $cat -> show_category();
							if($show_cat){
								$i = 0;
								while($result = $show_cat -> fetch_assoc()){
									$i++;
								
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['catName']; ?></td>
							<td><a class="btn btn-primary btn-lg" href="catedit.php?catid=<?php echo $result['catId']; ?>"> <i class="fas fa-edit"></i></a>  <a class="btn btn-danger btn-lg" onclick = "return confirm('Are you want to delete???')" href="?delid=<?php echo $result['catId'] ?>"><i class="fas fa-trash"></i></a></td>
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
<!--	$(document).ready(function () {-->
<!--	    setupLeftMenu();-->
<!---->
<!--	    $('.datatable').dataTable();-->
<!--	    setSidebarHeight();-->
<!--	});-->
<!--</script>-->
<script>
    $(document).ready(function() {
        var datatablephp = $('#dataid').DataTable();
    });
</script>
<?php include 'inc/footer.php';?>


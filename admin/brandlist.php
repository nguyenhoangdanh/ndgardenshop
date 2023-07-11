<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php';  ?>
<?php
    // gọi class category
    $brand = new brand();     
    if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['delid']; // Lấy catid trên host
        $delbrand = $brand -> del_brand($id); // hàm check delete Name khi submit lên
    }
 ?> 

        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Danh sách Loại sản phẩm</h2>
                <div class="block">  
                <?php 
                    if(isset($delbrand)){
                        echo $delbrand;
                    }
                 ?>      
<!--                    <table class="data display datatable" id="example">-->
                    <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Loại sản phẩm</th>
							<th>Xử lý</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$show_brand = $brand -> show_brand();
							if($show_brand){
								$i = 0;
								while($result = $show_brand -> fetch_assoc()){
									$i++;
								
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['brandName']; ?></td>
							<td><a class="btn btn-primary btn-lg" href="brandedit.php?brandid=<?php echo $result['brandId']; ?>"> <i class="fas fa-edit"></i></a>  <a class="btn btn-danger btn-lg" onclick = "return confirm('Are you want to delete???')" href="?delid=<?php echo $result['brandId'] ?>"><i class="fas fa-trash"></i></a></td>
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


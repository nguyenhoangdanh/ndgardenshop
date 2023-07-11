<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
include '../classes/product.php';
$product=new product();
?>
<div class="grid_10" >
    <div class="box round first grid" style="background: #f8fcf9;height: 1200px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c; font-size: 20px">Thống kê doanh thu theo ngày</h2>
        <div>

            <form  method="post">
                		<span style="font-size: 20px">
	                		<input type="date" name="tungay">
	                		<input type="submit" name="submit" value="Thống Kê">
                		</span>

                <span style="font-size: 20px">
                			Đã bán được:
                			<?php
                            if(isset($_POST['submit']))
                            {
                                $tk=$_POST['tungay'];
                                $daban=$product->dabanhomnay($tk);
                                $sl=$daban->fetch_assoc();
                                echo $sl['daban'];
                            }

                            ?>
                		</span>
            </form>


        </div>
        <table style=" font-size: 15px; background: #9cdac3" id="dataid" class="table table-striped table-bordered">
            <th>STT</th>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Ngày bán</th>
            <tbody>
            <?php
            if(isset($_POST['submit']))
            {
                $tk=$_POST['tungay'];

                $date = $product -> thongketheongay($tk);
                if($date){
                    $i = 0;
                    while($result = $date -> fetch_assoc()){
                        $i++;

                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><img src="uploads/<?php echo $result['image'] ?>" width="80"></td>
                            <td><?php echo $result['productName']; ?></td>
                            <td><?php echo $result['quantity']; ?></td>
                            <td><?php echo $result['price']; ?></td>
                            <td><?php echo $result['date_order']; ?></td>

                        </tr>
                        <?php
                    }
                }
            }else
            {
                echo "Không có sản phẩm nào!";
            }
            ?>


            </tbody>
        </table>


    </div>
</div>
<script>
    $(document).ready(function() {
        var datatablephp = $('#dataid').DataTable();
    });
</script>
<?php include 'inc/footer.php';?>

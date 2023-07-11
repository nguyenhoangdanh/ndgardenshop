<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/brand.php'; ?>
<?php include '../classes/customer.php'; ?>
<?php
    // gọi class category
    $customer = new customer();     
    if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
        // echo "<script> window.location = 'catlist.php' </script>";
        
    }else {
        $id = $_GET['delid']; // Lấy catid trên host
        $delcustomer = $customer -> del_customer($id); // hàm check delete Name khi submit lên
    }

 ?>
        <?php
        if(isset($_GET['id_customer'])){
            $id = $_GET['id_customer'];

            $update_level = $customer->update_level($id);
        }
        ?>
        <?php
        if(isset($_GET['id_kichhoat'])){
            $id = $_GET['id_kichhoat'];

            $update_level = $customer->update_level1($id);
        }
        ?>

        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Thông tin người dùng</h2>
                <div class="block">     
<!--                   <div><button style="color: black; padding: 5px;margin-bottom: 5px; background: #d2b316;"><a href="customeradd.php" style="color: white;">Thêm người dùng</a></button></div>-->
<!--                    <table class="data display datatable" id="example">-->
                    <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="2%">STT</th>
                            <th width="10%">Họ tên</th>
                            <th width="25%">Địa chỉ</th>
                            <th width="10%">Thành phố</th>
                            <th width="5%">Quốc gia</th>
                            <th width="8%">Mã bưu điện</th>
                            <th width="10%">Số điện thoại</th>
                            <th width="15%">Email</th>
                            <th width="5%">Trạng thái</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                
                            $pdlist = $customer->show_customer();
                             $i = 0;


                              if($pdlist){
                    
                                 while ($result = $pdlist->fetch_assoc()){
                                  $i++;
                                    
                                    
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['address']; ?></td>
                            <td><?php echo $result['city']; ?></td>
                            <td><?php echo $result['country']; ?></td>
                            <td><?php echo $result['zipcode']; ?></td>
                            <td><?php echo $result['phone']; ?></td>
                            <td><?php echo $result['email']; ?></td>

                            <?php
                            if($result['level']==0){


                                ?>
                                <td>
                                    <a href="?&id_customer=<?php echo $result['id'] ?>">Khóa</a>
                                </td>
                                <?php
                            }else
                            {
                                ?>
                                <td>
                                    <a href="?&id_kichhoat=<?php echo $result['id'] ?>">Kích hoạt</a>
                                </td>

                                <?php
                            }
                            ?>

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


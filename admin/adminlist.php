<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/admin.php');

?>
<?php
// gọi class category
$ad = new Admin();
if(!isset($_GET['delid']) || $_GET['delid'] == NULL){
    // echo "<script> window.location = 'catlist.php' </script>";

}else {
    $id = $_GET['delid']; // Lấy catid trên host

    $del_admin = $ad -> del_admin($id); // hàm check delete Name khi submit lên
}
?>
<?php
if(isset($_GET['id_admin'])){
    $id = $_GET['id_admin'];

    $update_level = $ad->update_status($id);
}
?>
<?php
if(isset($_GET['id_kichhoat'])){
    $id = $_GET['id_kichhoat'];

    $update_level = $ad->update_status1($id);
}
?>

<div class="grid_10">
    <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px white; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c">Danh sách người dùng</h2><br>

        <div class="block">
            <?php
            if(isset($del_admin)){
                echo $del_admin;
            }
            ?>

            <table style=" font-size: 15px;" id="dataid" class="table table-striped table-bordered">
                     <thead style=" background: #6dabea; height: 30px">
                <tr>
                    <th width="5%" >STT</th>
                    <th width="23%" >Họ và tên</th>
                    <th width="25%">Email</th>
                    <th width="15%">UserName</th>
                    <th width="10%">Loại người dùng</th>

                    <th width="10%">Trạng thái</th>
                    <th width="12%">Xử lý</th>
<!--                    <th ><a href="adminadd.php"><button style="background: #54bdc7; border-radius: 10px;"> <i class="fas fa-plus"></i></button></a></th>-->
                </tr>
                </thead>
                <tbody>
                <?php
                $show_admin = $ad -> show_admin();
                if($show_admin){
                    $i = 0;
                    while($result = $show_admin -> fetch_assoc()){
                        $i++;

                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['adminName']; ?></td>
                            <td><?php echo $result['adminEmail']; ?></td>
                            <td><?php echo $result['adminUser']; ?></td>

                            <td>
                                <?php
                                if($result['level']==1)
                                {
                                    echo "Quản trị viên";
                                }
                                else{
                                    echo "Nhân viên";
                                }
                                ?>
                            </td>

                            <?php
                            if($result['status']==0){


                                ?>
                                <td>
                                    <a href="?&id_admin=<?php echo $result['adminId'] ?>">Khóa</a>
                                </td>
                                <?php
                            }else
                            {
                                ?>
                                <td>
                                    <a href="?&id_kichhoat=<?php echo $result['adminId'] ?>">Kích hoạt</a>
                                </td>

                                <?php
                            }
                            ?>

                            <td>
                                <a class="btn btn-primary btn-lg" href="adminedit.php?admindid=<?php echo $result['adminId']; ?>"> <i class="fas fa-edit"></i></a>  <a class="btn btn-danger btn-lg" onclick = "return confirm('Are you want to delete???')" href="?delid=<?php echo $result['adminId'] ?>"><i class="fas fa-trash"></i></a><a href="changepassword.php?adminid=<?php echo $result['adminId']; ?>">
                                    <button class="btn btn-warning btn-lg" style=" border-radius: 2px;"><i class="fas fa-key"></i></button></a>
<!--                                <a href="adminedit.php?admindid=--><?php //echo $result['adminId']; ?><!--">Edit</a> || <a onclick = "return confirm('Are you want to delete???')" href="?delid=--><?php //echo $result['adminId'] ?><!--">Delete</a>-->
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


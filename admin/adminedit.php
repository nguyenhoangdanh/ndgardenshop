<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php include_once '../classes/admin.php'; ?>
<?php
// gọi class category


$ad = new Admin();
if(!isset($_GET['admindid']) || $_GET['admindid'] == NULL){
    //echo "<script> window.location = 'adminlist.php' </script>";

}else {
    $id = $_GET['admindid']; // Lấy Admin trên host
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $adminName = $_POST['name'];
    $adminEmail = $_POST['email'];
    $adminUser = $_POST['user'];
    $level = $_POST['level'];
    $status = $_POST['status'];
    $updateAdmin = $ad -> update_admin( $id, $adminName, $adminEmail,$adminUser,$level, $status ); // hàm check catName khi submit lên
}
?>

<div class="grid_10">
    <div class="box round first grid" style="background: #f8fcf9;height: 800px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c">Thông tin người dùng</h2>
        <div  style="background: #99b7ac; margin-top: 100px; height: 300px; width: 600px; margin: 0 auto">

            <table class="data display datatable" id="example">
                <?php
                if(isset($updateAdmin)){
                    echo $updateAdmin;
                }
                ?>
                <?php
                $get_admin = $ad->getadminbyId($id);
                if($get_admin){
                while ($result = $get_admin->fetch_assoc()) {
                ?>
                <form action="" method="post" style="background: #0c84ff; border-radius: 10px">

                    <tr style="font-size: 15px; margin-left: 100px">
                        <td>
                            <label>Họ và tên</label>
                            <input style="width: 400px;margin-left: 50px" type="text" value="<?php echo $result['adminName']; ?>" name="name" placeholder="nhập họ tên"  />
                        </td>
                    </tr>
                    <tr style="font-size: 15px; margin-left: 50px; ">
                        <td>
                            <label>Email</label>
                            <input style="width: 400px; margin-left: 80px"  type="text" value="<?php echo $result['adminEmail']; ?>" name="email" placeholder="nhập email"  />
                        </td>
                    </tr>
                    <tr style="font-size: 15px; margin-left: 40px">
                        <td>
                            <label>UserName</label>
                            <input style="width: 400px;margin-left: 50px" type="text" value="<?php echo $result['adminUser']; ?>" name="user" placeholder="nhập username" />
                        </td>
                    </tr>

                    <tr style="font-size: 15px; margin-left: 100px">
                        <td>
                            <label>Loại người dùng</label>
                            <select id="select" name="level">
                                <option>Select Type</option>
                                <?php
                                if($result['level']==0)
                                {
                                    ?>
                                    <option  value="1">Quản trị viên</option>
                                    <option selected value="0">Nhân viên</option>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <option selected value="1">Quản trị viên</option>
                                    <option  value="0">Nhân viên</option>
                                    <?php
                                }
                                ?>

                            </select>
                        </td>
                    </tr>
                    <tr style="font-size: 15px; ">
                        <td>
                            <label>Trạng thái</label>
                            <select id="select" name="status">
                                <option>Select Type</option>
                                <?php
                                if($result['status']==0)
                                {
                                    ?>
                                    <option  value="0">Khóa</option>
                                    <option selected value="1">Kích hoạt</option>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <option selected value="1">Khóa</option>
                                    <option  value="0">Kích hoạt</option>
                                    <?php
                                }
                                ?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-left: 200px">
                            <input class="btn btn-warning btn-lg" type="submit" name="submit" Value="Cập nhật" />
                            <a class="btn btn-danger btn-lg" href="adminlist.php"><i  class="fas fa-backward"></i></a>
                        </td>
                    </tr>

                </form>
                    <?php
                }
                }

                ?>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>



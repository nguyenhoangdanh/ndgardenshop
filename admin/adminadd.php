<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../classes/admin.php');

?>
<?php
    // gọi class category
$ad = new Admin();
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST

        $insertadmin = $ad->insertadmin($_POST); // hàm check catName khi submit lên
    }
  ?> 
        <div class="grid_10">
            <div class="box round first grid" style="background: #f8fcf9; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c">Thêm người dùng trang quản trị</h2>
               <div class="block copyblock" style="background: #99b7ac">
                <?php 
                    if(isset($insertadmin)){
                        echo $insertadmin;
                    }
                 ?>
                 <form action="adminadd.php" method="post" >
                    <table class="form">
                        <tr>
                            <td>
                            	<label>Họ và tên</label>
                                <input type="text" name="adminName" placeholder="nhập họ tên"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Email</label>
                                <input type="text" name="adminEmail" placeholder="nhập email"  />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>UserName</label>
                                <input type="text" name="adminUser" placeholder="nhập username" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <label>Password</label>
                                <input type="password" name="adminPass" placeholder="nhập password" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Loại người dùng</label>
                                <select id="select" name="level">
                                    <option>Chọn</option>
                                    <option value="1">Quản trị viên</option>
                                    <option value="0">Nhân viên</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Trạng thái</label>
                                <select id="select" name="status">
                                    <option>Chọn</option>
                                    <option value="1">Kích hoạt</option>
                                    <option value="0">Khóa</option>
                                </select>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Thêm" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>

            </div>
        </div>
<?php include 'inc/footer.php';?>
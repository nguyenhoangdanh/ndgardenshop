<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/category.php';  ?>
<?php include '../classes/brand.php';  ?> 
<?php include '../classes/product.php';  ?>
<?php include '../classes/customer.php';  ?>
<?php
    // gọi class category
   $customer = new customer(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city=$_POST['city'];
        $country = $_POST['country'];
        $mabuudien=$_POST['mabuudien'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $insertBrand = $customer -> insert_customers($name, $address,$city,$country,$mabuudien, $phone, $email,$password); // hàm check catName khi submit lên
    }
  ?>
<div class="grid_10">
    <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
        <h2 style="background: #657a5d; color: #27d36c">Thêm người dùng</h2>
        <?php 
            if(isset($insertCustomer)){
                echo $insertCustomer;
            }
         ?>   
        <div class="block" style="background: #99b7ac; width: 600px; height: 400px; margin:  0 auto" >

         <form action="customeradd.php" style="background: #99b7ac" method="post" enctype="multipart/form-data">
            <table class="form">
                <tr>
                    <td>
                        <label>Họ và tên</label>
                    </td>
                    <td style="width: 400px">
                        <input name="name" type="text" placeholder="Nhập họ tên " class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Địa chỉ</label>
                    </td>
                    <td>
                        <input name="address" type="text" placeholder="Nhập địa chỉ" class="medium" />
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Thành phố</label>
                    </td>
                    <td>
                        <input name="city" type="text" placeholder="Nhập thành phố" class="medium" />
                    </td>
                </tr>
                 <tr>
                    <td>
                        <label>Quốc gia</label>
                    </td>
                    <td>
                        <input name="country" type="text" placeholder="Nhập quốc gia" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Mã bưu điện</label>
                    </td>
                    <td>
                        <input name="mabuudien" type="text" placeholder="Nhập mã bưu điện" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số điện thoại</label>
                    </td>
                    <td>
                        <input name="phone" type="text" placeholder="Nhập số điện thoại" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input name="email" type="text" placeholder="Nhập email" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input name="password" type="password" placeholder="Nhập password" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td >
                       <input class="btn btn-warning" type="submit" name="submit" Value="Thêm" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>



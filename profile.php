<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
 <?php 
	  $login_check = Session::get('customer_login');
	  if ($login_check==false) {
	  	echo "<script>window.open('login.php','_self')</script>";
	  }
	   ?>
<?php 
	// if(!isset($_GET['proid']) || $_GET['proid'] == NULL){
 //        echo "<script> window.location = '404.php' </script>";
        
 //    }else {
 //        $id = $_GET['proid']; // Lấy productid trên host
 //    }

 //    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
 //        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
 //        $quantity = $_POST['quantity'];
 //        $AddtoCart = $ct -> add_to_cart($id, $quantity); // hàm check catName khi submit lên
 //    } 
 ?>
<?php
      $id = Session::get('customer_id');
       if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $pascu=$_POST['txtmatkhaucu'];
        $pasmoi=$_POST['txtmatkhau'];
        if($cs->kiemtrapass($pascu, $id) == '')
        {
            echo "<script>alert('Mật khẩu củ không chính xác!');</script>";
        }
        else{
        $Updatepass = $cs -> changepass($pasmoi, $id); 
        echo "<script>alert('Đổi mật khẩu hoàn tất');</script>";
    }
    // hàm check catName khi submit lên
    } 
?>


 <div class="main" >
    <div class="content" style="background: #d5e6ed;; float: none;">
    		<div class="content_top">
        		<div class="heading">
        		<h3 style="color: black;">Thông tin cá nhân</h3>
        		</div>
        		<div class="clear"></div>
        	</div>
        <div style="float: none;">
        	<form style="float: none; text-align: center; color: black; ">
        		<?php 
        		$id = Session::get('customer_id');
        		$get_customers = $cs->show_customers($id);
        		if ($get_customers) {
        			while ($result = $get_customers->fetch_assoc()) {
        			
        		 ?>

                 <div style="float: none;">
                       <img style="width: 100px; height: 100px;  border: 1px #d4d4d4 solid;padding: 7px;border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%; " src="images/<?php echo $result['image'] ?>" alt="" />
                 </div> 


        		<div style="font-size: 30px; font-weight: bold; font-family: Verdana;">
        			<?php echo $result['name']; ?>
        		</div>
                <table class="tblone" style="font-family: Lucida Console;border-color: #00cd5a; width: 800px; margin: 0 auto">
                    <tr style="background: #93b9e3">
                        <td>City</td>
                        <td>:</td>
                        <td><?php echo $result['city']; ?></td>
                        
                    </tr>
                    <tr style="background: #eea5a5">
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $result['phone']; ?></td>
                        
                    </tr>
                    <tr style="background: #93b9e3">
                        <td>Country</td>
                        <td>:</td>
                        <td><?php echo $result['country']; ?></td>
                    </tr>
                    <tr style="background: #eea5a5">
                        <td>Zipcode</td>
                        <td>:</td>
                        <td><?php echo $result['zipcode']; ?></td>
                        
                    </tr>
                    <tr style="background:#93b9e3">
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $result['email']; ?></td>
                        
                    </tr>
                    <tr style="background: #eea5a5">
                        <td>Address</td>
                        <td>:</td>
                        <td><?php echo $result['address']; ?></td>
                        
                    </tr>

                </table >
        		<br>
               
                <div id="buttonthem" style="font-size: 20px;">
                    <td colspan="3"><a class="btn btn-primary" href="editprofile.php"><i class="fas fa-edit"></i> Cập nhật thông tin</a></td>
                    <td >
                        <a style="margin: 0 auto;" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span><i class="fas fa-key"></i> Đổi mật khẩu</a>
                    </td>
                </div>
        		
        		<?php 
        		}
        		}
        		 ?>
        	</form> 
        </div>	
    	
<!--        <div id="buttonthem">-->
<!---->
<!---->
<!--        </div>-->
        <div id="formthem">
            <div class="content_top">

                <h3 style="color: black; margin-bottom: 50px;  width: 300px; margin: 0 auto">Thay đổi mật khẩu</h3>

                <div class="clear"></div>
                  
                <form method="post" action="profile.php" style="border-color: #00cd5a; width: 800px; margin: 0 auto">

                    
                     <div class="form-group"> 
                       <label style="color: black;">Mật khẩu cũ</label>
                       <input class="form-control" type="password" name="txtmatkhaucu">
                      
                     </div>
                     <div class="form-group"> 
                       <label style="color: black;">Mật khẩu mới</label> 
                       <input class="form-control" type="password" name="txtmatkhau">
                      
                     </div> 
                     <!-- <div class="form-group"> 
                       <label>Nhập lại mật khẩu mới</label> 
                       <input class="form-control" type="password" name="txtmatkhaunhaplai">
                      
                     </div> -->
                     
                    <div class="form-group" style="margin-left:340px; margin-right: 340px">
                     <input class="btn btn-primary" type="submit" value="Cập nhật" name="submit">
                     <input class="btn btn-warning" type="reset" value="Hủy"></div>
                     
                 </form>
             </div>
        </div>
 	</div>

<script>
$(document).ready(function(){
    $("#formthem").hide();
    $("#buttonthem").click(function(){
        $("#formthem").toggle(1000);
    });
});
</script>

<?php 
	include 'inc/footer.php';
 ?>
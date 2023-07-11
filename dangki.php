<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
 <?php 
	$login_check = Session::get('customer_login');
	if ($login_check) {
		echo "<script>window.open('products.php','_self')</script>";
		 
	}
?>

<?php
    // gọi class category
     
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertCustomer = $cs -> insert_customer($_POST,$_FILES); // hàm check catName khi submit lên
    }
 ?>
 <?php 
 	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $login_Customer = $cs -> login_customer($_POST); // hàm check catName khi submit lên
    }
 ?>
<style>

    html {
        height: 100%;
    }
    body {
        margin:0;
        padding:0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
    }

    .login-box {
        margin-top: 250px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 800px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #e6ff00;
        outline: none;
        background: transparent;
    }
    .login-box .user-box select {
        width: 100%;
        font-weight: bold;
        padding: 10px 0;
        font-size: 16px;
        color: #9a9884;
        margin-top: 10px;
        margin-bottom: 20px;
        border: none;
        border-bottom: 1px solid #e6ff00;
        outline: none;
        background: transparent;
    }
    .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #e6ff00;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus ~ label,
    .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    .login-box a:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }
        50%,100% {
            left: 100%;
        }
    }

    .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
    }

    @keyframes btn-anim2 {
        0% {
            top: -100%;
        }
        50%,100% {
            top: 100%;
        }
    }

    .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
    }

    @keyframes btn-anim3 {
        0% {
            right: -100%;
        }
        50%,100% {
            right: 100%;
        }
    }

    .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
    }

    @keyframes btn-anim4 {
        0% {
            bottom: -100%;
        }
        50%,100% {
            bottom: 100%;
        }
    }

</style>
 <div class="main">
    <div class="content" style="background:#2e332c;">
    	 

    	<div class="register_account" style="text-align: center; background: no-repeat;height: 600px;">
            <div class="login-box">
    		<h3 style="color: #e6ff00;font-weight: bold">Đăng ký tài khoản</h3>
    		<?php 
    		if (isset($insertCustomer)) {
    			echo $insertCustomer;
    		}
    		 ?>
    		<form action="" method="POST" enctype="multipart/form-data">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div class="user-box">
							<input type="text" name="name" placeholder="Nhập Name...">
							</div>
							
							<div class="user-box">
							   <input type="text" name="city" placeholder="Nhập thành phố..." >
							</div>
							
							<div class="user-box">
								<input type="text" name="zipcode" placeholder="Nhập Zipcode...">
							</div>
							<div class="user-box">
								<input type="text" name="email" placeholder="Nhập E-Mail...">
							</div>

                        </td>
                            <td>
						<div class="user-box">

							<input type="text" name="address" placeholder="Nhập địa chỉ...">
						</div>
		    		<div class="user-box">

						<select  id="country" name="country" >

                            <option value="Việt Nam">An Giang</option>
                            <option value="Việt Nam">Bà Rịa-Vũng Tàu</option>
                            <option value="Việt Nam">Bạc Liêu</option>
                            <option value="Việt Nam">Bắc Kạn</option>
                            <option value="Việt Nam">Bắc Giang</option>
                            <option value="Việt Nam">Bắc Ninh</option>
                            <option value="Việt Nam">Bến Tre</option>
                            <option value="Việt Nam">Bình Dương</option>
                            <option value="Việt Nam">Bình Định</option>
                            <option value="Việt Nam">Bình Phước</option>
                            <option value="Việt Nam">Bình Thuận</option>
                            <option value="Việt Nam">Cà Mau</option>
                            <option value="Việt Nam">Cao Bằng</option>
                            <option value="Việt Nam">Cần Thơ (TP)</option>
                            <option value="Việt Nam">Đà Nẵng (TP)</option>
                            <option value="Việt Nam">Đồng Nai</option>
                            <option value="Việt Nam">Đồng Tháp</option>
                            <option value="Việt Nam">Hà Nội (TP)</option>
                            <option value="Việt Nam">Hải Dương</option>
                            <option value="Việt Nam">Hải Phòng (TP)</option>
                            <option value="Việt Nam">Hòa Bình</option>
                            <option value="Việt Nam">Hồ Chí Minh (TP)</option>
                            <option value="Việt Nam">Hậu Giang</option>
                            <option value="Việt Nam">Khánh Hòa</option>
                            <option value="Việt Nam">Kiên Giang</option>
                            <option value="Việt Nam">Lâm Đồng</option>
                            <option value="Việt Nam">Long An</option>
                            <option value="Việt Nam">Nghệ An</option>
                            <option value="Việt Nam">Sóc Trăng</option>
                            <option value="Việt Nam">Thừa Thiên – Huế</option>
                            <option value="Việt Nam">Tiền Giang</option>
                            <option value="Việt Nam">Trà Vinh</option>
                            <option value="Việt Nam">Vĩnh Long</option>
                            <option value="Việt Nam">Vĩnh Phúc</option>

		         </select>
				 </div>		        
	
		           <div class="user-box">
		          <input type="text" name="phone" placeholder="Nhập số điện thoại...">
		          </div>
				  
				  <div class="user-box">
					<input type="password" name="password" placeholder="Nhập Password..." style=" width: 95%;height: 33px;margin-top: 7px;">
				</div>
                                <div class="user-box">
                                    <label>Chọn ảnh đại diện </label>
                                </div>
                                <br>
				<div class="user-box">
                    <input name="image" type="file" placeholder="Chọn ảnh đại diện"/>
                </div>
		    	</td>
		    </tr> 
		    </tbody></table>
                <a>
		            <div class="search" style="float: none;">
                     <div><input type="submit" name="submit" class="grey" value="Tạo tài khoản"style="background: #17e050; color: #07801b"></div>
                    </div>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
		    
		    <div class="clear"></div>
		    </form>
    	</div>
        </div>
       <div class="clear"></div>
    </div>
 </div>


<?php 
	//include 'inc/footer.php';
 ?>

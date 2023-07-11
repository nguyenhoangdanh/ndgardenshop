<?php
    include 'inc/header.php';
	// include 'inc/slider.php';

?>
 <?php 
	// $login_check = Session::get('customer_login');
	// if ($login_check) {
	// 	header('Location: order.php'); 
	// }
    $login_check=Session::get('customer_login');
     if($login_check==true)
     {
        echo "<script>window.open('order.php','_self')</script>";
     }
?>

<?php
    // gọi class category
     
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertCustomer = $cs -> insert_customer($_POST); // hàm check catName khi submit lên
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
        margin-top: 180px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
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
    .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
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

    	 <div class="login_panel" style="text-align: center;height: 800px; background: no-repeat;">

             <div class="login-box">
        	<h3 style="color: #e6ff00;font-weight: bold">Đăng nhập</h3>
        	<?php
    		if (isset($login_Customer)) {
    			echo $login_Customer;
    		}
    		 ?>

        	<form action="" method="POST" >
                <div class="user-box">
                	<input type="text" name="email" class="field" placeholder="Nhập email..." >
                </div>
                <div class="user-box">
                    <input type="password" name="password" class="field" placeholder="Nhập password..." >
                </div>

                <a>
                 <!-- <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p> -->
                   <input style="background: #17e050; color: #07801b" type="submit" name="login" value="Đăng nhập" >
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </a>
                <div>
                    <a style="color: #e6ff00" href="quenmk.php">Quên mật khẩu</a>
                </div>

<!--                <div  id="buttonthem">-->
<!--                    <a style="height: 30px; width: 150px; font-size: 10px;" class="btn btn-info"> Đổi mật khẩu</a>-->
<!--                </div>-->
<!---->
<!--                <div id="formthem">-->
<!--                    <div class="content_top">-->
<!---->
<!--                        <h3 style="color: #e6ff00;font-weight: bold; margin: 0 auto">Quên mật khẩu</h3>-->
<!---->
<!--                        <div class="clear"></div>-->
<!---->
<!--                        <form method="post" action="" style="border-color: #00cd5a; width: 800px; margin: 0 auto">-->
<!---->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label style="color:#e6ff00 ;">Email</label>-->
<!--                                <input class="form-control" type="email" name="txtemail">-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                            <div class="form-group" style="margin-left:340px; margin-right: 340px">-->
<!--                                <input class="btn btn-primary" type="submit" value="Send" name="submit">-->
<!--                            </div>-->
<!---->
<!---->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->


             </form>
        </div>
    </div>







       <div class="clear"></div>
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
	//include 'inc/footer.php';
 ?>

<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
 ?>
<?php
if(isset($_POST['guiyeucau'])==true){
	
	$email=$_POST['email'];
	$count=$cs->show_customers_email($email);

	if($count==0)
	{
		echo "<script>alert('Email này bạn chưa đăng kí!');</script>";
	}
	else
	{
		 $mk_moi= substr( (rand(0,999999)), 0, 8);
		 $up_mk=$cs->update_mk_email($mk_moi,$email);

		 guimatkhaumoi($email,$mk_moi);

	}
}
?>
<?php
	function guimatkhaumoi($email, $matkhau){
		
		require "PHPMailer-master/src/PHPMailer.php"; 
	    require "PHPMailer-master/src/SMTP.php"; 
	    require 'PHPMailer-master/src/Exception.php'; 	
	    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
	    try {
	        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
	        $mail->isSMTP();  
	        $mail->CharSet  = "utf-8";
	        $mail->Host = 'smtp.gmail.com';  //SMTP servers
	        $mail->SMTPAuth = true; // Enable authentication
	        $mail->Username = 'hoangdanh54317@gmail.com'; // SMTP username
	        $mail->Password = 'danhngan111308';   // SMTP password
	        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
	        $mail->Port = 465;  // port to connect to                
	        $mail->setFrom('hoangdanh54317@gmail.com', 'admin' );
	        $mail->addAddress($email); 
	        $mail->isHTML(true);  // Set email format to HTML
	        $mail->Subject = 'Thư gửi lại mật khẩu';
	        $noidungthu = "<p>Bạn có yêu cầu cấp mật khẩu mới</p>
	        	mật khẩu mới của bạn là: {$matkhau}
	        "; 
	        $mail->Body = $noidungthu;
	        $mail->smtpConnect( array(
	            "ssl" => array(
	                "verify_peer" => false,
	                "verify_peer_name" => false,
	                "allow_self_signed" => true
	            )
	        ));
	        $mail->send();
	        echo 'Đã gửi mail xong';
	    } catch (Exception $e) {
	        echo 'Error: ', $mail->ErrorInfo;
	    }
	}
?>

 <div class="main">
    <div class="content" style="background:#577a0e;">
    	 <div class="login_panel" style="text-align: center; background: #496253;height: 200px; float: none; width: 500px; margin: auto; ">
        	<h3 style="color: yellowgreen;">Quên mật khẩu</h3>

        	<p>Nhập email của bạn</p>
        	
        	<form action="" method="post" >
                	<input type="text" name="email" class="field" value="<?php if(isset($email)==true) echo $email;?>" placeholder="Nhập email của bạn..." >
                  
                 
                 <!-- <p class="note">If you forgot your passoword just enter your email and click <a href="#">here</a></p> -->
                    <div class="buttons"><div><input type="submit" name="guiyeucau" class="grey" value="Send" style="
   						 background: #235d0f;color: yellowgreen; border-radius: 5px; "></div></div>
             </form>
        </div>

    	 	
       <div class="clear"></div>
    </div>
 </div>


<?php 
	include 'inc/footer.php';
 ?>

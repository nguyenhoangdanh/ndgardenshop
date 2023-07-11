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
<div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
				<div class="order_page">
					<p style="color: black;" class="test">Chào mừng bạn đã đến với ND GARDEN SHOP</p>
					<a href="index.php"><h3>Bắt  đầu mua sắm</h3></a>
				</div>
					
			</div>
					
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
  <style type="text/css">
		@-webkit-keyframes my {
		 0% { color: #de2828; } 
		 50% { color: #4287f5;  } 
		 100% { color: #F8CD0A;  } 
	 }
	 @-moz-keyframes my { 
		 0% { color: #de2828;  } 
		 50% { color:#4287f5;  }
		 100% { color: #F8CD0A;  } 
	 }
	 @-o-keyframes my { 
		 0% { color: #de2828; } 
		 50% { color: #4287f5; } 
		 100% { color: #F8CD0A;  } 
	 }
	 @keyframes my { 
		 0% { color: #de2828;  } 
		 50% { color: #4287f5;  }
		 100% { color: #F8CD0A;  } 
	 } 
	 .test {
	         font-size:24px;
	         font-weight:bold;
		 -webkit-animation: my 700ms infinite;
		 -moz-animation: my 700ms infinite; 
		 -o-animation: my 700ms infinite; 
		 animation: my 700ms infinite;
}
</style>
 <?php 
	include 'inc/footer.php';
 ?>
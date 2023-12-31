<?php

    include 'lib/session.php';
    Session::init();

?>
<?php
	
	include 'lib/database.php';
	include 'helpers/format.php';


	spl_autoload_register(function($class){
		include_once "classes/".$class.".php";
	});
		

	$db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$cs = new customer();
	$cat = new category();
	$product = new product();
	 $contact = new Contact_us(); 
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE HTML>
<head>
<title>ND GARDEN SHOP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>
    <style>
      #map {
      	float: left; 
     	
      	width: 455px;
      	height: 455px;}
      .bando{
      	width: 455px;
      	height: 455px;
      	float: left;
      	margin-top: 95px;
      	margin-left:35px;
      }
      body{
          /*background:url(images/background.png);*/
      }
      /*.wrap{*/
      /*    background:url(../images/background.png);*/
      /*}*/
      .header_top{
          background:url(images/background.png);
      }
      /*.cart*/
      /*{*/
      /*    background:url(images/header_cart1.png);*/
      /*}*/
      .login
      {
          background: no-repeat;
          border-radius: 2px;
          font-weight: bold;
          font-family: 'MS Sans Serif', sans-serif, Verdana, Arial;

      }
      .login a{
          color: #68f6cc;
      }

      /*////////////////////////////////////*/



    </style>

<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
  </head>
</script>

<body >
  <div class="wrap">
		<div class="header_top">
			<div class="logo" >
				<a style="margin-left: 50px; " href="index.php"><img src="images/logo1.png" alt="" height="150px" width=250px /></a>
			</div>
			<div class="floatleft middle" >

					<h1 style="font-family: sans-serif;font-weight: bold; text-shadow: 3px 5px #870909; float: left; margin-left: 22px;margin-top: -14px; color:#48da0c;margin:0">ND GARDEN SHOP</h1>
<!--					<p style="color: #ddd; margin: 0;font-weight: bold; float: left;">ndgarden.cf</p>-->
            </div>


			  <div class="header_top_right">
			    <div class="search_box">
				    <form  action="search.php" method="post">
				    	<input type="text" value="Tìm kiếm sản phẩm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm sản phẩm';}" name="txttim">
				    	
				    		<input type="submit" value="Tìm kiếm" style="background: #67c410; border-radius:2px;" name="timkiem">
				    	
				    </form>
			    </div>
			    <div class="shopping_cart" >
					<div class="cart">
						<a href="cart.php" title="View my shopping cart" rel="nofollow">
								<!-- <span class="cart_title">Cart</span> -->
                            <span class="no_product">
									<?php
                                    $check_cart = $ct->check_cart();
                                    if ($check_cart) {
                                        // $sum = Session::get("sum");
                                        $qty = Session::get("qty");
                                        echo $fm->format_currency($qty).''.' ';

                                    }else {
                                        echo '0';
                                    }

                                    ?>

								</span>
							</a>
						</div>
			      </div>
			<?php 
				if(isset($_GET['customer_id'])){
					$customer_id = $_GET['customer_id'];
					//$delCart = $ct->del_all_data_cart();
					$delCompare = $ct->del_compare($customer_id);
					Session::destroy();

// 					session_id($customer_id);
// session_start();
// session_destroy();
// session_commit();



				}
			?>   
		   <div class="login">
			<?php 
			$login_check = Session::get('customer_login');
			if ($login_check==false) {
				echo '<span><a href="login.php"  class="btn btn-success">Đăng nhập</a></span></div>
					<div><span><a href="dangki.php"  style="color: #68f6cc"  class="btn btn-success">Đăng ký</a></span></div>';
				
			}else {
                echo '<a href="login.php?customer_id='.Session::get("customer_id").' ">Đăng xuất</a></div>';
			}
			 ?>

		   	
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
	
	<ul id="dc_mega-menu-orange" class="dc_mm-orange"  style="height: 60px; background: #05883e; color: #e6ff00" >
	  <li style="height: 60px; " ><a style="height: 60px; color: #e6ff00 " href="index.php" >Trang chủ</a></li>
	  <li style="height: 60px; "><a style="height: 60px; color: #e6ff00 "href="products.php">Sản phẩm</a> </li>

	  <?php 
	  $check_cart = $ct->check_cart();
	  if ($check_cart==true) {
	  	echo '<li style="height: 60px;" ><a style="height: 60px; color: #e6ff00 " href="cart.php">Giỏ hàng</a></li>';
	  }else {
	  	echo '';
	  }
	   ?>

	  <?php 
	  $customer_id = Session::get('customer_id'); 
	  $check_order = $ct->check_order($customer_id);
	  if ($check_order==true) {
	  	echo '<li style="height: 60px;"><a style="height: 60px; color: #e6ff00 " href="dh_choxacnhan.php">Đơn hàng</a></li>';
	  }else {
	  	echo '';
	  }
	   ?>
	  
	  <?php 
	  $login_check = Session::get('customer_login');
	  if ($login_check==false) {
	  	echo '';
	  }else {
	  	echo '<li style="height: 60px;"><a style="height: 60px; color: #e6ff00 " href="profile.php">Thông tin</a></li>';
	  }
	   ?>


        <li style="height: 60px;"><a style="height: 60px; color: #e6ff00 "href="lienhe.php">Liên hệ</a> </li>



        <!-- <li ><a href="contact.php">Liên hệ</a> </li> -->
	  <div class="clear"></div>
	</ul>

	
</div>

		


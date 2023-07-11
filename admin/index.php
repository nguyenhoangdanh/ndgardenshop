<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>

<?php
    // if(!isset($_GET['adminid']) || $_GET['adminid'] == NULL){
    //     //echo "<script> window.location = 'index.php' </script>";
        
    // }else {
    //     $id = $_GET['adminid']; // Lấy catid trên host
    // }
  ?>
        <div class="grid_10"  >
            <div class="box round first grid" style="background: #f8fcf9;height: 600px; box-shadow: 5px 7px #068d74; border-radius: 5px;">
                <h2 style="background: #657a5d; color: #27d36c"> Trang quản trị</h2>
                <div class="block" style="color: #0e4832">
                 <?php 
                 	$show_admin = $ad -> show_admin();
                 	$result = $show_admin -> fetch_assoc();
                 	echo "<span style='color: #0e4832; font-weight: bold'>Xin chào quản trị viên </span>". $result['adminName'] ;
                 ?>     
                </div>
<!--                <div>-->
<!--                    <a  href="adminlist.php"><button style="background: #4bb71f;color: #e6ff00; border-radius: 2px;"> Xem danh sách người dùng </button></a>-->
<!--                </div>-->
                <hr style="background: #4baf35;">
               	 <div id="buttonthem">
<!--        			<a href="changepassword.php?adminid=--><?php //echo $result['adminId']; ?><!--">-->
<!--        				<button style="background: #4bb71f; border-radius: 2px;"> Đổi mật khẩu </button></a>-->
        		</div>
        		<hr>
<!--        		<div>-->
<!--        			<a  href="adminlist.php"><button style="background: #4bb71f;color: #e6ff00; border-radius: 2px;"> Danh sách người dùng </button></a>-->
<!--        		</div>-->
        		

            </div>
        </div>

<?php include 'inc/footer.php';?>
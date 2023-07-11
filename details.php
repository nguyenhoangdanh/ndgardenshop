<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<?php include 'classes/comment.php';
$comment = new comment(); ?>

<?php
if(!isset($_GET['proid']) || $_GET['proid'] == NULL){
    echo "<script> window.location = '404.php' </script>";

}else {
    $id = $_GET['proid']; // Lấy productid trên host
}

$customer_id = Session::get('customer_id'); // bỏ $ nha chú , $ là biến chứ không phải thuộc tính
//$customer_id = Session::get('$customer_id'); // dòng lỗi ,nản chú ghê,easy vậy mà
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare'])){
    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    $productid = $_POST['productid'];
    $insertCompare = $product -> insertCompare($productid, $customer_id); // hàm check catName khi submit lên
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wishlist'])){
    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    $productid = $_POST['productid'];
    $insertWishlist = $product -> insertWishlist($productid, $customer_id); // hàm check catName khi submit lên
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
    $quantity = $_POST['quantity'];
    $insertCart = $ct -> add_to_cart($id, $quantity); // hàm check catName khi submit lên
}
?>




<div class="main">
    <div class="content" style="background: #f7faf9; width: 1200px; margin: 0 auto; border-radius: 5px">
        <div class="section group">
            <?php
            $get_product_details = $product->get_details($id);
            $demluotdanhgia=$comment->demluotdanhgia($id);
            if ($get_product_details) {
            while ($result_details = $get_product_details->fetch_assoc()) {
            # code...

            ?>
            <div class="cont-desc span_1_of_2">
                <div class="grid images_3_of_2">
                    <img src="admin/uploads/<?php echo $result_details['image'] ?>" alt="" />


                    <p style="color: black;">
						<span style="float: left;">
								<?php
                                $kiemtra=$comment->kiemtra($id);


                                if ($kiemtra > 0) {
                                    $tbsao = $product->tbsao($id);
                                    $result_tbsao = $tbsao->fetch_assoc();

                                    if($result_tbsao['slsao'] == 1){
                                        # code...

                                        ?>
                                        <label class="star star-5" for="star-5"  ></label>
                                        <label class="star star-4" for="star-4"  ></label>
                                        <label class="star star-3" for="star-3" ></label>
                                        <label class="star star-2" for="star-2" ></label>
                                        <label class="star star-1" for="star-1" style="color: #ffcc00; "></label>

                                        <?php
                                    }elseif($result_tbsao['slsao'] == 2){
                                        ?>
                                        <label class="star star-5" for="star-5"  ></label>
                                        <label class="star star-4" for="star-4"  ></label>
                                        <label class="star star-3" for="star-3" ></label>
                                        <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                        <label class="star star-1" for="star-1" style="color: #ffcc00; "></label>
                                        <?php
                                    }elseif($result_tbsao['slsao'] == 3){
                                        ?>
                                        <label class="star star-5" for="star-5"  ></label>
                                        <label class="star star-4" for="star-4"  ></label>
                                        <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                        <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                        <label class="star star-1" for="star-1" style="color: #ffcc00; "></label>
                                        <?php
                                    }elseif($result_tbsao['slsao'] == 4){
                                        ?>
                                        <label class="star star-5" for="star-5"  ></label>
                                        <label class="star star-4" for="star-4"  style="color: #ffcc00; "></label>
                                        <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                        <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                        <label class="star star-1" for="star-1" style="color: #ffcc00; "></label>

                                        <?php
                                    }elseif($result_tbsao['slsao'] == 5){
                                        ?>
                                        <label class="star star-5" for="star-5"  style="color: #ffcc00; "></label>
                                        <label class="star star-4" for="star-4" style="color: #ffcc00; " ></label>
                                        <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                        <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                        <label class="star star-1" for="star-1" style="color: #ffcc00; "></label>
                                        <?php
                                    }elseif($result_tbsao['slsao'] == 0){
                                        ?>
                                        <label class="star star-5" for="star-5"  ></label>
                                        <label class="star star-4" for="star-4"  ></label>
                                        <label class="star star-3" for="star-3" ></label>
                                        <label class="star star-2" for="star-2" ></label>
                                        <label class="star star-1" for="star-1"></label>
                                        <?php

                                    }


                                }
                                else{

                                ?>
                    <p>Bài viết chưa có đánh giá</p>
                    <?php
                    }
                    ?>

                    </span>
                    <span>
									<?php
                                    echo $demluotdanhgia.' Đánh Giá';
                                    ?>
								</span>
                    <span> || <?php
                        $soluongdaban=$comment->dabansanpham($id);
                        $sl=$soluongdaban->fetch_assoc();

                        echo  $sl['product_soldout'].' Đã Bán';

                        ?></span>

                    </p>

                </div>
                <div class="desc span_3_of_2" >

                    <h2 ><?php echo $result_details['productName'] ?> </h2>




                    <p ><?php echo $fm->textShorten($result_details['product_desc'], 500) ?></p>
                    <div class="price" >
                        <p >Price: <span><?php echo $fm->format_currency($result_details['price'])." VND" ?></span></p>
                        <p>Category: <span><?php echo $result_details['catName'] ?></span></p>
                        <p>Brand:<span><?php echo $result_details['brandName'] ?></span></p>
                    </div>
                    <div class="add-cart">

                        <form action="" method="post">
                            <input type="number" class="buyfield" name="quantity" value="1" min="1" />
                            <input  type="submit" class="btn btn-warning" name="submit" value="Mua ngay->"/>
                        </form>
                        <?php
                        if(isset($insertCompare)) {
                            echo $insertCompare;
                        }
                        ?>
                        <?php
                        if (isset($AddtoCart)) {
                            echo '<span style="color:red; font-size:18px;">Sản phẩm đã được bạn thêm vào giỏ hàng</span>';
                        }
                        ?>
                        <?php
                        if (isset($insertCart)) {
                            echo $insertCart;
                        }
                        ?>

                    </div>
                    <!-- so sánh sản phẩm -->
                    <div class="add-cart">
                        <div class="button_details">

                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div>&nbsp &nbsp</div>

                <div class="product-desc">
                    <h2 style="background: #145f75;">Chi tiết sản phẩm</h2>
                    <p><?php echo $result_details['product_desc'] ?></p>
                </div>

                <?php
                }
                }
                ?>
            </div>
            <div id="btndanhmuc" class="btn btn-warning">
                <span>Danh mục <i class="fas fa-forward"></i></span>
            </div>
            <div id="formdanhmuc" class="rightsidebar span_3_of_1">
                <h2 >Danh Mục</h2>
                <ul >
                    <?php
                    $getall_category = $cat->show_category_fontend();
                    if ($getall_category) {
                        while ($result_allcat = $getall_category->fetch_assoc()) {


                            ?>
                            <li><a href="productbycat.php?catid=<?php echo $result_allcat['catId'] ?>" ><?php echo $result_allcat['catName'] ?></a></li>
                            <?php
                        }
                    }
                    ?>
                </ul>

            </div>
        </div>


        <div class="comment" style="background: #1b9608; width: 1000px; border-radius: 5px; margin: 0 auto">

            <?php
            // gọi class category

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
                $comment_us = $_POST['txtcomment'];
                $sao=$_POST['star'];
                $insertcomment = $comment -> insert_comment($comment_us,$customer_id, $id,$_FILES,$sao);
                if ($insertcomment) {

                    # code...
                }
                else
                {
                    echo "<script>alert('bl thành công');</script>";
                }

                // hàm check catName khi submit lên
            }
            ?>


            <h3 style="background: #235d0f; width: 1000px; margin: 0 auto; color: #d2b316; border-radius: 10px;">Bình luận <i class="fas fa-comment"></i><i class="fas fa-comment"></i><i class="fas fa-comment"></i> </h3>
            <div class="hiencoment" >
                <?php
                $show_comment = $comment -> show_comment($id);
                if($show_comment){
                $i = 0;
                while($result = $show_comment -> fetch_assoc()){
                $i++;

                ?>
                <div style="border: 1px solid white; border-radius: 10px;">

                    <table id="table" >


                        <tr>

                            <td style="color: white; font-weight: bold;"><img style="width: 50px; height: 50px;  border: 1px #d4d4d4 solid;padding: 7px;border-radius:50%;-moz-border-radius:50%; -webkit-border-radius:50%;" src="images/<?php echo $result['image'] ?>" alt="" /> <?php echo $result['name'];?> </td>

                            <td></td>


                            <td style="color: white;font-style: oblique; font-size: 10px;"><?php echo $result['ngaybl'];?></td>
                        </tr>
                        <tr>
                            <?php
                            if($result['sao']=='2'){
                                ?>
                                <td>
                                    <label class="star star-5" for="star-5"  ></label>
                                    <label class="star star-4" for="star-4"  ></label>
                                    <label class="star star-3" for="star-3" ></label>
                                    <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                    <label class="star star-1" for="star-1" style="color: #ffcc00; "></label></td>
                            <?php }
                            elseif($result['sao']=='1')
                            {
                                ?>
                                <td>
                                    <label class="star star-5" for="star-5"  ></label>
                                    <label class="star star-4" for="star-4"  ></label>
                                    <label class="star star-3" for="star-3" ></label>
                                    <label class="star star-2" for="star-2" ></label>
                                    <label class="star star-1" for="star-1" style="color: #ffcc00; "></label></td>

                                <?php
                            }elseif($result['sao']=='3'){

                                ?>
                                <td>
                                    <label class="star star-5" for="star-5"  ></label>
                                    <label class="star star-4" for="star-4"  ></label>
                                    <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                    <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                    <label class="star star-1" for="star-1" style="color: #ffcc00; "></label></td>
                                <?php
                            }elseif($result['sao']=='4'){

                                ?>
                                <td>
                                    <label class="star star-5" for="star-5"  ></label>
                                    <label class="star star-4" for="star-4"   style="color: #ffcc00; "></label>
                                    <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                    <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                    <label class="star star-1" for="star-1" style="color: #ffcc00; "></label></td>
                                <?php
                            }elseif($result['sao']=='5'){

                                ?>
                                <td>
                                    <label class="star star-5" for="star-5"   style="color: #ffcc00; "></label>
                                    <label class="star star-4" for="star-4"   style="color: #ffcc00; "></label>
                                    <label class="star star-3" for="star-3" style="color: #ffcc00; "></label>
                                    <label class="star star-2" for="star-2" style="color: #ffcc00; "></label>
                                    <label class="star star-1" for="star-1" style="color: #ffcc00; "></label></td>
                                <?php
                            }else{

                                ?>
                                <td>
                                    <label class="star star-5" for="star-5" ></label>
                                    <label class="star star-4" for="star-4"></label>
                                    <label class="star star-3" for="star-3" ></label>
                                    <label class="star star-2" for="star-2" ></label>
                                    <label class="star star-1" for="star-1" ></label>
                                </td>

                                <?php
                            }
                            ?>

                        </tr>

                        <tr>
                            <td style="color: white;"><?php echo $result['comment'];?></td>
                        </tr>
                        <tr >
                            <?php
                            $anh=$result['image_cm'];
                            if (!empty($anh)) {
                                ?>

                                <td><img style="width: 200px; height: 100px; border-radius: 10px;" src="<?php echo $result['image_cm'] ?>" /></td>

                                <?php
                            }else{
                                ?>

                                <td></td>

                                <?php
                            }
                            ?>


                        </tr>

                        <tr>
                            <td><hr></td>
                        </tr>


                    </table>


                    <?php
                    }
                    }
                    ?>
                </div>
                <div style="margin-left: 50px" id="buttonthem">
                    <a class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span>Bình luận <i class="fas fa-comment"></i> </a>
                </div>
                <br>
                <div id="formthem" style="border-radius: 10px; border: 2px solid #7babc9;">
                    <form method="post" enctype="multipart/form-data">

                        <div class="stars">

                            <input class="star star-5" id="star-5" type="radio" name="star" value="5" />
                            <label class="star star-5" for="star-5"></label>
                            <input class="star star-4" id="star-4" type="radio" name="star" value="4" />
                            <label class="star star-4" for="star-4"></label>
                            <input class="star star-3" id="star-3" type="radio" name="star" value="3" />
                            <label class="star star-3" for="star-3"></label>
                            <input class="star star-2" id="star-2" type="radio" name="star" value="2" />
                            <label class="star star-2" for="star-2"></label>
                            <input class="star star-1" id="star-1" type="radio" name="star" value="1" />
                            <label class="star star-1" for="star-1"></label>
                            <input class="star star-1" id="star-6" type="radio" name="star" value="0"  checked />

                        </div>
                        <div></div>
                        <span><input style="border-radius: 5px; height: 50px; width: 500px;" type="text" name="txtcomment">
	 			<input type="file" name="image">
	 		</span>
                        <br>


                        <div>
                            <input class="btn btn-warning" type="submit" name="comment" value="Bình luận" style=" border-radius: 5px;"></div>
                    </form>
                </div>
            </div>
            <hr>
            <script>
                $(document).ready(function(){
                    $("#formthem").hide();
                    $("#buttonthem").click(function(){
                        $("#formthem").toggle(500);
                    });
                });
            </script>
            <script>
                $(document).ready(function(){
                    $("#formdanhmuc").hide();
                    $("#btndanhmuc").click(function(){
                        $("#formdanhmuc").toggle(500);
                    });
                });
            </script>
            <style type="text/css">
                div.stars {
                    width: 200px;
                    display: inline-block;
                }

                input.star { display: none; }

                label.star {
                    float: right;
                    padding: 10px;
                    font-size: 20px;
                    color: #444;
                    transition: all .2s;
                }

                input.star:checked ~ label.star:before {
                    content: '\f005';
                    color: #FD4;
                    transition: all .25s;
                }

                input.star-5:checked ~ label.star:before {
                    color: #FE7;
                    text-shadow: 0 0 20px #952;
                }

                input.star-1:checked ~ label.star:before { color: #F62; }

                label.star:hover { transform: rotate(-15deg) scale(1.3); }

                label.star:before {
                    content: '\f006';
                    font-family: FontAwesome;
                }
            </style>

            <?php

            $login_check = Session::get('customer_login');


            if(isset($_POST['comment'])  )
            {

                if ($login_check==false) {

                    echo "<script>alert('Bạn cần đăng nhập!')</script>";
                }

            }

            ?>



    </div>


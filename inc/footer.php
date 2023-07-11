
</div>
<footer >

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>Copyright © 2021, ND Garden shop Cửa hàng cây cảnh</span>
                </div>
                <!-- End Col -->
                <div class="col-md-6">
                    <div class="copyright-menu">
                        <ul>
                            <li>
                                <a href="#">Liên hệ với chúng tôi: 0385930622</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <div id="back-to-top" class="back-to-top">
        <button class="btn btn-dark" title="Back to Top" style="display: block;">
            <i class="fa fa-angle-up"></i>
        </button>
    </div>
    <!-- End Back to top -->
</footer>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>

<?php
// gọi class category

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST

    $email = $_POST['email'];

    $insertcontact = $contact -> insert_contact($email);

    // hàm check catName khi submit lên
}
?>
</body>
</html>

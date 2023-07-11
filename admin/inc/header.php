<?php 
    include '../lib/session.php';
     Session::checkSession();
 ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<?php
include '../classes/admin.php';
$ad = new Admin();

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>

<style>
    .container_12
    {
        background:url(images/anhnen1.png);
    }
    #branding
    {
        background:url(images/anh2.png);
    }
    .grid_12
    {
        background: no-repeat;
    }
    .ul nav main
    {
        background: #0c84ff;
    }

    .table-responsive{
        box-shadow: 0px 0px 5px #999;
        padding: 20px;


        /* option for you */
        /*height: 680px;
        overflow-y: scroll;*/
    }


</style>
</head>
<body style="background: #33755c;">
    <div class="container_12" >
        <div class="grid_12 header-repeat" >
            <div id="branding">
                <div class="floatleft logo">
                    <img src="img/logo1.png" alt="Logo" style="width: 100px; height: 65px; " />
				</div>
				<div class="floatleft middle">
					<h1 style="font-weight: bold; text-shadow: 3px 5px #870909;color:#48da0c;">ND GARDEN SHOP</h1>
					<p style="color: yellowgreen">ndgarden.cf</p>
				</div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic"/></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <?php 
                                $show_admin = $ad -> show_admin();
                                $result = $show_admin -> fetch_assoc();
                                
                             ?>   
                            <li><a>Chào <?php echo $result['adminName']; ?></a>
                                
                            </li>
                            <?php 
                                if(isset($_GET['action']) && $_GET['action']=='logout'){
                                    Session::destroy();
                                }
                             ?>

                            <li><a href="?action=logout">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear" >
        </div>
        <div class="grid_12" >

        </div>
        <div class="clear">
        </div>
    
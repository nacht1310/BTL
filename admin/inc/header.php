<?php
    include "../lib/session.php";
    Session::checkSession();
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
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
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

</head>
<body>
        
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="logo">
                    <img src="img/livelogo.png" alt="Logo" />
				</div>

                <div class="grid_12">
                    <ul class="nav">
                        <li class="ic-form-style"><a href="#">User Profile</a></li>
                        <li class="ic-typography"><a href="changepassword.php">Change Password</a></li>
                        <li class="ic-grid-tables"><a href="inbox.php">Inbox</a></li>
                        <li class="ic-charts"><a href="#">Visit Website</a></li>
                    </ul>
                </div>
                
                <div class="admin">

                        <img src="img/img-profile.jpg" alt="Profile Pic">
                        <div class="marginleft10">
                            <ul class="inline-ul">
                                <li>Hello <?php echo Session::get('adminname')?> </li>
                                <?php
                                    if(isset($_GET['action']) && $_GET['action']=='logout'){
                                        //Session::checkSession();
                                        Session::destroy();
                                    }
                                ?>
                                <li><a href="?action=logout">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

    </div>

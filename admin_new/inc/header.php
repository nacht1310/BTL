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
    
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sidebar.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="js/jquery-1.6.4.min.js" type="../node_modules/jquery/dist/jquery.js"></script>

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
    <div class="header">

        <div class="logo">
            <img src="img/livelogo.png" alt="Logo" />
        </div>

       
        <ul class="nav">
            <li><a href="index.php">Dashboard</a> </li>
            <li><a href="#">User Profile</a></li>
            <li><a href="changepassword.php">Change Password</a></li>
            <li><a href="inbox.php">Inbox</a></li>
            <li><a href="#">Visit Website</a></li>
        </ul>

        
        <div class="admin">

            <img src="img/img-profile.jpg" alt="Profile Pic">
            <div>
                <ul class="admin-name">
                    <li style="font-weight: 900;">Hello <?php echo Session::get('adminname')?> </li>
                    <?php
                        if(isset($_GET['action']) && $_GET['action']=='logout'){
                            //Session::checkSession();
                            Session::destroy();
                        }
                    ?>
                    <li><a class="log-out" href="?action=logout">Logout</a></li>
                </ul>
            </div>
        </div>

    </div>
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
    <link rel="stylesheet" href="../../vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/footer.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../vendor/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/click.js"></script>

</head>

<body>  
    <div class="header">

        <div class="logo">
            <img src="img/livelogo.png" alt="Logo" />
        </div>

       
        <ul class="nav-bar">
            <li>User Profile</li>
            <li class="header-menu" id="pass">Change Password</li>
            <li>Visit Website</li>
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

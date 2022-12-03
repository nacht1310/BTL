<?php
	include "../classes/adminlogin.php";
?>
<?php
	$class = new adminlogin();
	if($_SERVER['REQUEST_METHOD'] =='POST'){
		$adminuser = $_POST['adminuser'];
		$adminpass = $_POST['adminpass'];
		$login_check = $class->login_admin($adminuser, $adminpass);
	}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
	<link rel="stylesheet" href="../../vendor/bootstrap.min.css">
</head>
<body>
<img class="background" src="./img/watch_bg.jpg" >
<div class="container">
	<section id="content">
		<h1>Admin Login</h1>
		<form action="login.php" method="post">
			
			<span>
				<?php
					if(isset($login_check)){
						echo $login_check;
					}
				?>
			</span>
			<div>
				<input type="text" placeholder="Username" name="adminuser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminpass"/>
			</div>
			<input type="submit" value="Log in" class="btn btn-log">
		</form><!-- form -->

		<div class="btn btn-warning">
			<a href="../index.php">Back to Home</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
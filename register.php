<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        include "inc/header.php";
    ?>
    <div class="container">
        <h2> Register</h2> 
        <form method="post" action="">
        <div class="form-group">
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
        </div>
        <br><br>
        <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter your email">
            </div>  
        </div>
        <br><br>
        <div class="form-group">
            <label class="control-label col-sm-2">Phone number:</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" name="phone_number" placeholder="Enter your phone number">
            </div> 
        </div>
        <br><br>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="address" placeholder="Enter your address">
            </div> 
        </div>
        <br><br>
        <div class="form-group">
            <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Enter your user name">
            </div> 
        </div>
        <br><br>
        <div class="form-group">
            <label class="control-label col-sm-2">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div> 
        </div>
        <br><br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Register">
        </div>
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $address = $_POST["address"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if (strlen($name)>0 && strlen($email)>0 && strlen($phone_number)>0 && strlen($address)>0 
            && strlen($username)>0 && strlen($password)>0 ) {
            $conn = mysqli_connect('localhost', 'root', '', 'websitemvc');
            if (!$conn) {
                die("Kết nối thất bại: ".mysqli_connect_error());
            }
            $sql = "INSERT INTO tbl_admin(the_name, the_email, 
                the_username, the_password, the_phonenumber, the_address, the_permission)
                VALUES ('$name','$email','$username','md5($password)','$phone_number','$address','2')";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Đăng ký thành công')</script>";
            } else {
                echo "Đăng ký thất bại".$sql."<br>".mysqli_error($conn);
            }
            
            mysqli_close($conn);
        } else {
            echo "<script>alert('Bạn chưa điền đầy đủ thông tin')</script>";
        }
    }
?>
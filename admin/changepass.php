<?php include "../lib/database.php" ?>

<?php 
    function changepass($pass_old, $pass_new, $pass_confirm) {
        $db = new Database();

        if(empty($pass_old) || empty($pass_new) || empty($pass_confirm)) {
            echo "<script>alert('The old password or new password or confirm password can not be empty. Please enter them correctly')</script>";
        }
        else {
            $user = Session::get('adminuser');
            $check = false;
            $query = "SELECT adminuser FROM tbl_admin WHERE adminpass ='$pass_old'";
            $result = $db->select($query);

            for($i = 0; $i < $result->num_rows; $i++) {
                $value[$i] = $result->fetch_assoc();
                if($user == $value[$i]["adminuser"]) {
                    $check = true;
                }
            }

            if($check == false) {
                    echo "<script>alert('The old password you enter is not correct')</script>";
            }
            elseif($pass_confirm != $pass_new) {
                    echo "<script>alert('The confirm password you enter is the same as the new password')</script>";
            }
            else {
                    $query = "UPDATE tbl_admin SET adminpass = '$pass_new' WHERE adminuser = '$user'"; 
                    $result = $db->update($query);
                    if($result != false) {
                        echo "<script>alert('The password is changed successfully')</script>";
                    }
                    else {
                        echo "<script>alert('There are some problems occured')</script>";
                    }
            }
        }
    }
?>

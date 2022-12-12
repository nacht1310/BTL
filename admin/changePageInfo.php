<?php 
    function changePageInfo($about, $address, $phone, $email) {
        $db = new Database();

        if($about != null) {
            $query = "UPDATE tbl_page_info SET about='$about' WHERE id=1 "; 
            $result = $db->insert($query);
            if($result == false) {
               
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        if($address != null) {
            $query = "UPDATE tbl_page_info SET address='$address' WHERE id=1"; 
            $result = $db->insert($query);
            if($result == false) {
                
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        if($phone != null) {
            $query = "UPDATE tbl_page_info SET phone='$phone' WHERE id=1"; 
            $result = $db->insert($query);
            if($result == false) {
                
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        if($email != null) {
            $query = "UPDATE tbl_page_info SET email='$email' WHERE id=1"; 
            $result = $db->insert($query);
            if($result == false) {

                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        echo "<script>swal('The information is update successfully')</script>";
        
    }
?>

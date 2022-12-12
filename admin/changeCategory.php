<?php 
    function changeCategory($brand, $model, $year) {
        $db = new Database();

        if($brand != null) {
            $query = "INSERT INTO tbl_brand (name) VALUES ('$brand')"; 
            $result = $db->insert($query);
            if($result != false) {
                echo "<script>swal('The brand is insert successfully')</script>";
            }
            else {
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        if($model != null) {
            $query = "INSERT INTO tbl_model (name) VALUES ('$model')"; 
            $result = $db->insert($query);
            if($result != false) {
                echo "<script>swal('The model is insert successfully')</script>";
            }
            else {
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        if($year != null) {
            $query = "INSERT INTO tbl_year (year) VALUES ('$year')"; 
            $result = $db->insert($query);
            if($result != false) {
                echo "<script>swal('The year is insert successfully')</script>";
            }
            else {
                echo "<script>swal('There are some problems occured')</script>";
            }
        }

        
    }
?>

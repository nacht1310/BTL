<?php
    include "../Front-end/lib/session.php";
    Session::checkLogin();
    include "../Front-end/lib/database.php";
    include "../helper/format.php";

?>
<?php
    class adminlogin 
    {   
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        public function login_admin($adminuser, $adminpass) {
            $adminuser = $this->fm->validation($adminuser);
            $adminpass = $this->fm->validation($adminpass);

            $adminuser = mysqli_real_escape_string($this->db->link, $adminuser);//i cos  2 bien:1 bien du lieu, 1 bien ket noi
            $adminpass = mysqli_real_escape_string($this->db->link, $adminpass);

            if(empty($adminuser) || empty($adminpass)){
                $alert = "User and pass must be not empty";
                return $alert;
            }
            else{
                $query = "SELECT * FROM tbl_admin WHERE  adminuser = '$adminuser' AND adminpass ='$adminpass' LIMIT 1";
                $result = $this->db->select($query);
                
                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('adminlogin',true);
                    Session::set('adminid', $value['adminid']);
                    Session::set('adminuser', $value['adminuser']);
                    Session::set('adminname', $value['adminname']);
                    header('Location:index.php');
                }
                else{
                    $alert ="User and passs not match $adminuser $adminpass";
                    return $alert;
                }
            }
        }

    }
?>
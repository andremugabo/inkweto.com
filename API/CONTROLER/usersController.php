<?php 
session_start();
require_once"../MODEL/usersModel.php";
require_once"../MODEL/metricModel.php";
$users = new usersModel();
$metrics = new metricModel();
$action = $_GET['action'];
$data = [];
$user = array();




switch ($action) {
    case 'createUsersSeller':
        // CREATE USER
        if (isset($_POST['sellerReg'])) {
            
            $u_fname = ucfirst($_POST['fname']) ;
            $u_lname = strtoupper($_POST['lname']);
            $u_gid = $_POST['gender'];
            $u_phone = $_POST['pnum'];
            $u_password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $sCheckbox = $_POST['sCheckbox'];

            $u_role = "seller";
            // CHECK IF ALL FIELD ARE NOT EMPTY
            if (!empty($u_fname) && !empty($u_lname) && !empty($u_gid) && !empty($u_phone) && !empty($u_password) && !empty($cpassword) && $sCheckbox == true) {
                    // CHECK IF PASSWORD MATCH
                if ($u_password == $cpassword) {
                    // CHECK IF SELLER EXIST
                    if ($users->checkIfSellerExist($u_phone,$u_role)== 0) {     
                        // COUNT NUMBER OF EXISTING USERS 
                        $count = $users->countAllUsers();
                        $countUsers = $count + 1;

                        // CREATING SELLER REG NUMBER
                        if ($countUsers < 10) {
                            $u_reg = "I-"."00000".$countUsers;
                        } else if($countUsers < 100) {
                            $u_reg = "I-"."0000".$countUsers;
                        }else if($countUsers < 1000) {
                            $u_reg = "I-"."000".$countUsers;
                        }else if($countUsers < 10000) {
                            $u_reg = "I-"."00".$countUsers;
                        }else if($countUsers < 100000) {
                            $u_reg = "I-"."0".$countUsers;
                        }else{
                            $u_reg = "I-".$countUsers; 
                        }
                        //INSERTING SELLER IN THE DATA BASE
                        $users->insertUser($u_reg,$u_fname,$u_lname,$u_gid,$u_phone,md5($u_password),$u_role);
                        $id = $users->getId($u_phone,$u_role);
                        echo $u_fname;
                        $m_name =" is regitered as seller ";
                        
                        //var_dump($id['u_id']);

                        $_SESSION['success_msg'] = $u_fname." REGISTERED SUCCESSFULLY YOU CAN LOGIN NOW!! ";
                        $metrics->insertMetric($id['u_id'],$m_name);
                        header("location:{$_SERVER['HTTP_REFERER']}");
                        // header("location:../../".base()."sellerDashboard");
                    } else {
                        $_SESSION['fail_msg']="FAILED, SELLER WITH ".$u_phone." PHONE NUMBER ALLREADY EXIST ";
                        header("location:{$_SERVER['HTTP_REFERER']}");
                    }             
                    
                } else {
                    $_SESSION['fail_msg']="PASSWORD DON'T MATCH TRY AGAIN !!";
                    header("location:{$_SERVER['HTTP_REFERER']}");
                }
                
               
            } else {
                $_SESSION['fail_msg']="SOME FIELD ARE EMPTY TRY AGAIN !!!!!";
                header("location:{$_SERVER['HTTP_REFERER']}");
            }
            
            
        }
       

        break;
    case 'login':    
        if (isset($_POST['sellerLog'])) {
            echo "LOGIN";
            $u_role = "SELLER";
            $u_phone = $_POST['u_phone'];
            $u_password = md5($_POST['u_password']);
            echo $u_phone;
            echo "  ";
            echo $u_password;
            if (!empty($u_phone) && !empty($u_password)) {
                if ($users->checkIfSellerCanLog($u_phone,$u_password,$u_role) === 1) {
                    $_SESSION['logged_user'] = $users->checkIfSellerCanLogged($u_phone,$u_password,$u_role);
                    print_r($_SESSION['logged_user']);
                    $sellerLogged_id = $_SESSION['logged_user']['u_id'] ;
                    $m_name  =" loggin as seller ";
                    
                    
                    $metrics->insertMetric($sellerLogged_id,$m_name);
                    $_SESSION['success_msg'] = $_SESSION['logged_user']['u_fname']." LOGIN SUCCESSFULLY !! ";
                    header("location:../../".base()."sellerDashboard");
                } else {
                    $_SESSION['fail_msg']="WRONG CREDENTIAL !!";
                    header("location:{$_SERVER['HTTP_REFERER']}");
                }
                
            } else {
                $_SESSION['fail_msg']="FILL OUT THE ABOVE TEXT FIELD !!";
                header("location:{$_SERVER['HTTP_REFERER']}");
            }
            
        }
        break;
    
    default:
        # code...
        break;
}
	






header("content-type:application/json");

 ?>
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
    case 'createUsers':
        if (isset($_POST['sellerReg'])) {
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $pnum = $_POST['pnum'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $sCheckbox = $_POST['sCheckbox'];
            
        }
       

        break;
    case 'insert':    
        
        break;
    
    default:
        # code...
        break;
}
	






header("content-type:application/json");

 ?>
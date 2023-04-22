<?php
session_start();
require_once"../MODEL/usersModel.class.php";
require_once"../MODEL/metricModel.class.php";
$users = new usersModel();
$metrics = new metricModel();
$action = $_GET['action'];
$data = [];
$user = array();

echo $action;

switch ($action) {
    case 'createUser':
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $pnum = $_POST['pnum'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $sCheckbox = $_POST['sCheckbox'];

        if (!empty($fname) && !empty($lname) && !empty($gender) && !empty($pnum) && !empty($password) && !empty($cpassword) && $sCheckbox == true) {
            
            $response = true;
            array_push($data,$response);
        
        } else {
            # code...
        }
        



        echo json_encode($data);
        break;
    
    default:
        # code...
        break;
}




header("content-type:applicatio/json");
?>
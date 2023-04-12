<?php
session_start();
require_once"../MODEL/usersModel.class.php";
require_once"../MODEL/metricModel.class.php";
$users = new usersModel();
$metrics = new metricModel();
$action = $_GET['action'];
$data = [];
$user = array();

echo $metric;

switch ($action) {
    case 'createUser':
        echo json_encode($data);
        break;
    
    default:
        # code...
        break;
}




header("content-type:applicatio/json");
?>
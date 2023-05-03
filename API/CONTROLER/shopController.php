<?php
session_start();
require_once"../MODEL/shopModel.php";
require_once"../MODEL/metricModel.php";
$shops = new shopModel();
$metrics = new metricModel();
$action = $_GET['action'];
$shop = array();


switch ($action) {
    case 'createShop':
        if (isset($_POST['create_shop'])) {
            echo" SHOP";
            $u_id = $_POST['u_id'];
            $s_name =strtoupper($_POST['s_name']);
            $s_logo = $_FILES['s_logo']['name'];
            $name_logo = $_FILES['s_logo']['tmp_name'];
            $dir = "../../ASSETS/SLOGOPIC/";
            $target_file = $dir.basename($s_logo);
            move_uploaded_file($name_logo,$target_file);

            if (!empty($u_id) && !empty($s_name)) {

                if ($shops->checkIfShopExist($u_id,$s_name) === 0) {
                   $count = $shops->countAllUsers();
                   echo $count." shops";  
                   $countShop = $count + 1;
                   
                   if ($countShop < 10) {
                    $s_reg = "IS-000000".$countShop;
                   } else if($countShop >= 10 && $countShop < 100) {
                    $s_reg = "IS-00000".$countShop;
                   } else if($countShop >= 100 && $countShop < 1000) {
                    $s_reg = "IS-0000".$countShop;
                   } else if($countShop >= 1000 && $countShop < 10000) {
                    $s_reg = "IS-000".$countShop;
                   } else if($countShop >= 10000 && $countShop < 100000) {
                    $s_reg = "IS-00".$countShop;
                   } else if($countShop >= 100000 && $countShop < 1000000) {
                    $s_reg = "IS-0".$countShop;
                   }else{
                    $s_reg = "IS-".$countShop;
                   }
                    //   CREATE SHOP
                    $shops->insertShop($u_id,$s_reg,$s_name,$s_logo);
                    $m_name =" CREATED A SHOP NAMED ".$s_name." ON"; 
                    $metrics->insertMetric($u_id,$m_name);
                   
                   
                    $_SESSION['success_msg'] = $s_name." SHOP REGISTERED SUCCESSFULLY !! ";
                    header("location:../../".base()."shop");
                } else {
                    $_SESSION['fail_msg']=" SHOP ALLREADY EXIST!!";
                    header("location:../../".base()."shop");
                }                        
            } else {
                $_SESSION['fail_msg']="FILL OUT ALL TEXT FIELD !!";
                header("location:../../".base()."shop");
            }
            
            
        }
        break;
        case 'displayShop':
            array_push($shop,$shops->selectActiveShop());
            echo json_encode($shop);
            break;
    
    default:
        # code...
        break;
}


header("content-type:application/json");
?>
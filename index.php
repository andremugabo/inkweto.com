<?php 
session_start();
function base(){
    echo str_replace("index.php","",$_SERVER['PHP_SELF']);
}
if (isset($_SESSION['logged_user'])) {
    if ($_SESSION['logged_user']!= NULL) {
        // print_r($_SESSION['logged_user']);
        $loggedFname = $_SESSION['logged_user']['u_fname']; 
        $loggedLname = $_SESSION['logged_user']['u_lname'];
        $loggedID = $_SESSION['logged_user']['u_id'];
        $loggedREG = $_SESSION['logged_user']['u_reg'];
        $loggedGENDER = $_SESSION['logged_user']['g_name'];
        $loggedPHONE = $_SESSION['logged_user']['u_phone'];
        $loggedDATE = $_SESSION['logged_user']['u_date'];
        $loggedROLE = $_SESSION['logged_user']['u_role'];
        if ($loggedROLE === "SELLER") {
            include_once("INCLUDES/SELLER/header.php");
            }
    }
}else{
    $_SESSION['logged_user'] =null;
    include_once("INCLUDES/GENERAL/header.php");
}
 





?>


<?php require_once("url_controler.php"); ?>   

<?php include_once("INCLUDES/GENERAL/footer.php"); ?>

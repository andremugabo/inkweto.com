<?php  function base(){
    echo str_replace("index.php","",$_SERVER['PHP_SELF']);
}
?>

<?php include_once("INCLUDES/GENERAL/header.php");?>

<?php require_once("url_controler.php"); ?>   

<?php include_once("INCLUDES/GENERAL/footer.php"); ?>

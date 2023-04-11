<?php
$url = explode('/', $_SERVER['QUERY_STRING']);
// print_r($url) ;
$ADMIN = "PAGES/ADMINS/";
$PRODUCTS = "PAGES/PRODUCTS/";
$BUYER = "PAGES/BUYER/";
$SELLER = "PAGES/SELLER/";

if (file_exists($ADMIN . $url[0] . '.php')) {
    if ($url[0] == 'home' || $url[0] == 'index') {
        require_once $ADMIN.'index.php';
        
    } else {
        require_once $ADMIN . $url[0] . '.php';
    }
}elseif (file_exists($PRODUCTS . $url[0] . '.php')) {
    require_once $PRODUCTS . $url[0] . '.php';
}elseif (file_exists($SELLER . $url[0] . '.php')) {
    require_once $SELLER . $url[0] . '.php';
}elseif (file_exists($BUYER . $url[0] . '.php')) {
    require_once $BUYER . $url[0] . '.php';
}elseif(empty($url[0])){
    require_once $ADMIN.$url[0].'index.php';
}else{
    require_once $ADMIN.'error.php';
}



?>
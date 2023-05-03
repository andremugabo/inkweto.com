<?php
if (isset($_GET['logout'])) {
    header("location:./");
    session_destroy();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="icon" href="ASSETS/SIMAGES/icon.png" type="image/png">
    <link rel="stylesheet" href="ASSETS/CSS/style.css">
    <!-- <link rel="stylesheet" href="ASSETS/CSS/bootstrap.css"> -->
    <title>inkweto.com</title>
</head>
<body>
    <header class="d-flex w-100 justity-content-space-between align-items-center">
        <div class="c_log d-flex justity-content-center align-items-center">
            <a href="#"><img src="ASSETS/SIMAGES/weblogo.png" alt="company logo"></a>
        </div>
        <!-- <div class="create_shop">
            <button onclick="window.location.href='<?=base()?>seller'" class="d-flex justity-content-center align-items-center"><img src="ASSETS/SIMAGES/Shop.png" alt="shop_image">Create Shop</button>
        </div>
        <div class="h_search">
            <form action="#" class="w-100 d-flex ">
                <input type="search" placeholder="Search for Products,Brands...">
                <button><img src="ASSETS/SIMAGES/Search.png" alt="h_search"></button>
            </form>
        </div>
        <div class="h_account d-flex align-items-center">
            <img src="ASSETS/SIMAGES/User.png" alt="user image"><span >My Account</span>
            <div class="my_account d-none">
                <ul>
                    <li><button>Login</button></li>
                    <li><button>My Account</button></li>
                    <li><button>My Order</button></li>
                    <li><button>Shipping Address</button></li>
                    <li><button>Reset Password</button></li>
                    <li><button>Logout</button></li>
                    <li><button>Register</button></li>
                </ul>
            </div>
        </div>
        <div class="h_cart d-flex">
            <button><img src="ASSETS/SIMAGES/Cart.png" alt="h_cart"></button><span class="d-flex justity-content-center align-items-center">0</span>
        </div>
        <div class="wish_list d-flex">
            <button><img src="ASSETS/SIMAGES/Hearts.png" alt="wish_list"></button><span class="d-flex justity-content-center align-items-center">0</span>
        </div>
        <div class="responsive_menu d-none">
            <button><img src="ASSETS/SIMAGES/Menu.png" alt="h_menu"></button>
        </div> -->
        
            <div class="h_cart d-flex">
            <button><img src="ASSETS/SIMAGES/MessageD.png" alt="h_cart"></button><span class="d-flex justity-content-center align-items-center">0</span>
            </div>
            
            <div class="create_shop" style="margin-right: 30px;">
                <button class="d-flex justity-content-center align-items-center"  onclick="window.location.href='<?=base()?>?logout=1'">LOGOUT</button>
            </div>
        
        


    </header>
<!-- HEADER ENDS -->
<main>
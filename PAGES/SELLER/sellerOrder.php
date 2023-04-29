<?php $msg = "sellerOrder";?>
<?php $msgt = "Order";?>
<div class="seller_dashboard">
    
    <div class="seller_dashboard_left">
        <div class="s_dashboard">
            <span>SELLER&nbsp;DASHBOARD</span>
        </div>
        <ul>
            <li <?php if($msg=="sellerDashboard"){echo "style='background: linear-gradient(135deg,#11b0e8bf,#33769580);'";} ?>><button  onclick="window.location.href='<?=base()?>sellerDashboard'">Dashboard</button></li>
            <li <?php if($msg=="sellerShop") echo "style='background: linear-gradient(135deg,#11b0e8bf,#33769580);'";?>><button  onclick="window.location.href='<?=base()?>shop'">Shops</button></li>
            <li <?php if($msg=="sellerOrder") echo "style='background: linear-gradient(135deg,#11b0e8bf,#33769580);'";?>><button  onclick="window.location.href='<?=base()?>sellerOrder'">Order</button></li>
            <li <?php if($msg=="sellerSetting") echo "style='background: linear-gradient(135deg,#11b0e8bf,#33769580);'";?>><button  onclick="window.location.href='<?=base()?>sellerSetting'">Settings</button></li>
            <li <?php if($msg=="sellerReport") echo "style='background: linear-gradient(135deg,#11b0e8bf,#33769580);'";?>><button  onclick="window.location.href='<?=base()?>sellerReport'">Reports</button></li>
        </ul>
    </div>
    <div class="seller_dashboard_right">
        <div class="seller_dash_title">
                <span><?php echo $msgt; ?></span>
                <div class="login_name">
                    <h4>
                        <?php 
                            if (isset($_SESSION['logged_user'])) {
                                echo $loggedLname." ".$loggedFname;
                            } else {
                                header("location:./");
                            }          
                      ?>
                    </h4>
                </div>
        </div>

        <div class="msg">
            <?php 
                if (isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])) {?>
                                <h1 style="background: #0fdd1d7a;padding: 5px;width: 100%;text-align: center;"><?= $_SESSION['success_msg'] ?></h1>
                            <?php  $_SESSION['success_msg']="";  }else if(isset($_SESSION['fail_msg']) && !empty($_SESSION['fail_msg'])){?>
                                <h1 style="background: #b71c1c8f;padding: 5px;width: 100%;text-align: center;"><?= $_SESSION['fail_msg'] ?></h1>
                        <?php $_SESSION['fail_msg']="";	}			
            ?>
        </div>
        <div class="button_dash">
            <div class="left_btn_dash">
                <button>All&nbsp;Orders</button>&nbsp;
                <button>New&nbsp;Orders</button>&nbsp;
                <button>Pedding&nbsp;Orders</button>&nbsp;
                <button>Derivered&nbsp;Orders</button>
            </div>
            <div class="right_btn_dash">
            <button style="background-color: red;">Back</button>
            </div>
        </div>

    
    </div>    
</div>
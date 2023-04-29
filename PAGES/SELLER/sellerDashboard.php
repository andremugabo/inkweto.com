<?php $msg = "sellerDashboard";?>
<?php $msgt = "Dashboard";?>
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
                    <h4><?php 
                    if (isset($_SESSION['logged_user'])) {
                        echo $loggedLname." ".$loggedFname;
                    } else {
                        header("location:./");
                    }          
                      ?></h4>
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
        <div class="row_dash">


            <div class="col_dash">
                <a href="<?=base();?>shop">
                    <span>Shops</span>
                    <div class="principalD">
                        <div class="left_das">
                            <h3>1&nbsp;Shop</h3>
                        </div>
                        <div class="right_das">
                            <img src="ASSETS/SIMAGES/ShopD.png" alt="shop img">
                        </div>
                    </div>
                </a>
            </div>


            <div class="col_dash">
                <a href="<?=base();?>sellerOrder">
                    <span>Order</span>
                    <div class="principalD">
                        <div class="left_das">
                            <h3>1&nbsp;Order</h3>
                        </div>
                        <div class="right_das">
                            <img src="ASSETS/SIMAGES/OrderD.png" alt="shop img">
                        </div>
                    </div>
                </a>
            </div>


            <div class="col_dash">
                <a href="<?=base();?>sellerSetting">
                    <span>Settings</span>
                    <div class="principalD">
                        <div class="left_das">
                            <h3>Settings</h3>
                        </div>
                        <div class="right_das">
                            <img src="ASSETS/SIMAGES/SettingsD.png" alt="shop img">
                        </div>
                    </div>
                </a>
            </div>


            <div class="col_dash">
                <a href="<?=base();?>sellerReport">
                    <span>Reports</span>
                    <div class="principalD">
                        <div class="left_das">
                            <h3>Reports</h3>
                        </div>
                        <div class="right_das">
                            <img src="ASSETS/SIMAGES/ReportD.png" alt="shop img">
                        </div>
                    </div>
                </a>
            </div>

            



        </div>

    </div>
</div>
<?php $msg = "sellerShop";?>
<?php $msgt = "Shops";?>
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
                <button>All&nbsp;Shops</button>&nbsp;
                <button>Opened&nbsp;Shops</button>&nbsp;
                <button>Closed&nbsp;Shops</button>
            </div>
            <div class="right_btn_dash  open_modal">
                <button><img src="ASSETS/SIMAGES/Shop.png" alt=""></button>
            </div>
        </div>
        <div class="display_shop">
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Owner&nbsp;Name</th>
                        <th scope="col">Shop&nbsp;Name</th>
                        <th scope="col">Reg&nbsp;Number</th>
                        <th scope="col">Shop&nbsp;Logo</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody_shop">
                        
                    </tbody>
                </table>
        </div>

    
    </div>  
    <div class="seller_dash_modal hide">

            <div class="modal" id="CreateShopModal">
                
                
            <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create&nbsp;Shop</h5>
                            <button type="button" class="btn-close" >Close</button>
                        </div>
                        <div class="modal-body">

                            <form action="api/CONTROLER/shopController.php?action=createShop" method="post" enctype="multipart/form-data">        
                                <div class="modal_input hide">
                                    <label for="" class="form-label">Seller</label>
                                    <input class="form-control" name="u_id" type="text" value="<?= $loggedID;?>" required>
                                </div>

                                <div class="modal_input">
                                    <label for="" class="form-label">Shop Name</label>
                                    <input class="form-control" name="s_name" type="text" placeholder="Enter Shop Name" required>
                                </div>


                                <div class="modal_input">
                                    <label for="" class="form-label">Shop Logo</label>
                                    <input class="form-control" name="s_logo" type="file" placeholder="Shop Logo" required>
                                </div>

                                <div class="modal_input">
                                <button type="submit" name="create_shop">Create&nbsp;Shop</button>
                                </div>
                            </form>
                        
                        


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-close" style="position: absolute;right: 15px;bottom: 15px;">Close</button>
                        </div>
                    </div>
                
            </div>                     
        
    </div>  
</div>
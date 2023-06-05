<?php $msg = "sellerShop";?>
<?php $msgt = "Shop Details";?>
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
                <span>Shop Name</span>
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
                <form action="#" method="post" class="filter_product_form">
                    <select name="" id="" class="select_filter_product">
                        <option value="" selected disabled>Filter&nbsp;Name</option>
                    </select>
                    <select name="" id="" class="select_filter_product">
                        <option value="" selected disabled>Filter&nbsp;Category</option>
                    </select>
                    <button type="submit" class="submit_filter">Filter</button>
                </form>
            </div>
            <div class="right_btn_dash  open_modal">
                <button><img src="ASSETS/SIMAGES/Product.png" alt=""></button>
            </div>
        </div>
        <div class="display_shop">
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product&nbsp;Image</th>
                        <th scope="col">Product&nbsp;Name</th>
                        <th scope="col">Product&nbsp;Description</th>
                        <th scope="col">Product&nbsp;Quantity</th>
                        <th scope="col">Available&nbsp;Sizes</th>
                        <th scope="col">Available&nbsp;Colors</th>
                        <th scope="col">Ranking</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action&nbsp;On&nbsp;Product</th>
                        </tr>
                    </thead>
                    <tbody class="tbody_shop_datail">
                        <tr>
                        <th scope="row">1</th>
                        <td class="slogo_s" style="background-image: url('ASSETS/TESTIMAGES/images_015.jpg');" ></td>
                        <td>Adidas</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>100</td>
                        <td>34,36,38,40,42</td>
                        <td>Blue,White,Darkred</td>
                        <td>90%</td>
                        <td>20%</td>
                        <td>20,000Frw</td>
                        <td><button class="btn1_s" title="view shop"><img src="ASSETS/SIMAGES/Edit.png" alt="view image"></button>&nbsp;&nbsp;&nbsp;<button class="btn2_s" title="delete shop"><img src="ASSETS/SIMAGES/Delete.png" alt="view image"></button></td>
                        </tr>
                    </tbody>
                </table>
        </div>

    
    </div>  
    <div class="seller_dash_modal hide">

            <div class="modal" id="CreateShopModal">
                
                
            <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create&nbsp;Product</h5>
                            <button type="button" class="btn-close" >Close</button>
                        </div>
                        <div class="modal-body">

                            <form action="api/CONTROLER/shopController.php?action=createProduct" method="post" enctype="multipart/form-data">        
                                <div class="modal_input hide">
                                    <label for="" class="form-label">Seller</label>
                                    <input class="form-control" name="u_id" type="text" value="<?= $loggedID;?>" required>
                                </div>

                                <div class="modal_input">
                                    <label for="" class="form-label">Product&nbsp;Name</label>
                                    <input class="form-control" name="s_name" type="text" placeholder="Enter Product Name" required>
                                </div>


                                <div class="modal_input">
                                    <label for="" class="form-label">Product&nbsp;Image</label>
                                    <input class="form-control" name="s_logo" type="file" placeholder="Shop Logo" required>
                                </div>

                                <div class="modal_input">
                                <button type="submit" name="create_shop">Add&nbsp;Product</button>
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
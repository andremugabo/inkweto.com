<div class="seller_reg_login">
    <div class="seller_left_reg">
        <div class="inner_seller_left_reg">
            <div class="letf_reg_text">
                <h1>Sell Online</h1>
                <p>Launch your business in 10 minutes</p>
                <button  class="start_selling">Start Selling</button>
            </div>
        </div>
    </div>
    <div class="seller_right_reg">
        <div class="seller_right_header">
            <button class="seller_login">Login</button>
            <button  class="start_selling">Create&nbsp;Account</button>
        </div>
        <div class="form_seller_log hide">
            <h3>Login&nbsp;Form&nbsp;|&nbsp;inkweto.com</h3>
            <form action="" method="post" id="loginFormseller">
                <div class="form_items">
                    <label for="">Phone&nbspNumber</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/Phone.png" alt="PHONE">
                        <input type="text" placeholder="Enter your Phone Number" autocomplete="off">
                    </div>
                    <p class="hide" id="elphone">Error Enter your Phone Number </p>
                </div>

                <div class="form_items">
                    <label for="">Password</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/Key.png" alt="KEY">
                        <input type="Password" placeholder="Enter Password"   autocomplete="off">
                    </div>
                    <p class="hide" id="elpassword">Error Enter your Password </p>
                </div>

                <div class="btn_submit">
                    <button type="submit">Login</button>
                </div>

            </form>
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





        <div class="form_seller_reg">
            <h3>Registration&nbsp;Form&nbsp;|&nbsp;inkweto.com</h3>
            <form action="api/CONTROLER/usersController.php?action=createUsers" method="post" id="regFormSeller">
                <div class="reg_msg hide">
                    <!-- <h4>FAILED !!!</h4> -->
                </div>
                <div class="form_items">
                    <label for="">FirstName</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/CircledUserMale.png" alt="USER IMAGE">
                        <input type="text" placeholder="Enter your First Name" id="fname" name="fname" autocomplete="off" required>
                        
                    </div>
                    <p class="hide" id="efname">Error Enter your FirstName </p>
                </div>

                <div class="form_items">
                    <label for="">LastName</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/CircledUserMale.png" alt="USER">
                        <input type="text" placeholder="Enter your LastName" id="lname" name="lname" autocomplete="off" required>
                       
                    </div>
                     <p class="hide" id="elname">Error Enter your LastName </p>
                </div>

                <div class="form_items">
                    <label for="gender">Gender</label>
                    <div class="items_inner">
                        <label for="gender" id="forselect">Gender</label>
                        <select name="gender" id="gender" name="gender" required>
                            <option value="" selected disabled>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                    <p class="hide" id="egender">Error Select Gender </p>
                </div>


                <div class="form_items">
                    <label for="">Phone&nbspNumber</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/Phone.png" alt="PHONE">
                        <input type="text" placeholder="Enter your Phone Number" id="pnum" name="pnum" autocomplete="off" required>
                             
                    </div>
                    <p class="hide" id="ephone">Error Enter your Phoner Number </p>
                </div>


                <div class="form_items">
                    <label for="">Create a Password</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/Key.png" alt="KEY">
                        <input type="Password" placeholder="Create a Password"  id="password" name="password" autocomplete="off" required>
                              
                    </div>
                    <p class="hide" id="epassword">Error Create a Password </p>
                </div>

                <div class="form_items">
                    <label for="">Confirm your Password</label>
                    <div class="items_inner">
                        <img src="ASSETS/SIMAGES/Key.png" alt="KEY">
                        <input type="Password" placeholder="Confirm your Password" id="cpassword" name="cpassword" autocomplete="off" required>
                                  
                    </div>
                    <p class="hide" id="ecpassword">Error Confirm your Password</p>
                </div>

                <div class="form_items">
                    <div class="items_inner_check_box">
                        <input type="checkbox" name="sCheckbox" value="true" id="sCheckbox" required>
                        <span>I agree to the Terms of Use</span>                        
                    </div>
                    <p class="hide" id="ErrorScheckbox">Error Agree Terms of Use </p>
                </div>

                <div class="btn_submit">
                    <button type="submit" name="sellerReg">Registor</button>
                </div>

            </form>
        </div>

    </div>

</div>
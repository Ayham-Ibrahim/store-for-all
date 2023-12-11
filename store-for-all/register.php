<?php
    include "includes/Validation/isGuest.php";
    include 'includes/app-entry-point.php';
?>

<?php echo Head('Register'); ?>
<?php echo LogRegNav(); ?>
<div class="background" style="width: 100%;height: 100%;position: fixed;top: 0;bottom: 0;background-image: url('siteimg/b.jpg');background-size: cover;filter: blur(6px);"></div>
<div class="reg container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
        <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
                 <form action="includes/API/NewUser.php" method="POST" style="padding: inherit;">
                    <h5 class="fw-bold " style="letter-spacing: 2px;font-size:30px;color: rgb(233, 95, 3);">Create your account</h5>
                    
                    <div class="eam input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" name="name" placeholder="Enter your Name"/>
                    <!-- <label>Name</label> -->
                    </div>
                    <div class="eam input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="email" placeholder="Enter your Email"/>
                    <!-- <label>Email</label> -->
                    </div>
                    <div class="eam input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="text" required name="phone" placeholder="phone Number"/>
                    <!-- <label>phone</label>      -->
                    </div>
                    <div class="eam input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password" placeholder="Enter your password"/>
                    <!-- <label>Password</label>      -->
                    </div>
                    
                    <div class="agree">
                    <input type="checkbox" required/>
                    <label>agree to the terms and condition</label>     
                    </div>

                    <div>
                    <button class="btn" style="width: 100%;">Create</button>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;margin-top: 20px;margin-bottom: 9px !important;">already have an account?
                        <a href="login.php" class="login-link">login</a>
                        <div class="her">
                        <a href="#!" class="link small"  >Terms of use.</a>
                        <a href="#!" class="link small">Privacy policy</a>
                        </div>
                    </div>  
                    <?php
                    if(isset($_GET['error']))
                            echo '</br><small>This email is already exists</small>'; 
                    ?>   
                </form>
            </div>
            </div>  
     
        </div>
    </div>
    
   
      


<?php echo Footer(); ?>

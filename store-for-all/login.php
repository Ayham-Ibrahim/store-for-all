<?php
    include "includes/Validation/isGuest.php";
    include 'includes/app-entry-point.php';
?>

<?php echo Head('Login'); ?>
<?php echo LogRegNav(); ?>

    <div class="background" style="width: 100%;height: 100%;position: fixed;top: 0;bottom: 0;background-image: url('siteimg/b.jpg');background-size: cover;filter: blur(6px);">
    </div>            
        <!-- Section: Design Block -->
        
        <!-- <img src="siteimg\b.jpg" alt=""> -->
        <div class="log container px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center mb-5">
            <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">
                    <form action="includes/API/verifyLogin.php" method="POST">
                        <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 2px;;color: rgb(233, 95, 3);">Sign into your account</h3>
                
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" name="email" placeholder="Enter your Email">
                            <!-- <label>Email</label> -->
                                
                            
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" name="password" placeholder="Enter your Password"/>
                            <!-- <label>Password</label>      -->
                        </div>

                        <div> 
                            <a href="#" class="link" >Forgot password?</a>
                        </div>

                        <div>
                            <button class="btn" type="submit">Login</button>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;margin-top: 20px;">Don't have an account?
                            <a href="register.php" class="register-link">Register</a>
                        </div>  
                        
                        <a href="#!" class="link small">Terms of use.</a>
                        <a href="#!" class="link small">Privacy policy</a>
                    

                        
                        <?php
                            if(isset($_GET['error']))
                                echo '</br><small>Invalid Credintials</small>'; 
                        ?>
                        <?php
                        if(isset($_GET['success']))
                            echo '</br><small>You account has been created successfully</small>'; 
                        ?>
                    </form>
                </div>
                </div>  
        
            </div>
        </div>
        
            <!-- Section: Design Block -->
                <!-- <input type="email" name="email" placeholder="email">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Submit</button> -->
        
    
<?php echo Footer(); ?>
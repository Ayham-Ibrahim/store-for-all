<?php
    include "includes/Validation/isLoggedin.php";
    include "includes/DBConnection.php";
    include 'includes/app-entry-point.php';

?>
<?php echo Head('User-Page'); ?>
<?php echo AdminNav();?>
<div class="background" style="width: 100%;height: 100%;position: fixed;top: 0;bottom: 0;background-image: url('siteimg/b.jpg');background-size: cover;filter: blur(6px);"></div>

<div class="user container px-4 py-5 px-md-5  text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
        <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
                 <form action="includes/API/NewCategory.php" method="POST" style="padding: inherit;" enctype="multipart/form-data">
                    <h5 class="fw-bold text-center" style="letter-spacing: 2px;font-size:30px;color: rgb(233, 95, 3);padding-left:10px;padding-bottom:20px;">Add New Category</h5>
                    
                    <div class="newp form-group ">
                        <label for="formGroupExampleInput" class="col-3">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="The name of the product">
                    </div>
                    
                  
                   
                    <div class="newp form-outline">
                        <label class="form-label col-3" for="textAreaExample">Details</label>
                        <input type="text" name="details" class="form-control" id="formGroupExampleInput2" placeholder="Details">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose Photo...</label>
                    </div>
                    <button class="btn" type="submit" name="upload">Add category</button>
                    <?php
                    if(isset($_GET['error']))
                            echo '</br><small>This category is already exists</small>'; 
                    ?>
                    <?php
                     if(isset($_GET['success']))
                        echo '</br><small>Your category has been added successfully</small>'; 
                    ?>

                </form>
            </div>
            </div>  
     
        </div>
    </div>  

<?php echo Footer(); ?>
<?php
    include "includes/Validation/isLoggedin.php";
    include "includes/DBConnection.php";
    $userInfo = SQLWithData(
        "SELECT name, email FROM users WHERE id = :user_id", 
        ['user_id' => $_SESSION['user_id']]
    );

    $name = $userInfo[0]['name'];
    $email = $userInfo[0]['email'];

    $ID = $_GET['id'];
    include 'includes/app-entry-point.php';
    $up = SQLQuery("SELECT * FROM product WHERE id=$ID");

?>

<?php echo Head('User-Page'); ?>
<?php echo AddNewPNab();?>
<div class="background" style="width: 100%;height: 100%;position: fixed;top: 0;bottom: 0;background-image: url('siteimg/b.jpg');background-size: cover;filter: blur(6px);"></div>

<div class="user container px-4 py-5 px-md-5  text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
        <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
            <?php foreach($up as $uu) : ?>

                 <form action="includes/API/updated.php" method="POST" style="padding: inherit;" enctype="multipart/form-data">
                    <h5 class="fw-bold text-center" style="letter-spacing: 2px;font-size:30px;color: rgb(233, 95, 3);padding-left:10px;padding-bottom:20px;">Update your Product</h5>
                    
                    <div class="newp form-group ">
                        <label for="formGroupExampleInput" class="col-3">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" value='<?php echo $uu['name'];?>' placeholder="The name of the product">
                    </div>
                    <div class="newp form-group">
                        <label for="formGroupExampleInput2" class="col-3">Price</label>
                        <input type="text" name="price" class="form-control" id="formGroupExampleInput2" value='<?php echo $uu['price'];?>' placeholder="Product's price">
                    </div> 
                    <div class="newp form-group">
                        <label for="formGroupExampleInput2" class="col-3">phone</label>
                        <input type="text" name="phone" class="form-control" id="formGroupExampleInput2" value='<?php echo $uu['vendor-phone'];?>' placeholder="The owner's phone number">
                    </div>
                    <?php
                        $query = "SELECT name FROM category";
                        $results = SQLQuery($query);
                    ?>
                    <div class="newp form-group">    
                        <label for="formGroupExampleInput2" class="col-3" style="font-size: 14px !important;font-weight:500 ;">category</label>
                        <div>
                            <select class="custom-select" name="category" required>
                                <option value="">choose the produt's Category</option>
                                <?php foreach($results as $category) : ?>
                                    <option value="<?php echo $category['name'] ?>"><?php echo $category['name'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>    
                    </div>
                    <div class="newp form-outline">
                        <label class="form-label col-3" for="textAreaExample">Details</label>
                        <input type="text" name="details" class="form-control" id="formGroupExampleInput2" value='<?php echo $uu['details'];?>' placeholder="Details">
                    </div>
                    <input type="hidden" name="user_id" class="form-control" id="formGroupExampleInput2" value='<?php echo $_SESSION['user_id'];?>'>
                    <input type="hidden" name="id" class="form-control" id="formGroupExampleInput2" value='<?php echo $uu['id'];?>'>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" value='<?php echo $uu['image'];?>' name="image" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose Photo...</label>
                    </div>
                    <button class="btn" type="submit" name="upload">Add product</button>
                    <?php
                    if(isset($_GET['error']))
                            echo '</br><small>This product is already exists</small>'; 
                    ?>
                    <?php
                     if(isset($_GET['success']))
                        echo '</br><small>You product has been updated successfully</small>'; 
                    ?>

                </form>
            <?php endforeach; ?>

            </div>
            </div>  
     
        </div>
    </div>  

<?php echo Footer(); ?>
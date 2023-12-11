<?php
    include "includes/Validation/isLoggedin.php";
    include "includes/DBConnection.php";

    $userInfo = SQLWithData(
            "SELECT name, email FROM users WHERE id = :user_id", 
            ['user_id' => $_SESSION['user_id']]
    );
    
    $name = $userInfo[0]['name'];
    $email = $userInfo[0]['email'];
    $id =  $_SESSION['user_id'];

    include 'includes/app-entry-point.php';

?>

<?php echo Head('User-Page'); ?>
<?php echo UserNav();?>

<main class="user_product">
    <div class="container text-center">
        <div class="row gy-5">
        <h3 class="mine fw-bold mb-3 pb-3" style="letter-spacing: 2px;color: rgb(233, 95, 3);">My Product</h3>

            <?php 
            $row = SQLQuery("SELECT * FROM `product` WHERE user_id = $id ORDER BY `product`.`created_at` DESC");  
            ?>
            
            <?php foreach($row as $prod) : 
                $d = $prod['id'];
                ?>
                <div class="ProCol col-4">
                    <div class="card">
                        <img class="card-img-top" width="20" height="200" src="includes\API\imgs\<?php echo $prod['image']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prod['name']; ?></h5>
                            <p class="card-text"><?php echo $prod['details']; ?></p>
                            <small style="color:red;"><p><?php echo $prod['price']; ?>s.p</p></small>
                            <small><p style="color:red;">views: <?php echo $prod['views']; ?></p></small>
                            <div class="pbtn">
                            <a href='includes\API\delete-product.php? id=<?php echo $prod['id']; ?>' class="delete-pro-btn">delete</a>
                            <a href='update-product.php? id=<?php echo $prod['id']; ?>' class="update-btn">update</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>    
    </div>
  </main> 

<?php echo Footer(); ?>




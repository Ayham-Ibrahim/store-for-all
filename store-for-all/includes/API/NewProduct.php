<?php
    
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../add-new-product.php");
        return;
    }

    if(!isset($_POST['name']) || !isset($_POST['price']) || !isset($_POST['phone'])){
        header("location: ../../add-new-product.php");
        return;
    }

    include "../DBConnection.php";


    $query = "SELECT id FROM `product` WHERE name = :name AND price = :price";
    $data = [
        ':name'    => $_POST['name'],
        ':price'   => $_POST['price']
    ];
    $product = SQLWithData($query, $data);

    if(count($product) > 0){
        header("location: add-new-product.php?error=1");
    }
    else{
        if (isset($_POST['upload'])) {
            // Get image name
            $image = $_FILES['image']['name'];
            // Get text
            // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      
            // image file directory
            $target = "imgs/".basename($image);
      
            // $query = "INSERT INTO `product` (`image`) VALUES ('$image')";
            // // execute query
            // $img = SQLQuery($query);
            $query = "INSERT INTO `product`(`name`, `price`, `details`,`vendor-phone`,`user_id`,`image`,`category_name`) VALUES (:name, :price, :details, :vendor,:user_id,:image,:category)";
            $data = [
                ':name'     => $_POST['name'],
                ':price'    => $_POST['price'], 
                ':details'  => $_POST['details'],
                ':vendor'    => $_POST['phone'],
                ':user_id'  => $_POST['user_id'],
                ':image'     => $_FILES['image']['name'],
                ':category'  => $_POST['category'],
            ]; 
            $product = SQLWithData($query, $data);
            header("location: ../../add-new-product.php?success=1");
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        
 
    }


?>
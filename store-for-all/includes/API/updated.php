<?php
    
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../update-product.php");
        return;
    }

    if(!isset($_POST['name']) || !isset($_POST['price']) || !isset($_POST['phone'])){
        header("location: ../../update-product.php");
        return;
    }

    include "../DBConnection.php";
    $id = $_POST['id'];

    $query = "SELECT id FROM `product` WHERE name = :name AND price = :price";
    $data = [
        ':name'    => $_POST['name'],
        ':price'   => $_POST['price']
    ];
    $product = SQLWithData($query, $data);

    if(count($product) > 0){
        header("location: ../../update-product.php?error=1");
    }
    else{
        if (isset($_POST['upload'])) {
            // Get image name
            $image = $_FILES['image']['name'];
            
      
            // image file directory
            $target = "imgs/".basename($image);
            // update product
            $query = "UPDATE product SET `name`=':name',`price`=':price',`details`=':details',`vendor-phone`=':vendor',`image`=':image',`category_name`=':category' WHERE id =$id";
            $data = [
                ':name'     => $_POST['name'],
                ':price'    => $_POST['price'], 
                ':details'  => $_POST['details'],
                ':vendor'    => $_POST['phone'],
                ':image'     => $_FILES['image']['name'],
                ':category'  => $_POST['category'],
            ]; 
            $product = SQLWithData($query,$data);
           
            header("location: ../../update-product.php?success=1");
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }
        }
        
 
    }

?>
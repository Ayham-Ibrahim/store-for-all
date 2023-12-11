<?php

    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../admin-page.php");
        return;
    }

    if(!isset($_POST['name']) || !isset($_POST['details'])){
        header("location: ../../admin-page.php");
        return;
    }

    include "../DBConnection.php";

    $query = "SELECT id FROM `category` WHERE name = :name";
    $data = [
        ':name'    => $_POST['name'],
    ];
    $category = SQLWithData($query, $data);

    if(count($category) > 0){
        header("location: admin-page.php?error=1");
    }
    else{
        if (isset($_POST['upload'])) {
            // Get image name
            $image = $_FILES['image']['name'];
            // Get text
            // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
      
            // image file directory
            $target = "catimg/".basename($image);
      
           
            $query = "INSERT INTO `category`(`name`, `details`,`image`) VALUES (:name, :details, :image)";
            $data = [
                ':name'     => $_POST['name'],
                ':details'  => $_POST['details'],
                'image'     => $_FILES['image']['name'],    
            ]; 
            $category = SQLWithData($query, $data);
            header("location: ../../admin-page.php?success=1");
      
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";    
            }
        }
        
      
     
    }


?>
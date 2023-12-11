<?php
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../login.php");
        return;
    }

    if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['name']) || !isset($_POST['phone'])){
        header("location: ../../register.php");
        return;
    }

    include "../DBConnection.php";

    $query = "SELECT id FROM `users` WHERE email = :email";
    $data = [
        ':email'    => $_POST['email'],
    ];
    $users = SQLWithData($query,$data);

    if(count($users) > 0){
        header("location: register.php?error=1");
    }
    else{
        $query = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, role) VALUES (:name, :email, SHA1(:password), :phone, :role)";
        $data = [
            ':name'     => $_POST['name'],
            ':email'    => $_POST['email'],
            ':password' => $_POST['password'],
            ':phone'    => $_POST['phone'],
            ':role'     => 0,
        ];  
        $users = SQLWithData($query,$data);
        header("location: ../../login.php?success=1");
    }
?>
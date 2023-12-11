<?php
    if($_SERVER['REQUEST_METHOD'] != "POST"){
        header("location: ../../login.php");
        return;
    }

    if(!isset($_POST['email']) || !isset($_POST['password'])){
        header("location: ../../login.php");
        return;
    }

    /* Verify your data */
    include "../DBConnection.php";

    $query = "SELECT id FROM `users` WHERE email = :email AND password = SHA1(:password)";
    $data = [
        ':email'    => $_POST['email'],
        ':password' => $_POST['password']
    ];

    $users = SQLWithData($query,$data);

    if(count($users) > 0){
        // login this user
        session_start();
        $_SESSION['user_id'] = $users[0]['id'];
        $adminInfo = SQLWithData(
            "SELECT role FROM users WHERE id = :user_id", 
            ['user_id' => $_SESSION['user_id']]
        );
    
        $role = $adminInfo[0]['role'];
    
        if($role == 1){
            header("location: ../../admin-page.php");
    
        }
        else{
            header("location: ../../user-page.php");
    
        } 
    }  
    else{
        // send this user back
        header("location: ../../login.php?error=1");
    }

    /**
     * 1. Check the request
     * 2. Check the input (validation of the form)
     * 3. check if the data exists in the database (Authorization)
     * 4. Do the process
     */
?>
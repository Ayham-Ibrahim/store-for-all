<?php

    include "../DBConnection.php";
    $ID = $_GET['id'];
    SQLQuery("DELETE FROM product WHERE id=$ID");
    header("location: ../../user-page.php");

?>